/* Модель User */
define(['Backbone', 'config'], function(Backbone) {
    return Frontend.Models.User = Backbone.Model.extend({
        initialize: function(attrs) {
            if (attrs) {
                this.urlRoot = attrs.alias;
            } else {
                this.urlRoot = 'adduser';
            }
        },
        validate: function(attrs) {
            if ( ! attrs.roles) {
                if ( ! attrs.username ) return 'Введите имя пользователя';
                if ( ! attrs.email ) return 'Введите email пользователя';
            }
        }
    });
});