/**
 * Вид отображения каталога
 */
define([
    'jQuery',
    'Underscore',
    'Backbone',
    'site/collections/catalogs'
], function ($, _, Backbone, Catalog) {
    var CatalogView = Backbone.View.extend({

        el : $('.mid'),

        render : function () {
            $(this.el).html(this.template(this.model.toJSON()));
            return this;
        }

    });

    return CatalogView;
});