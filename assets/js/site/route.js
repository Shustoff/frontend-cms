/**
 * Роут сайта
 */
define([
    'jQuery',
    'Underscore',
    'Backbone',
    'site/views/page',
    'site/views/catalog'
], function ($, _, Backbone, PageView, CatalogView) {
    var SiteRouter = Backbone.Router.extend({
        routes :  {
            '/:page.html' : 'showPage',
            '/:catalog' : 'showCatalog',
            '/:catalog/:page.html' : 'showPage',

            // Роут по-умолчанию
            '*actions' : 'defaultAction'
        },

        showPage : function () {
            var page = new PageView();
            page.render();
        },

        showCatalog : function () {
            var catalog = new CatalogView();
            catalog.render();
        },

        defaultAction : function () {
            alert('Обычный роут');
        }

    });

    var initialize = function () {
        var siteRout = new SiteRouter();
        Backbone.history.start();
    };

    return {
        initialize : initialize
    };

});