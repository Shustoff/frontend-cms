/* Вид одной страницы */

define([
    'Marionette',
    'Handlebars',
    '../catalogs/catalog',
    'text!../../templates/roles/role.hbs',
    'config'
], function(Marionette, Handlebars, CatalogView, RoleTemplate) {
    return Frontend.Views.RoleView = CatalogView.extend({
        tableName: 'roles',
        template: Handlebars.compile( RoleTemplate )
    });
});