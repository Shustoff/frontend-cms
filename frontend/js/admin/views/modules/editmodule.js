// Вид редактирования модуля

define([
    'Marionette',
    'Handlebars',
    '../../models/module',
    './addmodule',
    'text!../../templates/modules/editmodule.hbs',
    'CKEditor',
    'Helpers',
    'jQueryValidate',
    'addMethods',
    'jQueryUI',
    'jQueryUIDatepicker'
], function(Marionette, Handlebars, Module, AddModuleView, EditModuleTemplate, CKEDITOR, Helpers) {
    return Frontend.Views.EditModuleView = AddModuleView.extend({

        ui: {
            id: '#modId',
            date: '#datepicker',
            form: 'form#editmodule',
            modname: '#modname',
            systemname: '#systemname',
            failModName: '.failmodname',
            failSysName: '.failsysname',
            modtype: '#typemodule',
            editor: '#editor',
            authorId: '#authorId',
            failEditor: '.editorfail',
            errorBody: '.error-body',
            status: '#status',
            intrash: '#intrash'
        },

        events: {
            'submit #editmodule': 'saveModule'
        },

        template: Handlebars.compile(EditModuleTemplate),

        render: function() {
            $('.main').html( this.template( this.model.toJSON() ));
            $( this.ui.date ).datepicker();
            this.setElement('.w-module');
            return this;
        },

        saveModule: function(e) {
            e.preventDefault();
            this.model.urlRoot = Frontend.adminURL + '/modules/save/';
            if ( editor.getData() ) {
                this.model.unset('alias');
                this.model.unset('module');
                this.model.save({
                    id: $( this.ui.id ).val(),
                    author_id: $( this.ui.authorId ).val(),
                    name: this.moduleModel.modName(),
                    systemname: this.moduleModel.sysName(),
                    content: $( this.ui.editor ).val(),
                    type: this.moduleModel.modType(),
                    date: this.moduleModel.modDate(),
                    status: $( this.ui.status ).val(),
                    intrash: $( this.ui.intrash ).val()
                }, {success: this.onSave, error: this.onSaveError});
            } else {
                $( this.ui.failEditor ).show().delay(5000).hide(100);
            }
        },

        onSave: function() {
            Helpers.completeSave();
        }

    });
});