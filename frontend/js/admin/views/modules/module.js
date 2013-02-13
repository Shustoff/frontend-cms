/* Вид одного модуля */

define([
    'Marionette',
    'Handlebars',
    '../catalogs/catalog',
    'text!../../templates/modules/module.hbs',
    'config'
], function(Marionette, Handlebars, CatalogView, ModuleTemplate) {
    return Frontend.Views.PageView = CatalogView.extend({

        tableName: 'modules',
        template: Handlebars.compile( ModuleTemplate )

    });
});