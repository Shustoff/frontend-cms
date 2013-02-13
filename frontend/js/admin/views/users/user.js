/* Вид одного пользователя */

define([
    'Marionette',
    'Handlebars',
    '../catalogs/catalog',
    'text!../../templates/users/user.hbs',
    'config'
], function(Marionette, Handlebars, CatalogView, UserTemplate) {
    return Frontend.Views.UserView = CatalogView.extend({
        tableName: 'users',
        template: Handlebars.compile( UserTemplate ),
    });
});