/**
 * Модель Page
 */
define([
    'Backbone'
], function (Backbone) {
    var Page = Backbone.Model.extend({
        urlRoot : '/frontend/'
    });

    return Page;
});

