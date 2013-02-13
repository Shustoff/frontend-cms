/* Модель Role */
define(['Backbone', 'config'], function(Backbone) {
    return Frontend.Models.Role = Backbone.Model.extend({
        initialize: function(attrs) {
            if (attrs) {
                this.urlRoot = attrs.alias;
            } else {
                this.urlRoot = 'addrole';
            }
        },
        validate: function(attrs) {
             if ( ! attrs.name ) return 'Введите название роли';
             if ( ! attrs.description ) return 'Введите описание роли';
         }
    });
});