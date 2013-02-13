define([
    'Marionette',
    'Handlebars',
    '../../models/page',
    './addpage',
    'text!../../templates/pages/editpage.hbs',
    'CKEditor',
    'Helpers',
    'Knockout',
    'ajaxUpload',
    'jQueryValidate',
    'addMethods',
    'jQueryUI',
    'jQueryUIDatepicker'
], function(Marionette, Handlebars, Page, AddPageView, EditPageTemplate, CKEDITOR, Helpers, ko) {
    return Frontend.Views.EditPageView = AddPageView.extend({

        ui: {
            id: '#pageId',
            date: '#datepicker',
            form: '#editpage',
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
            'submit #editpage': 'savePage'
        },

        template: Handlebars.compile(EditPageTemplate),

        render: function() {
            $('.main').html( this.template({ item: this.model.toJSON(), siteURL: Frontend.siteURL }) );
            Helpers.today( this.ui.date );
            this.setElement('.w-editpage');
            return this;
        },

        savePage: function(e) {
            e.preventDefault();
            this.model.urlRoot = Frontend.adminURL + '/pages/save/';
            if ( editor.getData() ) {
                this.model.unset('page');
                this.model.unset('catalogs');
                this.model.unset('userId');
                this.model.save({
                    id: $( this.ui.id ).val(),
                    pagename: this.pageModel.pageName(),
                    alias: this.pageModel.pageAlias(),
                    metadesc: this.pageModel.pageDesc(),
                    metakeywords: this.pageModel.pageKeywords(),
                    content: $( this.ui.editor ).val(),
                    image: $('.imageName img').attr('src').match( /([^\/]*)$/g )[0],
                    catalog_id: this.pageModel.pageCat(),
                    author_id: $( this.ui.authorId ).val(),
                    date: this.pageModel.pageDate(),
                    link: this.pageModel.pageMp3()
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