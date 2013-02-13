/* Вид одной страницы */

define([
    'Backbone',
    'Handlebars',
    '../catalogs/catalog',
    'text!../../templates/pages/page.hbs',
    'config'
], function(Backbone, Handlebars, CatalogView, PageTemplate) {
    return Frontend.Views.PageView = CatalogView.extend({

        tableName: 'pages',
        template: Handlebars.compile( PageTemplate )

    });
});