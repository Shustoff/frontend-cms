/* Вид страницы настроек */
define([
    'Marionette',
    'Handlebars',
    'text!../../templates/blocks/settings.hbs',
    'Helpers',
    'Knockout',
    'jQueryValidate',
    'config'
], function(Marionette, Handlebars, SettingsTemplate, Helpers, ko) {
    return Frontend.Views.SettingsView = Backbone.Marionette.ItemView.extend({

        initialize: function() {
            this.render();
            this.preValidate();
        },

        ui: {
            form: 'form',
            siteName: '#sitename',
            siteDesc: '#desc',
            siteKeywords: '#keywords',
            siteRobots: '#robots',
            siteEmail: '#email',
            siteAuthor: '#sender',
            siteCopyright: '#copyright',
            site404: '#page404',
            siteStatus: '.siteStatus:checked',
            siteProfile: '.siteProfile:checked',
            siteCache: '.siteCache:checked',
            siteSession: '#session',
            errorBody: '.error-body'
        },

        events: {
            'submit form': 'saveSettings'
        },

        template: Handlebars.compile(SettingsTemplate),

        render: function() {
            this.$el.html( this.template( this.model.toJSON() ) );
            $('.main').html( this.el );
            this.triggerMethod("render");
            return this;
        },

        // Сохраняем настройки
        saveSettings: function(e) {
            e.preventDefault();
            this.model.urlRoot = Frontend.adminURL + '/settings/save';
            this.model.save({
                sitename: this.settingsModel.siteName(),
                description: this.settingsModel.siteDesc(),
                keywords: this.settingsModel.siteKeywords(),
                robots: this.settingsModel.siteRobots(),
                email: this.settingsModel.siteEmail(),
                author: this.settingsModel.siteAuthor(),
                copyright: this.settingsModel.siteCopyright(),
                page404: this.settingsModel.site404(),
                status: this.settingsModel.siteStatus(),
                debug: this.settingsModel.siteProfile(),
                cache: this.settingsModel.siteCache(),
                session: this.settingsModel.siteSession()
            }, {success: this.onSave, error: this.onSaveError});
        },

        // Валидация
        preValidate: function() {
            var self = this;
            $( this.ui.form ).validate({
                onfocusout: function(element) { $(element).valid(); },
                rules: {sitename: "required"},
                messages: {sitename: 'Пожалуйста введите название сайта'}
            });
            function SettingsModel() {
                this.siteName = ko.observable( $( self.ui.siteName ).val() );
                this.siteDesc = ko.observable( $( self.ui.siteDesc ).html() );
                this.siteKeywords = ko.observable( $( self.ui.siteKeywords ).html() );
                this.siteRobots = ko.observable( $( self.ui.siteRobots ).val() );
                this.siteEmail = ko.observable( $( self.ui.siteEmail ).val() );
                this.siteAuthor = ko.observable( $( self.ui.siteAuthor ).val() );
                this.siteCopyright = ko.observable( $( self.ui.siteCopyright ).html() );
                this.site404 = ko.observable( $( self.ui.site404 ).html() );
                this.siteStatus = ko.observable( $( self.ui.siteStatus ).val() );
                this.siteProfile = ko.observable( $( self.ui.siteProfile ).val() );
                this.siteCache = ko.observable( $( self.ui.siteCache ).val() );
                this.siteSession = ko.observable( $( self.ui.siteSession ).val() );
                this.isValid = ko.computed(function() {
                    this.siteDesc(); this.siteKeywords(); this.siteRobots();
                    this.siteEmail();  this.siteAuthor(); this.siteCopyright();
                    this.site404(); this.siteStatus(); this.siteProfile();
                    this.siteCache(); this.siteSession();
                    return $.trim( this.siteName() );
                }, this);
            }
            this.settingsModel = new SettingsModel();
            ko.applyBindings(this.settingsModel);
        },

        // Удаляем не сохраняемые поля из модели
        onRender: function() {
            this.model.unset('hostname');
            this.model.unset('database');
            this.model.unset('password');
            this.model.unset('prefix');
            this.model.unset('username');
        },

        onSave: function(model) {
            $('.sitename').text(model.get('sitename'));
            Helpers.completeSave();
        },

        onSaveError: function(model, error) {
            $( this.ui.errorBody ).text(error);
            Helpers.errorSave();
        }

    });
});