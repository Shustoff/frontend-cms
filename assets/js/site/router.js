/**
 * Роут сайта
 */
define([
    'Backbone',
    'views/onepage',
    'models/pages'
], function (Backbone, OnePageView, Page) {
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
        }
    });

    var initialize = function () {
        var site = new SiteRouter();
        Backbone.history.start({pushState : true, root : '/frontend/'});

        $(document).on('click', '.pagename a', function (evt) {
            var href = $(this).attr('href');
            var protocol = this.protocol + '//';
            if (href.slice(protocol.length) !== protocol) {
              evt.preventDefault();
              site.navigate(href, true);
            }
          });

        return site;
    };

    return {
        initialize : initialize
    };

});