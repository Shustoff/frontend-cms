/* Вид всех страниц */
define([
    'Backbone',
    'Handlebars',
    '../catalogs/catalogs',
    './page',
    '../../models/page',
    'text!../../templates/pages/pages.hbs'
], function(Backbone, Handlebars, CatalogsView, PageView, Page, PagesTemplate) {
    return Frontend.Views.PagesView = CatalogsView.extend({

        itemView: PageView,
        template: Handlebars.compile(PagesTemplate),

    });
});