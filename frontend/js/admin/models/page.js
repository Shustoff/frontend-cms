/* Модель Page */
define(['Backbone', 'config'], function(Backbone) {
    return Frontend.Models.Page = Backbone.Model.extend({
        initialize: function(attrs) {
            if (attrs) {
                this.urlRoot = attrs.alias;
            } else {
                this.urlRoot = 'addpage';
            }
        },
        validate: function(attrs) {
            if ( ! attrs.userId) {
                if ( ! attrs.pagename ) return 'Введите название страницы';
                if ( ! attrs.alias ) return 'Введите алиас страницы';
            }
        }
    });
});