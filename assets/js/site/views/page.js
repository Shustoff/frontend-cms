/**
 * Вид отображения каталога
 */
define([
    'Backbone',
    'text!../templates/page.html'
], function (Backbone, PageTemplate) {

    var CatalogPageView = Backbone.View.extend({

        tagName : 'article',
        className : 'threecol',
        template : _.template(PageTemplate),

        events : {
            'click .rem' : 'removeModel'
        },

        initialize : function () {
            _.bindAll(this);
            this.model.on('destroy', this.remove);
        },

        render : function () {
            var content = this.template(this.model.toJSON());
            this.$el.html(content);
            return this;
        },

        removeModel : function () {
            Backbone.View.prototype.remove.call(this);
        }

    });

    return CatalogPageView;

});