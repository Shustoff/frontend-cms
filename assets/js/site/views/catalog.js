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

    var CatalogView = Backbone.View.extend({

        tagName : 'p',
        className : 'item',

        templateSettings : {
            interpolate : /\{\{(.+?)\}\}/g
        },

        template : _.template( $('#page-view').html() ),

        initialize : function () {
            this.model = new Page();
            _.bindAll(this);
            this.model.on('reset', this.render);
        },

        render : function () {
            this.$el.html(this.model);
            alert('todo');
            return this;
        }

    });

    return CatalogView;

});