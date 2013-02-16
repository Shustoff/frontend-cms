// Вид добавления пользователя

define([
    'Marionette',
    'Handlebars',
    '../../models/user',
    'text!../../templates/users/adduser.hbs',
    'Helpers',
    'Knockout',
    'jQueryValidate',
    'addMethods',
    'jQueryUI',
    'jQueryUIDatepicker'
], function(Marionette, Handlebars, User, AddUserTemplate, Helpers, ko) {
    return Frontend.Views.AddUserView = Backbone.Marionette.ItemView.extend({

        initialize: function() {
            this.render();
            this.preValidate();
        },

        ui: {
            date: '#datepicker',
            form: 'form#adduser',
            userName: '#username',
            failUserName: '.failusername',
            email: '#email',
            failEmail: '.failemail',
            firstName: '#firstname',
            lastName: '#surname',
            roleName: '#role',
            errorBody: '.error-body'
        },

        events: {
            'submit #adduser': 'addUser'
        },

        template: Handlebars.compile(AddUserTemplate),

        render: function() {
            $('.main').html( this.template( this.model.toJSON() ));
            Helpers.today( this.ui.date );
            this.setElement('.w-user');
            return this;
        },

        preValidate: function() {
            var self = this;
            $( this.ui.form ).validate({
                onfocusout: function(element) { $(element).valid(); },
                rules: {
                    username: { required: true, alphanumeric: true, minlength: 3 },
                    email: { required: true, email: true },
                    password: { required: true, minlength: 8 },
                    passwordConfirm: { required: true, equalTo: '#password' }
                },
                messages: {
                    username: {
                        required: 'Пожалуйста введите логин',
                        minlength: 'Логин должен быть минимум 3 символа'
                    },
                    email: {
                        required: 'Пожалуйста введите email',
                        email: 'Email должен быть валидным'
                    },
                    password: {
                        required: "Пожалуйста введите пароль",
                        minlength: 'Пароль должен быть минимум 8 символов'
                    },
                    passwordConfirm: {
                        required: "Пожалуйста повторите пароль",
                        equalTo: "Пожалуйста повторите пароль"
                    }
                }
            });

            this.startUserName = $( this.ui.userName ).val();
            this.startEmail = $( this.ui.email ).val();

            function UserModel() {
                this.userName = ko.observable( self.startUserName );
                this.email = ko.observable( self.startEmail );
                this.password = ko.observable();
                this.passwordConfirm = ko.observable();
                this.equalsPassword = ko.computed(function() {
                    return (this.password() && ( this.password() === this.passwordConfirm() ));
                }, this);
                this.isUserNameValid = ko.computed(function() {
                    return this.userName() &&
                        (this.userName() !== self.startUserName
                            ? self.checkLogin()
                            : (function() { $( self.ui.failUserName ).empty(); return true; }())
                        );
                }, this);
                this.isEmailValid = ko.computed(function() {
                    return this.email() &&
                        (this.email() !== self.startEmail
                            ? self.checkEmail()
                            : (function() { $( self.ui.failEmail ).empty(); return true; }())
                        );
                }, this);
                this.userFirstName = ko.observable( $( self.ui.firstName ).val() );
                this.userLastName = ko.observable( $( self.ui.lastName ).val() );
                this.userRoleName = ko.observable( $( self.ui.roleName ).val() );
                this.userDate = ko.observable( $( self.ui.date ).val() );
                this.isValid = ko.computed(function() {
                    this.userFirstName(); this.userLastName(); this.userRoleName(); this.userDate();
                    return this.isUserNameValid() && this.isEmailValid() && this.equalsPassword() && $( self.ui.form ).valid();
                }, this);
            }

            this.userModel = new UserModel();
            ko.applyBindings(this.userModel);
        },

        checkLogin: function() {
            var isValid, self = this;
            $.ajax({
                async: false,
                type: 'POST',
                url: Frontend.adminURL + "/users/checklogin",
                data: { username: $( self.ui.userName ).val() },
                success: function(data) {
                    $( self.ui.failUserName ).text(data);
                    data ? isValid = false : isValid = true;
                }
            });
            return isValid;
        },

        checkEmail: function() {
            var isValid, self = this;
            $.ajax({
                async: false,
                type: 'POST',
                url: Frontend.adminURL + "/users/checkemail",
                data: { email: $( self.ui.email ).val() },
                success: function(data) {
                    $( self.ui.failEmail ).text(data);
                    data ? isValid = false : isValid = true;
                }
            });
            return isValid;
        },

        addUser: function(e) {
            e.preventDefault();
            this.model.urlRoot = Frontend.adminURL + '/users/add';
            this.model.unset('roles');
            this.model.save({
                username: this.userModel.userName(),
                email: this.userModel.email(),
                rolename: this.userModel.userRoleName(),
                password: this.userModel.password(),
                password_confirm: this.userModel.passwordConfirm(),
                firstname: this.userModel.userFirstName(),
                lastname: this.userModel.userLastName(),
                datereg: this.userModel.userDate(),
                status: '1',
                intrash: '0'
            }, {success: this.onSave, error: this.onSaveError});
        },

        onSave: function(model) {
            Helpers.completeSave();
            Frontend.Router.navigate('/users/edit/' + model.get('username'), true);
        },

        onSaveError: function(model, error) {
            $( self.ui.errorBody ).text(error);
            Helpers.errorSave();
        }

    });
});