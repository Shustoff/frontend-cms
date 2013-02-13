Backbone.emulateHTTP = true;

// Создаем неймспейсы нашего приложения
Frontend = new Backbone.Marionette.Application();
Frontend.siteURL = '';
Frontend.adminURL = Frontend.siteURL + '/admin';
Frontend.Models = {};
Frontend.Views = {};
Frontend.Collections = {};