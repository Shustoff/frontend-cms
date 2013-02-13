/* Коллекция Modules */
define(['Backbone', '../models/module'], function(Backbone, Module) {
    return Frontend.Collections.Modules = Backbone.Collection.extend({
        url: Frontend.adminURL + '/modules',
        model: Module
    });
});