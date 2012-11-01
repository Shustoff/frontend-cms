/**
 * Коллекция Catalog
 */
define([
    'Backbone',
    '../models/pages'
],
function(Backbone, Page) {
    var Catalog = Backbone.Collection.extend({
        url : baseURL + '?bust=' + (new Date()).getMilliseconds(),
        model : Page
    });
    return Catalog;
});

