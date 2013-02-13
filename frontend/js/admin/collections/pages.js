/* Коллекция Pages */
define(['Backbone', '../models/page'], function(Backbone, Page) {
    return Frontend.Collections.Pages = Backbone.Collection.extend({
        url: Frontend.adminURL + '/pages',
        model: Page
    });
});