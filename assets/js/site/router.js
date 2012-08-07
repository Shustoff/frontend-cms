/**
 * Роут сайта
 */
define([
    'Backbone'
], function (Backbone) {
    var SiteRouter = Backbone.Router.extend({
        routes :  {
            // Роут по-умолчанию
            '*actions' : 'defaultAction'
        },

        defaultAction : function () {
        }

    });

    var initialize = function () {
        var site = new SiteRouter();
        Backbone.history.start();
    };

    return {
        initialize : initialize
    };

});