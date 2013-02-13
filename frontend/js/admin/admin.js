/* Главный файл, конфиг Require. Точка входа в приложение */
require.config({
    urlArgs: 'bust='+ (new Date()).getMilliseconds(),
    deps : ['admin', 'jQuery', 'config'],
    paths : {
        // Libs
        'jQuery' : '../libs/jquery/jquery',
        'jQueryUI': '../libs/jquery/jquery-ui',
        'jQueryUIDatepicker': '../libs/jquery/jquery.ui.datepicker-ru',
        'jQueryValidate': '../libs/jquery/jquery.validate',
        'addMethods': '../libs/jquery/additional-methods',
        'ajaxUpload': '../libs/jquery/ajaxupload',
        'Knockout': '../libs/knockout',
        'CKEditor': '../../ckeditor/ckeditor',
        'Underscore' : '../libs/underscore',
        'Backbone' : '../libs/backbone/backbone',
        'Marionette': '../libs/backbone/backbone.marionette',
        'Handlebars': '../libs/handlebars',

        // Plugins
        'text' : '../libs/require/text',

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
        'CKEdtior': {
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

requirejs(['Backbone', 'Marionette', 'router', 'config'], function (Backbone, Marionette, Router) {

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