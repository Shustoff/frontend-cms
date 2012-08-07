/**
 * Входная точка для всех js скриптов. Bootstrap.
 */
requirejs.config({

    deps : ['site', 'tests'],
    paths : {
        // Libs
        'jQuery' : '../libs/jquery/jquery-1.7.2',
        'Underscore' : '../libs/underscore',
        'Backbone' : '../libs/backbone',
        'QUnit' : '../libs/qunit-1.9.0',

        // Plugins
        'text' : '../libs/require/text'
    },
    shim : {
        'Backbone' : {
            deps : ['jQuery', 'Underscore'],
            exports : 'Backbone'
        }
    }
});
