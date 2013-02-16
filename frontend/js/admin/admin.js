/* Главный файл, конфиг Require. Точка входа в приложение */
require.config({
    urlArgs: 'bust='+ (new Date()).getMilliseconds(),
    deps : ['jQuery', 'config'],
    paths : {
        // Libs
        'jQuery' : '../vendor/jquery/jquery',
        'jQueryUI': '../vendor/jquery-ui/ui/jquery-ui.custom',
        'jQueryUIDatepicker': '../vendor/jquery-ui/ui/i18n/jquery.ui.datepicker-ru',
        'Underscore' : '../vendor/underscore/underscore',
        'Backbone' : '../vendor/backbone/backbone',
        'Marionette': '../vendor/marionette/lib/backbone.marionette',
        'Knockout': '../vendor/knockout/build/output/knockout-latest',
        'Handlebars': '../vendor/handlebars/handlebars',

        // Plugins
        'jQueryValidate': '../vendor/plugins/jquery.validate',
        'addMethods': '../vendor/plugins/additional-methods',
        'ajaxUpload': '../vendor/plugins/ajaxupload',
        'text' : '../vendor/plugins/text',

        // Custom
        'Helpers': '../admin/helpers',
        'config': '../admin/config'
    },
    shim : {
        'jQueryUI': {
            deps: ['jQuery']
        },
        'jQueryUIDatepicker': {
            deps: ['jQuery', 'jQueryUI']
        },
        'jQueryValidate': {
            deps: ['jQuery']
        },
        'addMethods': {
            deps: ['jQuery', 'jQueryUI','jQueryUIDatepicker', 'jQueryValidate']
        },
        'ajaxUpload': {
            deps: ['jQuery']
        },
        'Backbone' : {
            deps : ['jQuery', 'Underscore'],
            exports : 'Backbone'
        },
        'Marionette' : {
            deps : ['jQuery', 'Underscore', 'Backbone'],
            exports : 'Marionette'
        },
        'Handlebars': {
            deps: ['Underscore'],
            exports: 'Handlebars'
        },
        'Helpers': {
            deps: ['Handlebars', 'Underscore'],
            exports: 'Helpers'
        },
        'config': {
            deps: ['Backbone', 'Marionette'],
            exports: 'config'
        }
    }
});

requirejs(['Marionette', 'router', 'config'], function (Marionette, Router) {

    // Добавляем предварительные настройки
    Frontend.addInitializer(function() {

        this.Router = Router.initialize();

        $(document).on('click', '.menu a, .tools .i-tools, .pagename a, .search a, .last-items a, .email a', function(e) {
            var href = $(this).attr('href');
            var protocol = this.protocol + '//';
            if (href.slice(protocol.length) !== protocol) {
                e.preventDefault();
                Frontend.Router.navigate(href, true);
            }
        });

    });

    // Запускаем приложение
    Frontend.start();

});