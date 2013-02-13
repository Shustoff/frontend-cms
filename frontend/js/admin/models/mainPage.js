/* Модель главной страницы */
define(['Backbone', 'config'], function(Backbone) {
    return Frontend.Models.MainPage = Backbone.Model.extend({
        initialize: function() {
            this.urlRoot = Frontend.adminURL + '/main'
        }
    });
});