/**
 * Вид каталога
 */
define([
    'Backbone',
    './page',
    'config',
    'text!../templates/catalog_page.html'
],
function (Backbone, CatalogPageView, config) {
    var CatalogView = Backbone.View.extend({
        tagName : 'section',
        className : 'row catalog',
        $el : $('.catalog'),

        initialize : function () {
            _.bindAll(this);
        },

        render : function (perPage, page) {
            var self = this;
            page = page - 1;
            var collection = this.collection;

            // Проверяем, если модель это не страница, а например описание каталога
            collection.each(function(model) {
                if (_.has(model.toJSON(), 0)) {
                    $('.mid').prepend('<section class="row catalog-desc">' + model.toJSON()[0] + '</section>');
                    model.destroy();
                }
            });

            collection = _(collection.rest(perPage * page));
            collection = _(collection.first(perPage));

            // Проходим по всем моделям в коллекции и рендерим их
            collection.each(function(model) {
                var pageView = new CatalogPageView({model : model});
                var content = pageView.render().el;
                self.$el.append(content);
            });

            // Каждой 4й колонке ставим класс .last
            $('.threecol').map(function(){
                if (($(this).index() + 1) % 4 === 0) {
                    $(this).addClass('last');
                }
            });
            return this;
        },

        // Добавляем пагинацию
        addPagination : function (catalias) {
            $('.pagination').show();
            var $pageList = $('.pagination ul'),
                pageCount = Math.ceil(this.collection.length / 8),
                pageNum = 1;

            $pageList.empty();

            if (pageCount > 1) {
                while (pageNum <= pageCount) {
                    $pageList.append('<li><a id="' + pageNum + '" href="' + (catalias || '') + '/page/' + pageNum + '">' + pageNum + '</a></li>');
                    pageNum++;
                }
            }
        }
    });

    return CatalogView;

});