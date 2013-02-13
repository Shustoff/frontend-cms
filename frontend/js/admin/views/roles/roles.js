/* Вид всех ролей */
define([
    'Marionette',
    'Handlebars',
    '../catalogs/catalogs',
    './role',
    '../../models/role',
    'text!../../templates/roles/roles.hbs'
], function(Marionette, Handlebars, CatalogsView, RoleView, Role, RolesTemplate) {
    return Frontend.Views.RolesView = CatalogsView.extend({
        itemView: RoleView,
        template: Handlebars.compile(RolesTemplate),
    });
});