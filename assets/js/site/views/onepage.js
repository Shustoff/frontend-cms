/**
 * Вид одной страницы
 */

define([
    'Backbone',
    'text!../templates/one_page.html'
],
function (Backbone, OnePageTemplate) {
    var OnePageView = Backbone.View.extend({
        tagName : 'article',
        className : 'twelvecol',
        template : _.template(OnePageTemplate),

        initialize : function () {
            _.bindAll(this);
            var self = this;
            this.model.on('change', function() {
                self.render();
                document.title = self.model.attributes.pagename;
            });
        },

        render : function () {
            $('.catalog-desc').remove();
            var content = this.template(this.model.attributes);
            // Если страница не найдена, выдаем ошибку
            if (this.model.attributes.alias == null)
            {
                window.location.replace('http://' + siteRoot + '/error/404');
            }
            this.$el.html(content);
            return this;
        }
    });
    return OnePageView;
});