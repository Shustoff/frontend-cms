/* Модель настроек */
define(['Backbone', 'config'], function() {
    return Frontend.Models.Settings = Backbone.Model.extend({
        initialize: function() {
            this.urlRoot = Frontend.adminURL + '/settings'
        },
        validate: function(attrs) {
            if ( ! attrs.sitename) return 'Введите название сайта';
        }
    });
});

