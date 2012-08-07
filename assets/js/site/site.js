/**
 * Главный модуль сайта. Здесь пишем все свои скрипты.
 */

define([
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