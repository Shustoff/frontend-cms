/* Модель Catalog */
define(['Backbone', 'config'], function(Backbone) {
    return Frontend.Models.Catalog = Backbone.Model.extend({
        initialize: function(attrs) {
            if (attrs) {
                this.urlRoot = attrs.alias;
            } else {
                this.urlRoot = 'addcatalog';
            }
        },
        validate: function(attrs) {
            if ( ! attrs.catalog) {
                if ( ! attrs.catname ) return 'Введите название каталога';
                if ( ! attrs.alias ) return 'Введите алиас каталога';
            }
        }
    });
});