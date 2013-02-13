// Вид редактирования пользователя

define([
    'Marionette',
    'Handlebars',
    '../../models/user',
    './adduser',
    'text!../../templates/users/edituser.hbs',
    'CKEditor',
    'Helpers',
    'Knockout',
    'jQueryValidate',
    'addMethods',
    'jQueryUI',
    'jQueryUIDatepicker'
], function(Marionette, Handlebars, User, AddUserView, EditUserTemplate, CKEDITOR, Helpers, ko) {
    return Frontend.Views.EditUserView = AddUserView.extend({

        events: {
            'submit #edituser': 'saveUser'
        },

        ui: {
            id: '#idItem',
            role: '#role',
            date: '#datepicker',
            form: 'form#edituser',
            userName: '#username',
            failUserName: '.failusername',
            email: '#email',
            failEmail: '.failemail',
            firstName: '#firstname',
            lastName: '#surname',
            roleName: '#role',
            errorBody: '.error-body'
        },

        template: Handlebars.compile(EditUserTemplate),

        saveUser: function(e) {
            e.preventDefault();
            this.model.urlRoot = Frontend.adminURL + '/users/save';
            this.model.unset('roles');
            this.model.unset('user');
            this.model.unset('alias');
            this.model.save({
                id: $( this.ui.id ).val(),
                rolename: $( this.ui.role ).val(),
                username: this.userModel.userName(),
                email: this.userModel.email(),
                password: this.userModel.password(),
                password_confirm: this.userModel.passwordConfirm(),
                firstname: this.userModel.userFirstName(),
                lastname: this.userModel.userLastName(),
                datereg: this.userModel.userDate()
            }, {success: this.onSave, error: this.onSaveError});
        },

        onSave: function() {
            Helpers.completeSave();
        }

    });
});