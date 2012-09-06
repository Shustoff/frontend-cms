/**
 * Коллекция Catalog
 */
define([
    'Backbone',
    '../models/pages'
],
function(Backbone, Page) {
    var Catalog = Backbone.Collection.extend({
        url : baseURL,
        model : Page
    });
    return Catalog;
});

