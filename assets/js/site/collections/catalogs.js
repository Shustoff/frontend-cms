/**
 * Коллекция Catalog
 */
define([
    'Backbone',
    '../models/pages'
],
function(Backbone, Page) {
    var Catalog = Backbone.Collection.extend({
        url : '/frontend/',
        model : Page,
    });
    return Catalog;
});

