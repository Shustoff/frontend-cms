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
            $('.catalog').empty().append( this.$el.html(content) );
            return this;
        }

    });

    return OnePageView;
});