/**
 * Входная точка для всех js скриптов. Bootstrap.
 */
requirejs.config({

    deps : ['site'],
    paths : {
        'jQuery' : '../libs/jquery/jquery-1.7.2',
        'Underscore' : '../libs/underscore',
        'Backbone' : '../libs/backbone',

        'text' : '../libs/require/text'
    },
    shim : {
        'Backbone' : {
            deps : ['jQuery', 'Underscore'],
            exports : 'Backbone'
        }
    }
});

