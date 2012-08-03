/**
 * Вид отображения каталога
 */
define([
    'jQuery',
    'Underscore',
    'Backbone',
    'site/models/pages',
    'site/collections/catalogs'
], function ($, _, Backbone, Page, Catalog) {

    var PageView = Backbone.View.extend({

        tagName : 'div',
        className : 'threecol',

        templateSettings : {
            interpolate : /\{\{(.+?)\}\}/g
        },

        template : _.template( $('#page-view').html() ),

        initialize : function () {
            this.model = new Page();
            _.bindAll(this);
        },

        render : function () {
            var content = this.template(this.model.toJSON());
            this.$el.html(content);
            return this;
        }

    });

    return PageView;

});