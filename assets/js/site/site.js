/**
 * Главный модуль сайта
 */


define([
    'jQuery',
    'Underscore',
    'Backbone',
    'site/route'
], function ($, _, Backbone, Router) {

    var initialize = function () {
        Router.initialize();
    };

    return {
        initialize : initialize
    };

});