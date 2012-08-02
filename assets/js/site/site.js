/**
 * Главный файл скриптов сайта
 */
require.config({
    baseUrl : 'assets/js',
    paths : {
        'jQuery' : 'libs/jquery/jquery-wrap',
        'Underscore' : 'libs/underscore/underscore-wrap',
        'Backbone' : 'libs/backbone/backbone-wrap'
    }
});

require([
    'order!libs/jquery/jquery',
    'order!libs/underscore/underscore',
    'order!libs/backbone/backbone',
    'site/models/pages'
], function ($, _, Backbone, Page) {

    var page = new Page();

});