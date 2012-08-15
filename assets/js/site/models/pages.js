/**
 * Модель Page
 */
define([
    'Backbone'
],
function (Backbone) {
    var Page = Backbone.Model.extend({
        initialize : function () {
            this.urlRoot = '/frontend/' + this.get('alias') + '/' ;
        }
    });

    return Page;
});

