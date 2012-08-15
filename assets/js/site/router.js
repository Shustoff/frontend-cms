/**
 * Главный Роутер сайта
 */
define([
    'Backbone',
    'collections/catalogs',
    'models/pages',
    'views/catalog',
    'views/onepage'
], function (Backbone, Catalog, Page, CatalogView, OnePageView) {
    var SiteRouter = Backbone.Router.extend({

        routes :  {
            // Роут показа одной страницы
            ':pagealias' : 'showPage',
            // Роут по-умолчанию
            '*actions' : 'defaultAction'
        },

        showPage : function (pagealias) {
            // Создали пустую модель, передали ей alias
            var page = new Page({alias : pagealias});
            // Заполнили ее данными
            page.fetch();
            // Передали в вид
            var view = new OnePageView({model : page});
        },

        defaultAction : function () {
            // Создали пустую коллекцию
            var catalog = new Catalog;
            // Заполнили ее данными
            catalog.fetch();
            // Передали в вид
            var catalogView = new CatalogView({collection : catalog});
        }
    });

    var initialize = function () {
        // Создаем роутер сайта
        var site = new SiteRouter();
        // Начинаем вести историю
        Backbone.history.start({pushState : true, root : '/frontend/'});


        return site;
    };

    return {
        initialize : initialize
    };

});