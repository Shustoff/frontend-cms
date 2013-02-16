define([
    'Marionette',
    'Handlebars',
    '../../models/role',
    'text!../../templates/roles/addrole.hbs',
    'Helpers',
    'Knockout',
    'jQueryValidate',
    'addMethods',
    'jQueryUI',
    'jQueryUIDatepicker'
], function(Marionette, Handlebars, Role, AddRoleTemplate, Helpers, ko) {
    return Frontend.Views.AddRoleView = Backbone.Marionette.ItemView.extend({

        initialize: function() {
            this.render();
            this.preValidate();
        },

        ui: {
            date: '#datepicker',
            form: 'form#addrole',
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
            'submit #addrole': 'addRole'
        },

        template: Handlebars.compile(AddRoleTemplate),

        render: function() {
            $('.main').html( this.template( this.model.toJSON() ));
            Helpers.today( this.ui.date );
            this.setElement('.w-role');
            return this;
        },

        preValidate: function() {
            var self = this;
            $( this.ui.form ).validate({
                onfocusout: function(element) { $(element).valid(); },
                rules: {
                    name: {
                        required: true,
                        alphanumeric: true,
                        minlength: 4
                    },
                    description: "required"
                },
                messages: {
                    name: {
                        required: 'Пожалуйста введите название роли (например admin)',
                        minlength: 'Название роли должно быть минимум 4 символа'
                    },
                    description: 'Пожалуйста введите описание роли (например Администратор)'
                }
            });

            this.startRoleName = $( this.ui.name ).val();
            this.startRoleDesc = $( this.ui.description ).val();

            function RoleModel() {
                this.roleName = ko.observable( self.startRoleName );
                this.roleDesc = ko.observable( self.startRoleDesc );
                this.isRoleNameValid = ko.computed(function(){
                    return this.roleName() &&
                        (this.roleName() !== self.startRoleName
                            ? self.checkRoleName()
                            : (function() {$( self.ui.failRole ).empty(); return true;}())
                        );
                }, this);
                this.rolePages = ko.observable( $( self.ui.rolePages ).val() );
                this.roleCats = ko.observable( $( self.ui.roleCats ).val() );
                this.roleUsers = ko.observable( $( self.ui.roleUsers ).val() );
                this.roleMods = ko.observable( $( self.ui.roleMods ).val() );
                this.roleMails = ko.observable( $( self.ui.roleMails ).val() );
                this.roleStats = ko.observable( $( self.ui.roleStats ).val() );
                this.roleOpts = ko.observable( $( self.ui.roleOpts ).val() );
                this.roleTrash = ko.observable( $( self.ui.roleTrash ).val() );
                this.roleDate = ko.observable( $( self.ui.date ).val() );
                this.isValid = ko.computed(function() {
                    this.rolePages(); this.roleCats(); this.roleUsers(); this.roleMods();
                    this.roleMails(); this.roleStats(); this.roleOpts(); this.roleTrash();
                    return this.isRoleNameValid() && this.roleDesc() && $( self.ui.form ).valid();
                }, this);
            }
            this.roleModel = new RoleModel();
            ko.applyBindings(this.roleModel);
        },

        checkRoleName: function() {
            var isValid, self = this;
            $.ajax({
                async: false,
                type: 'POST',
                url: Frontend.adminURL + "/roles/checkrole",
                data: { name: $( self.ui.name ).val() },
                success: function(data) {
                    $( self.ui.failRole ).text(data);
                    data ? isValid = false : isValid = true;
                }
            });
            return isValid;
        },

        addRole: function(e) {
            e.preventDefault();
            this.model.urlRoot = Frontend.adminURL + '/roles/add';
            this.model.save({
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
                date: this.roleModel.roleDate(),
                status: '1',
                intrash: '0'
            }, {success: this.onSave, error: this.onSaveError});
        },

        onSave: function(model) {
            Helpers.completeSave();
            Frontend.Router.navigate('//roles/edit/' + model.get('name'), true);
        },

        onSaveError: function(model, error) {
            $( this.ui.errorBody ).text(error);
            Helpers.errorSave();
        }

    });
});