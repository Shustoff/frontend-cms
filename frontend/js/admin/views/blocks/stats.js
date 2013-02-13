define([
    'Marionette',
    'Handlebars',
    '../../models/stats',
    'text!../../templates/blocks/stats.hbs'
], function(Marionette, Handlebars, Stats, StatsTemplate) {
    return Frontend.Views.StatsView = Backbone.Marionette.ItemView.extend({

        initialize: function() {
            this.render();
        },

        template: Handlebars.compile(StatsTemplate),

        render: function() {
            $('.main').html( this.template( this.model.toJSON() ));
            return this;
        }
    });
});