/**
 * Вид страницы в каталоге
 */
define([
    'Backbone',
    'text!../templates/catalog_page.html'
],
function (Backbone, PageTemplate) {

    var CatalogPageView = Backbone.View.extend({

        tagName : 'article',
        className : 'threecol',
        template : _.template(PageTemplate),

        render : function () {
            var content = this.template(this.model.toJSON());
            this.$el.html(content);
            return this;
        }

    });

    return CatalogPageView;

});