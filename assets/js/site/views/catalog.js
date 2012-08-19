/**
 * Вид каталога
 */
define([
    'Backbone',
    './page'
],
function (Backbone, CatalogPageView) {

    var CatalogView = Backbone.View.extend({

        tagName : 'section',
        className : 'row catalog',
        $el : $('.catalog'),

        initialize : function () {
            _.bindAll(this);
            // При заполнении коллекции вызываем метод render()
            this.collection.on('reset', this.render);
        },

        render : function () {
            var self = this;
            // Проходим по всем моделям в коллекции и рендерим их
            this.collection.each(function(model){
                var pageView = new CatalogPageView({model : model});
                var content = pageView.render().el;
                self.$el.append(content);
            });

            $('.mid').html( this.el );

            // Каждой 4й колонке ставим класс .last
            $('.threecol').map(function(){
                if (($(this).index() + 1) % 4 === 0) $(this).addClass('last');
            });

            return this;
        }
    });

    return CatalogView;

});