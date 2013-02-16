// Вид редактирования каталога

define([
    'Marionette',
    'Handlebars',
    '../../models/catalog',
    './addcatalog',
    'text!../../templates/catalogs/editcatalog.hbs',
    'Helpers',
    'Knockout',
    'jQueryValidate',
    'addMethods',
    'jQueryUI',
    'jQueryUIDatepicker'
], function(Marionette, Handlebars, Catalog, AddCatalogView, EditCatalogTemplate, Helpers, ko) {
    return Frontend.Views.EditCatalogView = AddCatalogView.extend({

        initialize: function() {
            this.render();
            this.preValidate();
            Helpers.initEditor(this);
        },

        ui: {
            id: '#idItem',
            datepicker: '#datepicker',
            form: 'form#editcatalog',
            catalogName: '#catname',
            alias: '#alias',
            failCatalogName: '.failcatname',
            failAlias: '.failalias',
            parentCatalog: '#parentcatalog',
            editor: '#editor',
            editorFail: '.editorfail',
            status: '#status',
            intrash: '#intrash',
            errorBody: '.error-body'
        },

        events: {
            'submit #editcatalog': 'saveCatalog'
        },

        template: Handlebars.compile(EditCatalogTemplate),

        render: function() {
            $('.main').html( this.template({ item: this.model.toJSON(), siteURL: Frontend.siteURL }) );
            this.setElement('.w-editcatalog');
            return this;
        },

        saveCatalog: function(e) {
            e.preventDefault();
            this.model.urlRoot = Frontend.adminURL + '/catalogs/save/';
            if ( editor.getData() ) {
                this.model.unset('catalog');
                this.model.unset('catalogs');
                this.model.save({
                    id: $( this.ui.id ).val(),
                    catname: this.catModel.catName(),
                    alias: this.catModel.catAlias(),
                    content: $( this.ui.editor ).val(),
                    parent_id: this.catModel.parentCat(),
                    date: this.catModel.catDate(),
                    status: $( this.ui.status ).val(),
                    intrash: $( this.ui.intrash ).val()
                }, {success: this.onSave, error: this.onSaveError});
            } else {
                $( this.ui.editorFail ).show().delay(5000).hide(100);
            }
        },

        onSave: function() {
            Helpers.completeSave();
        }

    });
});