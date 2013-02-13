// Вид добавления каталога

define([
    'Marionette',
    'Handlebars',
    '../../models/catalog',
    'text!../../templates/catalogs/addcatalog.hbs',
    'CKEditor',
    'Helpers',
    'Knockout',
    'jQueryValidate',
    'addMethods',
    'jQueryUI',
    'jQueryUIDatepicker'
], function(Marionette, Handlebars, Catalog, AddCatalogTemplate, CKEDITOR, Helpers, ko) {
    return Frontend.Views.AddCatalogView = Backbone.Marionette.ItemView.extend({

        initialize: function() {
            this.render();
            this.preValidate();
            Helpers.initEditor(this);
        },

        ui: {
            datepicker: '#datepicker',
            form: 'form#addcatalog',
            catalogName: '#catname',
            alias: '#alias',
            failCatalogName: '.failcatname',
            failAlias: '.failalias',
            parentCatalog: '#parentcatalog',
            editor: '#editor',
            editorFail: '.editorfail',
            errorBody: '.error-body'
        },

        events: {
            'submit #addcatalog': 'addCatalog'
        },

        template: Handlebars.compile(AddCatalogTemplate),

        render: function() {
            $('.main').html( this.template({ item: this.model.toJSON(), siteURL: Frontend.siteURL }) );
            Helpers.today( this.ui.datepicker );
            this.setElement('.w-addcatalog');
            return this;
        },

        preValidate: function() {
            var self = this;
            $( this.ui.form ).validate({
                onfocusout: function(element) { $(element).valid(); },
                rules: {
                    catname: { required: true },
                    alias: { required: true, alphanumeric: true }
                },
                messages: {
                    catname: { required: 'Пожалуйста введите название каталога' },
                    alias: { required: 'Пожалуйста введите алиас каталога' }
                }
            });
            this.startCatName = $( this.ui.catalogName ).val();
            this.startCatAlias = $( this.ui.alias ).val();
            function CatalogModel() {
                this.catName = ko.observable( $( self.ui.catalogName ).val() );
                this.isCatNameValid = ko.computed(function() {
                    return this.catName() &&
                        (this.catName() !== self.startCatName
                            ? self.checkCatName()
                            : (function() { $( self.ui.failCatalogName ).empty(); return true; })()
                        );
                }, this);
                this.catAlias = ko.observable( $( self.ui.alias ).val() );
                this.isCatAliasValid = ko.computed(function() {
                    return this.catAlias() &&
                        (this.catAlias() !== self.startCatAlias
                            ? self.checkCatAlias()
                            : (function() { $( self.ui.failAlias ).empty(); return true; })()
                        );
                }, this);
                this.catDate = ko.observable( $( self.ui.datepicker ).val() );
                this.parentCat = ko.observable( $( self.ui.parentCatalog ).val() );
                this.isValid = ko.computed(function() {
                    this.catDate(); this.parentCat();
                    return this.isCatNameValid() && this.isCatAliasValid() && $( self.ui.form ).valid();
                }, this);
            }
            this.catModel = new CatalogModel();
            ko.applyBindings(this.catModel);
        },

        checkCatName: function() {
            var isValid, self = this;
            $.ajax({
                async: false,
                type: 'POST',
                url: Frontend.adminURL + "/catalogs/checkcatname",
                data: { catname: $( this.ui.catalogName ).val() },
                success: function(data) {
                    $( self.ui.failCatalogName ).text(data);
                    data ? isValid = false : isValid = true;
                }
            });
            return isValid;
        },

        checkCatAlias: function() {
            var isValid, self = this;
            $.ajax({
                async: false,
                type: 'POST',
                url: Frontend.adminURL + "/catalogs/checkalias",
                data: { alias: $( self.ui.alias ).val() },
                success: function(data) {
                    $( self.ui.failAlias ).text(data);
                    data ? isValid = false : isValid = true;
                }
            });
            return isValid;
        },

        addCatalog: function(e) {
            e.preventDefault();
            this.model.urlRoot = Frontend.adminURL + '/catalogs/add';
            if ( editor.getData() ) {
                this.model.unset('catalog');
                this.model.unset('catalogs');
                this.model.save({
                    catname: this.catModel.catName(),
                    alias: this.catModel.catAlias(),
                    content: $( this.ui.editor ).val(),
                    parent_id: this.catModel.parentCat(),
                    date: this.catModel.catDate(),
                    status: '1',
                    intrash: '0'
                }, {success: this.onSave, error: this.onSaveError});
            } else {
                $( this.ui.editorFail ).show().delay(5000).hide(100);
            }
        },

        onSave: function(model) {
            Helpers.completeSave();
            Frontend.Router.navigate('//catalogs/edit/' + model.get('alias'), true);
        },

        onSaveError: function(model, error) {
            $( this.ui.errorBody ).text(error);
            Helpers.errorSave();
        }

    });
});