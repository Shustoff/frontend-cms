// Коллекция Trash
define(['Backbone', '../models/trash'], function(Backbone, TrashModel) {
    return Frontend.Collections.Trash = Backbone.Collection.extend({
        url: Frontend.adminURL + '/trash',
        model: TrashModel
    });
});