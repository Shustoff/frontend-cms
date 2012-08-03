/**
 * Входная точка для всех js скриптов
 */
require.config({
    baseUrl : 'assets/js',
    paths : {
        'jQuery' : 'libs/jquery/jquery-wrap',
        'Underscore' : 'libs/underscore/underscore-wrap',
        'Backbone' : 'libs/backbone/backbone-wrap',
        'jQueryUI' : 'jquery-ui',
        'Modernizr' : 'modernizr-2.5.3'
    }
});

require([
    'site/site',
    'libs/jquery/jquery',
    'libs/underscore/underscore',
    'libs/backbone/backbone',
    'site/models/pages'
], function (site) {

    site.initialize();

});