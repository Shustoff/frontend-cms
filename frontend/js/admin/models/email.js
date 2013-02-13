// Модель Email
define(['Backbone', 'config'], function(Backbone) {
    return Frontend.Models.Email = Backbone.Model.extend({
        urlRoot: 'email',
        validate: function(attrs) {
            if ( ! attrs.users) {
                if ( ! attrs.subject ) return 'Введите тему сообщения';
            }
        }
    });
});