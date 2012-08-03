/**
 * Роут сайта
 */
define([
    'jQuery',
    'Underscore',
    'Backbone',
    'site/collections/catalogs',
    'site/models/pages',
    'site/views/page',
    'site/views/catalog'
], function ($, _, Backbone, Catalog, Page, PageView, CatalogView) {
    var SiteRouter = Backbone.Router.extend({
        routes :  {
            // Вывод содержимого каталога
            ':catalog' : 'showCatalog',

            // Роут по-умолчанию
            '*actions' : 'defaultAction'
        },

        initialize : function () {
            this.catalog = new Catalog();
        },

        showCatalog : function () {
            this.model = new Page();
            this.model.fetch();
            var view = new PageView({model : this.model});
            console.log(this.model.attributes);
            $('.mid').append( view.render() );
        },

        defaultAction : function () {
            this.catalog = new Catalog();
            this.catalog.fetch();
        }

    });

    var initialize = function () {
        var site = new SiteRouter();
        Backbone.history.start();
    };

    return {
        initialize : initialize
    };

});