/* Вид всех пользователей */

define([
    'Backbone',
    'Handlebars',
    '../catalogs/catalogs',
    './user',
    '../../models/user',
    'text!../../templates/users/users.hbs'
], function(Backbone, Handlebars, CatalogsView, UserView, User, UsersTemplate) {
    return Frontend.Views.UsersView = CatalogsView.extend({
        itemView: UserView,
        template: Handlebars.compile(UsersTemplate),
    });
});