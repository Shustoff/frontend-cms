/* Вид одного каталога */

define([
    'Marionette',
    'Handlebars',
    'text!../../templates/catalogs/catalog.hbs',
    'config'
], function(Marionette, Handlebars, CatalogTemplate) {
    return Frontend.Views.CatalogView = Backbone.Marionette.ItemView.extend({

        events: {
            'click .unpublish': 'unpublish',
            'click .publish': 'publish',
            'click .intrash': 'intrash'
        },

        tagName: 'tr',
        className: 'pageedit',
        tableName: 'catalogs',

        template: Handlebars.compile( CatalogTemplate ),

        render: function() {
            this.$el.html( this.template({ item: this.model.toJSON(), siteURL: Frontend.siteURL }) );
            return this;
        },

        unpublish: function(e) {
            this.model.urlRoot = this.tableName + '/off';
            this.model.save(
                { status: '0' },
                {
                    patch: true,
                    success: function() {
                        $(e.target).replaceWith("<img class='publish' src='" + Frontend.siteURL + "/frontend/img/admin/not-published.png'>");
                    }
                }
            );
        },

        publish: function(e) {
            this.model.urlRoot = this.tableName + '/on';
            this.model.save(
                { status: '1' },
                {
                    patch: true,
                    success: function() {
                        $(e.target).replaceWith("<img class='unpublish' src='" + Frontend.siteURL + "/frontend/img/admin/published.png'>");
                    }
                }
            );
        },

        intrash: function(e) {
            this.model.urlRoot = this.tableName + '/intrash';
            this.model.save(
                { intrash: '1' },
                {
                    patch: true,
                    success: function() {
                        $(e.target).parents('tr.pageedit').fadeOut(300);
                    }
                }
            );
        }

    });
});