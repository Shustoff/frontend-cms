/**
 * Коллекция Catalog
 */

define([
    'Backbone',
    '../models/pages'
],
function(Backbone, Page) {
    _.templateSettings = {
        interpolate : /\{\{(.+?)\}\}/g
    };
    var Catalog = Backbone.Collection.extend({
        url : '/frontend/',
        model : Page
    });
    return Catalog;
});

