/**
 * Модель Page
 */
define([
    'jQuery',
    'Underscore',
    'Backbone'
], function ($, _, Backbone) {
    var Page = Backbone.Model.extend({

        urlRoot: "/frontend/catalog1",

        initialize : function() {
            this.on('all', function (e) {
                console.log(this.get('pagename') + 'event: ' + e);
            });
        }



    });

    return Page;
});

