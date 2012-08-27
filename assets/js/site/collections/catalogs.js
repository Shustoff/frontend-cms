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
        model : Page,

        pagination : function (perPage, page) {
            page = page - 1;
            var collection = this;
            collection = _(collection.rest(perPage * page));
            collection = _(collection.first(perPage));
            return collection.map(function(model) {
                return model.toJSON()
            });
        }
    });
    return Catalog;
});

