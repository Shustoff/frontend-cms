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
        'text' : '../libs/require/text'
    },
    shim : {
        'Backbone' : {
            deps : ['jQuery', 'Underscore'],
            exports : 'Backbone'
        }
    }
    
});

require([
    'router',
    'collections/catalogs',
    'models/pages',
    'views/catalog'
], function (Router, Catalog, Page, CatalogView) {

        var catalog = new Catalog;
        catalog.fetch();

        var catalogView = new CatalogView({collection : catalog});
        $('.mid').append( catalogView.render().el );

});