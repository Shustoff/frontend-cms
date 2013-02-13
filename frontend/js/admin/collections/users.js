/* Коллекция Users */
define(['Backbone', '../models/user'], function(Backbone, User) {
    return Frontend.Collections.Users = Backbone.Collection.extend({
        url: Frontend.adminURL + '/users',
        model: User
    });
});