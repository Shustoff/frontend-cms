/** Роутер сайта **/

define([
    'Backbone',
    'collections/catalogs',
    'models/pages',
    'views/catalog',
    'views/onepage'
], function (Backbone, Catalog, Page, CatalogView, OnePageView) {
    var SiteRouter = Backbone.Router.extend({
        routes :  {
            // Роут главной страницы
            '' : 'mainPage',

            // Страница тестов
            'test.html' : 'showTest',

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
            var catalog = new Catalog();
            catalog.fetch();
            catalog.on('reset', function() {
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
        },

        // Одна страница БЕЗ каталога
        showPage : function (pagealias) {
            $('.pagination').hide();
            var page = new Page({alias : pagealias});
            page.fetch();
            var pageView = new OnePageView({model : page});
            $('.catalog').html( pageView.el );
            page.on('error', function(){
                window.location.replace('http://' + Site.domainName + '/error/404');
            });
        },

        // Одна страница В каталоге
        showCatalogPage : function (catalias, pagealias) {
            $('.pagination').hide();
            var page = new Page({alias : pagealias});
            page.fetch();
            var pageView = new OnePageView({model : page});
            $('.catalog').html( pageView.el );
            page.on('error', function(){
                window.location.replace('http://' + Site.domainName + '/error/404');
            });
        },

        // Каталог
        showCatalog : function (catalias, pagenumber) {
            var catalog = new Catalog();
            catalog.url = Site.baseURL + 'c/' + catalias;
            catalog.fetch();
            catalog.on('reset', function() {
                var catalogView = new CatalogView({collection : catalog});
                $('.mid').html( catalogView.el );
                catalogView.render(8, pagenumber);
                catalogView.addPagination(catalias);
                $('.pagination a').each(function() {
                    if ( $(this).attr('id') === (pagenumber) ) {
                        $(this).addClass('hover');
                    }
                });
                document.title = catalog.models[0].attributes.catalog
            });
            catalog.on('error', function(){
                window.location.replace('http://' + Site.domainName + '/error/404');
            });
        },

        // Страница тестов
        showTest : function () {
            console.log('Начинаем писать тесты');
        },

        // Страница не найдена
        page404 : function () {
            window.location.replace('http://' + Site.domainName + '/error/404');
        }
    });

    var initialize = function () {
        var site = new SiteRouter();
        Backbone.history.start({pushState : true, root : Site.baseURL});
        return site;
    };

    return {
        initialize : initialize
    };

});