/**
 * Вид отображения каталога
 */
define([
    'Backbone',
    '../router',
    './page'
], function (Backbone, Router, CatalogPageView) {

    var CatalogView = Backbone.View.extend({

        tagName : 'section',
        className : 'row catalog',
        $el : $('.catalog'),

        initialize : function () {
            _.bindAll(this);
            this.collection.on('reset', this.render);
        },

        render : function () {
            var self = this;
            this.collection.each(function(model){
                var pageView = new CatalogPageView({model : model});
                var content = pageView.render().el;
                self.$el.append(content);
            });

            $('.threecol').map(function(){
                if (($(this).index() + 1) % 4 === 0) $(this).addClass('last');
            });

            return this;
        }
    });

    return CatalogView;

});