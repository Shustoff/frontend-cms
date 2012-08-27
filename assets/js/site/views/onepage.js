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
            this.model.on('change', this.render);
        },

        render : function () {
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