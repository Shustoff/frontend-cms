/* Вид всех модулей */

define([
    'Marionette',
    'Handlebars',
    '../catalogs/catalogs',
    './module',
    '../../models/module',
    'text!../../templates/modules/modules.hbs'
], function(Marionette, Handlebars, CatalogsView, ModuleView, Module, ModulesTemplate) {
    return Frontend.Views.PagesView = CatalogsView.extend({
        itemView: ModuleView,
        template: Handlebars.compile(ModulesTemplate)
    });
});