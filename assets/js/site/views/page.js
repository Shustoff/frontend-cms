/**
 * Вид отображения страницы
 */
define([
    'jQuery',
    'Underscore',
    'Backbone',
    'site/models/pages'
], function ($, _, Backbone, Catalog) {
    var PageView = Backbone.View.extend({

        el : $('.threecol'),

        render : function () {
            $(this.el).html(this.template(this.model.toJSON()));
            return this;
        }

    });

    return PageView;
});