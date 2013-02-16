define([
    'Marionette',
    'Handlebars',
    '../../models/role',
    './addrole',
    'text!../../templates/roles/editrole.hbs',
    'Helpers',
    'Knockout',
    'jQueryValidate',
    'addMethods',
    'jQueryUI',
    'jQueryUIDatepicker'
], function(Marionette, Handlebars, Role, AddRoleView, EditRoleTemplate, Helpers, ko) {
    return Frontend.Views.EditRoleView = AddRoleView.extend({

        ui: {
            id: '#itemId',
            date: '#datepicker',
            form: 'form#editrole',
            name: '#name',
            description: '#description',
            rolePages: '.rolePages:checked',
            roleCats: '.roleCats:checked',
            roleUsers: '.roleUsers:checked',
            roleMods: '.roleMods:checked',
            roleMails: '.roleMails:checked',
            roleStats: '.roleStats:checked',
            roleOpts: '.roleOpts:checked',
            roleTrash: '.roleTrash:checked',
            failRole: '.failrole',
            errorBody: '.error-body'
        },

        events: {
            'submit #editrole': 'saveRole'
        },

        template: Handlebars.compile(EditRoleTemplate),

        saveRole: function(e) {
            e.preventDefault();
            this.model.urlRoot = Frontend.adminURL + '/roles/save';
            this.model.save({
                id: $( this.ui.id ).val(),
                name: this.roleModel.roleName(),
                description: this.roleModel.roleDesc(),
                pages: this.roleModel.rolePages(),
                cats: this.roleModel.roleCats(),
                users: this.roleModel.roleUsers(),
                mods: this.roleModel.roleMods(),
                mails: this.roleModel.roleMails(),
                stats: this.roleModel.roleStats(),
                opts: this.roleModel.roleOpts(),
                trash: this.roleModel.roleTrash(),
                date: this.roleModel.roleDate()
            }, {success: this.onSave, error: this.onSaveError});
        },

        onSave: function() {
            Helpers.completeSave();
        }

    });
});