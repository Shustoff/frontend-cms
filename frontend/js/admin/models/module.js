/* Модель Module */
define(['Backbone', 'config'], function(Backbone) {
    return Frontend.Models.Module = Backbone.Model.extend({
        initialize: function(attrs) {
            if (attrs) {
                this.urlRoot = attrs.alias;
            } else {
                this.urlRoot = 'addmodule';
            }
        },
        validate: function(attrs) {
            if ( ! attrs.module) {
                if ( ! attrs.name ) return 'Введите название модуля';
                if ( ! attrs.systemname ) return 'Введите системное имя';
            }
        }
    });
});