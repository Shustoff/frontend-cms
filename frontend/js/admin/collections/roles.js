/* Коллекция Roles */
define(['Backbone', '../models/role'], function(Backbone, Role) {
    return Frontend.Collections.Roles = Backbone.Collection.extend({
        url: Frontend.adminURL + '/roles',
        model: Role
    });
});