/**
 * Коллекция Catalog
 */
define([
    'jQuery',
    'Underscore',
    'Backbone',
    'site/models/pages'
], function($, _, Backbone, Page) {

    var Catalog = Backbone.Collection.extend({
        url : '/frontend/catalog1',
        model : Page
    });

    return Catalog;

});

