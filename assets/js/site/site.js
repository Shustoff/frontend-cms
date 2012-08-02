// Главный файл скриптов для сайта
requirejs.config({
    baseURL : 'assets/js',
    paths : {
        site : 'site'
    }
});

require([
    '../jquery-1.7.2',
    'underscore',
    'backbone',
    'collections/catalog',
    'models/page',
    'routes/route'
], function ($, _, Backbone) {

    var page = new Page();


});