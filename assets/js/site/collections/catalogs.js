/**
 * Коллекция Catalog
 */
define([
    'jQuery',
    'Underscore',
    'Backbone',
    'site/models/page'
], function($, _, Backbone, Page) {

    var Catalog = Backbone.Collection.extend({
        model : Page
        url : '/'
    });

    return Catalog;

});

