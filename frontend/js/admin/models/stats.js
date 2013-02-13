// Модель Stats
define(['Backbone', 'config'], function(Backbone) {
    return Frontend.Models.Stats = Backbone.Model.extend({
        urlRoot: 'stats'
    });
});