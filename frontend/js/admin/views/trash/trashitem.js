/* Вид одного айтема в корзине */

define([
    'Backbone',
    'Handlebars',
    '../catalogs/catalog',
    'text!../../templates/trash/trashitem.hbs',
    'Helpers',
    'config'
], function(Backbone, Handlebars, CatalogView, TrashItemTemplate, Helpers) {
    return Frontend.Views.TrashItemView = CatalogView.extend({

        events: {
            'click .recovery': 'recoveryItem',
            'click .delete': 'deleteItem'
        },

        tableName: 'trash',

        template: Handlebars.compile( TrashItemTemplate ),

        recoveryItem: function(e) {
            var self = this;
            this.model.urlRoot = this.tableName + '/recovery';
            this.model.save(
                { id: self.model.get('id'), tablename: self.model.get('tablename') },
                {
                    patch: true,
                    success: function() {
                        $(e.target).parents('tr').fadeOut(300).remove();
                        Helpers.checkEmptyTrash();
                    }
                }
            );
        },

        deleteItem: function(e) {
            this.model.urlRoot = this.model.get('tablename') + '/delete';
            this.model.destroy({
                success: function() {
                    $(e.target).parents('tr').fadeOut(300).remove();
                    Helpers.completeDelete();
                    Helpers.checkEmptyTrash();
                }
            }
            );
        }

    });
});