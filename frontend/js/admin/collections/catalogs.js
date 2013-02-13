/* Коллекция Catalogs */
define(['Backbone', '../models/catalog'], function(Backbone, Catalog) {
    return Frontend.Collections.Catalogs = Backbone.Collection.extend({
        url: Frontend.adminURL + '/catalogs',
        model: Catalog
    });
});