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
            // Роут главной страницы
            '' : 'mainPage',
            // Роут номеров страниц на главной
            'page/:number' : 'mainPage',

            // Роут показа одной страницы БЕЗ каталога
            ':pagealias' : 'showPage',

            // Роут показа каталога
            ':catalias/' : 'showCatalog',
            // Роут номеров страниц в каталоге
            ':catalias/page/:number' : 'showCatalog',
            // Роут показа одной страницы В каталоге
            ':catalias/:pagealias' : 'showCatalogPage',

            // Все неопределенные роуты - ошибки
            '*actions' : 'page404'
        },

        // Главная страница
        mainPage : function (pagenumber) {
            $(function() {
                // Создали пустую коллекцию
                var catalog = new Catalog;
                // Заполнили ее данными
                catalog.fetch();
                // Передали в вид
                catalog.on('reset', function(){
                    var catalogView = new CatalogView({collection : catalog});
                    $('.mid').html( catalogView.el );
                    catalogView.render(8, pagenumber);
                    catalogView.addPagination();
                    $('.pagination a').each(function() {
                        if ( $(this).attr('id') === (pagenumber) ) {
                            $(this).addClass('hover');
                        }
                    });
                });
            });
        },

        // Одна страница БЕЗ каталога
        showPage : function (pagealias) {
            $(function() {
                $('.pagination').hide();
                // Создали пустую модель, передали ей alias
                var page = new Page({alias : pagealias});
                // Заполнили ее данными
                page.fetch();
                // Передали в вид
                var pageView = new OnePageView({model : page});
                // Вставили в DOM
                $('.catalog').html( pageView.el );
            });
        },

        // Одна страница В каталоге
        showCatalogPage : function (catalias, pagealias) {
            $(function() {
                $('.pagination').hide();
                // Создали пустую модель, передали ей alias
                var page = new Page({alias : pagealias});
                // Заполнили ее данными
                page.fetch();
                // Передали в вид
                var pageView = new OnePageView({model : page});
                // Вставили в DOM
                $('.catalog').html( pageView.el );
            });
        },

        // Каталог
        showCatalog : function (catalias, pagenumber) {
            // Создаем пустую коллекцию
            var catalog = new Catalog();
            catalog.url = '/frontend/c/' + catalias;
            // Заполняем ее данными
            catalog.fetch();
            // Передали в вид
            catalog.on('reset', function() {
                var catalogView = new CatalogView({collection : catalog});
                $(function() { $('.mid').html( catalogView.el ); });
                catalogView.render(8, pagenumber);
                catalogView.addPagination(catalias);
                $('.pagination a').each(function() {
                    if ( $(this).attr('id') === (pagenumber) ) {
                        $(this).addClass('hover');
                    }
                });
                document.title = catalog.models[0].attributes.catalog
            });
        },

        // Страница не найдена
        page404 : function () {
            window.location.replace('http://' + siteRoot + '/error/404');
        }
    });

    var initialize = function () {
        // Создаем роутер сайта
        var site = new SiteRouter();
        // Начинаем историю
        Backbone.history.start({pushState : true, root : '/frontend/'});
        return site;
    };

    return {
        initialize : initialize
    };

});