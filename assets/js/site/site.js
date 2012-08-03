/**
 * Главный модуль сайта
 */

<<<<<<< HEAD
define([
    'jQuery',
    'Underscore',
    'Backbone',
    'site/route'
], function ($, _, Backbone, Router) {
=======
require([
    'libs/jquery/jquery',
    'libs/underscore/underscore',
    'libs/backbone/backbone',
    'site/models/pages'
], function ($, _, Backbone, Page) {
>>>>>>> a7804172e69fadd9f9835184fda650d899d2dfff

    var initialize = function () {
        Router.initialize();
    };

    return {
        initialize : initialize
    };

});