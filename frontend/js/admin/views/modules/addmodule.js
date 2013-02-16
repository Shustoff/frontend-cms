// Вид добавления модуля

define([
    'Marionette',
    'Handlebars',
    '../../models/module',
    'text!../../templates/modules/addmodule.hbs',
    'Helpers',
    'Knockout',
    'jQueryValidate',
    'addMethods',
    'jQueryUI',
    'jQueryUIDatepicker'
], function(Marionette, Handlebars, Module, AddModuleTemplate, Helpers, ko) {
    return Frontend.Views.AddModuleView = Backbone.Marionette.ItemView.extend({

        initialize: function() {
            this.render();
            this.preValidate();
            Helpers.initEditor(this);
        },

        ui: {
            date: '#datepicker',
            form: 'form#addmodule',
            modname: '#modname',
            systemname: '#systemname',
            failModName: '.failmodname',
            failSysName: '.failsysname',
            modtype: '#typemodule',
            editor: '#editor',
            authorId: '#authorId',
            failEditor: '.editorfail',
            errorBody: '.error-body'
        },

        events: {
            'submit #addmodule': 'addModule'
        },

        template: Handlebars.compile(AddModuleTemplate),

        render: function() {
            $('.main').html( this.template({ item: this.model.toJSON(), siteURL: Frontend.siteURL }) );
            Helpers.today( this.ui.date );
            this.setElement('.w-module');
            return this;
        },

        preValidate: function() {
            var self = this;
            $( this.ui.form ).validate({
                onfocusout: function(element) { $(element).valid(); },
                rules: {
                    modname: { required: true },
                    systemname: { required: true, alphanumeric: true }
                },
                messages: {
                    modname: { required: 'Пожалуйста введите название модуля' },
                    systemname: { required: 'Пожалуйста введите системное имя модуля' }
                }
            });
            this.startModName = $( this.ui.modname ).val();
            this.startSysName = $( this.ui.systemname ).val();

            function ModuleModel() {
                this.modName = ko.observable( $( self.ui.modname ).val() );
                this.isModNameValid = ko.computed(function() {
                    return this.modName() &&
                        (this.modName() !== self.startModName
                            ? self.checkModName()
                            : (function() { $( self.ui.failModName ).empty(); return true; })()
                            );
                }, this);
                this.sysName = ko.observable( $( self.ui.systemname ).val() );
                this.isSysNameValid = ko.computed(function() {
                    return this.sysName() &&
                        (this.sysName() !== self.startSysName
                            ? self.checkSysName()
                            : (function() { $( self.ui.failSysName ).empty(); return true; })()
                            );
                }, this);
                this.modType = ko.observable( $( self.ui.modtype ).val() );
                this.modDate = ko.observable( $( self.ui.date ).val() );
                this.isValid = ko.computed(function() {
                    this.modDate(); this.modType();
                    return this.isModNameValid() && this.isSysNameValid() && $( self.ui.form ).valid();
                }, this);
            }

            this.moduleModel = new ModuleModel();
            ko.applyBindings(this.moduleModel);
        },

        checkModName: function() {
            var isValid, self = this;
            $.ajax({
                async: false,
                type: 'POST',
                url: Frontend.adminURL + "/modules/checkmodname",
                data: { modname: $( this.ui.modname ).val() },
                success: function(data) {
                    $( self.ui.failModName ).text(data);
                    data ? isValid = false : isValid = true;
                }
            });
            return isValid;
        },

        checkSysName: function() {
            var isValid, self = this;
            $.ajax({
                async: false,
                type: 'POST',
                url: Frontend.adminURL + "/modules/checksysname",
                data: { sysname: $( this.ui.systemname ).val() },
                success: function(data) {
                    $( self.ui.failSysName ).text(data);
                    data ? isValid = false : isValid = true;
                }
            });
            return isValid;
        },

        addModule: function(e) {
            e.preventDefault();
            this.model.urlRoot = Frontend.adminURL + '/modules/add';
            if ( editor.getData() ) {
                this.model.unset('userId');
                this.model.save({
                    name: this.moduleModel.modName(),
                    systemname: this.moduleModel.sysName(),
                    content: $( this.ui.editor ).val(),
                    type: this.moduleModel.modType(),
                    date: this.moduleModel.modDate(),
                    author_id: $( this.ui.authorId ).val(),
                    status: '1',
                    intrash: '0'
                }, {success: this.onSave, error: this.onSaveError});
            } else {
                $( this.ui.failEditor ).show().delay(5000).hide(100);
            }
        },

        onSave: function(model) {
            Helpers.completeSave();
            Frontend.Router.navigate('//modules/edit/' + model.get('systemname'), true);
        },

        onSaveError: function(model, error) {
            $( this.ui.errorBody ).text(error);
            Helpers.errorSave();
        }

    });
});