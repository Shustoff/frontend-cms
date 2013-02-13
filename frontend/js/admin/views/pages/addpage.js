// Вид добавления каталога

define([
    'Marionette',
    'Handlebars',
    '../../models/page',
    'text!../../templates/pages/addpage.hbs',
    'CKEditor',
    'Helpers',
    'Knockout',
    'ajaxUpload',
    'jQueryValidate',
    'addMethods',
    'jQueryUI',
    'jQueryUIDatepicker'
], function(Marionette, Handlebars, Page, AddPageTemplate, CKEDITOR, Helpers, ko) {
    return Frontend.Views.AddPageView = Backbone.Marionette.ItemView.extend({

        initialize: function() {
            this.render();
            this.preValidate();
            Helpers.initEditor(this);
            Helpers.uploadInit(this);
        },

        ui: {
            date: '#datepicker',
            form: '#addpage',
            pageName: '#pagename',
            alias: '#alias',
            failPageName: '.failpagename',
            failAlias: '.failalias',
            mp3: '#mp3-link',
            metadesc: '#metadesc',
            keywords: '#keywords',
            pageCatalog: '#pagecatalog',
            editor: '#editor',
            authorId: '#author_id',
            editorFail: '.editorfail',
            errorBody: '.error-body'
        },

        events: {
            'submit #addpage': 'addPage'
        },

        template: Handlebars.compile(AddPageTemplate),

        render: function() {
            $('.main').html( this.template({ item: this.model.toJSON(), siteURL: Frontend.siteURL }) );
            Helpers.today( this.ui.date );
            this.setElement('.w-addpage');
            return this;
        },

        preValidate: function() {
            var self = this;
            $( this.ui.form ).validate({
                onfocusout: function(element) { $(element).valid(); },
                rules: {
                    pagename: { required: true },
                    alias: { required: true, alphanumeric: true }
                },
                messages: {
                    pagename: { required: 'Пожалуйста введите заголовок страницы' },
                    alias: { required: 'Пожалуйста введите алиас страницы' }
                }
            });
            this.startPageName = $( this.ui.pageName ).val();
            this.startPageAlias = $( this.ui.alias ).val();
            function PageModel() {
                this.pageName = ko.observable( $( self.ui.pageName ).val() );
                this.isPageNameValid = ko.computed(function() {
                    return this.pageName() &&
                        (this.pageName() !== self.startPageName
                            ? self.checkPageName()
                            : (function() { $( self.ui.failPageName ).empty(); return true; })()
                            );
                }, this);
                this.pageAlias = ko.observable( $( self.ui.alias ).val() );
                this.isPageAliasValid = ko.computed(function() {
                    return this.pageAlias() &&
                        (this.pageAlias() !== self.startPageAlias
                            ? self.checkPageAlias()
                            : (function() { $( self.ui.failAlias ).empty(); return true; })()
                            );
                }, this);
                this.pageMp3 = ko.observable( $( self.ui.mp3 ).val() );
                this.pageDesc = ko.observable( $( self.ui.metadesc ).html() );
                this.pageKeywords = ko.observable( $( self.ui.keywords ).html() );
                this.pageDate = ko.observable( $( self.ui.date ).val() );
                this.pageCat = ko.observable( $( self.ui.pageCatalog ).val() );
                this.isValid = ko.computed(function() {
                    this.pageMp3(); this.pageDesc(); this.pageKeywords(); this.pageDate(); this.pageCat();
                    return this.isPageNameValid() && this.isPageAliasValid() && $( self.ui.form ).valid();
                }, this);
            }
            this.pageModel = new PageModel();
            ko.applyBindings(this.pageModel);
        },

        checkPageName: function() {
            var isValid, self = this;
            $.ajax({
                async: false,
                type: 'POST',
                url: Frontend.adminURL + "/pages/checkpagename",
                data: { pagename: $( this.ui.pageName ).val() },
                success: function(data) {
                    $( self.ui.failPageName ).text(data);
                    data ? isValid = false : isValid = true;
                }
            });
            return isValid;
        },

        checkPageAlias: function() {
            var isValid, self = this;
            $.ajax({
                async: false,
                type: 'POST',
                url: Frontend.adminURL + "/pages/checkalias",
                data: { alias: $( this.ui.alias ).val() },
                success: function(data) {
                    $( self.ui.failAlias ).text(data);
                    data ? isValid = false : isValid = true;
                }
            });
            return isValid;
        },

        addPage: function(e) {
            e.preventDefault();
            this.model.urlRoot = Frontend.adminURL + '/pages/add';
            if ( editor.getData() ) {
                this.model.unset('page');
                this.model.unset('catalogs');
                this.model.unset('userId');
                this.model.save({
                    pagename: this.pageModel.pageName(),
                    alias: this.pageModel.pageAlias(),
                    metadesc: this.pageModel.pageDesc(),
                    metakeywords: this.pageModel.pageKeywords(),
                    content: $( this.ui.editor ).val(),
                    image: $('.imageName img').attr('src').match( /([^\/]*)$/g )[0],
                    catalog_id: this.pageModel.pageCat(),
                    author_id: $( this.ui.authorId ).val(),
                    date: this.pageModel.pageDate(),
                    status: '1',
                    intrash: '0',
                    link: this.pageModel.pageMp3()
                }, {success: this.onSave, error: this.onSaveError});
            } else {
                $( this.ui.editorFail ).show().delay(5000).hide(100);
            }
        },

        onSave: function(model) {
            Helpers.completeSave();
            Frontend.Router.navigate('//pages/edit/' + model.get('alias'), true);
        },

        onSaveError: function(model, error) {
            $( this.ui.errorBody ).text(error);
            Helpers.errorSave();
        }

    });
});