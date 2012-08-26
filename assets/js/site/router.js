/**
 * Главный Роутер сайта
 */
define([
    'Backbone',
    'collections/catalogs',
    'models/pages',
    'views/catalog',
    'views/onepage'
],
function (Backbone, Catalog, Page, CatalogView, OnePageView) {
    var SiteRouter = Backbone.Router.extend({
        routes :  {
            // Роут показа одной страницы
            ':pagealias' : 'showPage',
            // Роут показа содержимого каталога
            ':catalias/' : 'showCatalog',
            // Роут ошибки
            ':foo/:bar' : 'page404',
            // Роут по-умолчанию
            '' : 'defaultAction'
        },

        showPage : function (pagealias) {
            // Создали пустую модель, передали ей alias
            var page = new Page({alias : pagealias});
            // Заполнили ее данными
            page.fetch();
            // Передали в вид
            var pageView = new OnePageView({model : page});
            $(function() {
                $('.catalog').html( pageView.el );
            });
        },

        showCatalog : function (catalias) {
            // Создаем пустую коллекцию
            var catalog = new Catalog();
            catalog.url = '/frontend/c/' + catalias;
            // Заполняем ее данными
            catalog.fetch();
            // Передали в вид
            var catalogView = new CatalogView({collection : catalog});
            $(function() {
                $('.mid').html( catalogView.el );
            });
        },

        page404 : function () {
            window.location = 'http://localhost/frontend/error/404';
        },

        defaultAction : function () {
            $(function(){
                // Создали пустую коллекцию
                var catalog = new Catalog;
                // Заполнили ее данными
                catalog.fetch();
                // Передали в вид
                var catalogView = new CatalogView({collection : catalog});
                $('.mid').html( catalogView.el );
            });
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