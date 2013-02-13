/* Вид корзины */

define([
    'Marionette',
    'Handlebars',
    '../catalogs/catalogs',
    './trashitem',
    '../../models/trash',
    'text!../../templates/trash/trash.hbs',
    'Helpers'
], function(Marionette, Handlebars, CatalogsView, TrashItemView, TrashModel, TrashTemplate, Helpers) {
    return Frontend.Views.TrashView = CatalogsView.extend({

        sortBySelect: '1',
        itemView: TrashItemView,

        ui: {
            mainEl: '.main',
            sortBy: '#sortby',
            limit: '#limit',
            dialog: '#dialog-confirm',
            pagination: '.pagination'
        },

        events: {
            'click #applySettings': 'applySettings',
            'click .pagination a': 'goPage',
            'click #deleteAll': 'deleteAllItems'
        },

        template: Handlebars.compile(TrashTemplate),

        onRender: function() {
            Helpers.checkEmptyTrash();
        },

        prepareCollection: function() {
            var modelCount = this.collection.at(this.collection.length - 1);
            this.count = modelCount.get('count');

            var modelEmpty = this.collection.at(0);
            this.notFound = modelEmpty.get('empty');

            this.collection.remove( modelCount );
            this.collection.remove( modelEmpty );
        },

        applySettings: function() {
            this.sortBySelect = $( this.ui.sortBy ).val();
            this.limitSelect = $( this.ui.limit ).val();
            this.collection.fetch({
                data: {
                    sortby: this.sortBySelect,
                    limit: this.limitSelect
                }
            });
            this.activePage = 'page1';
        },

        goPage: function(e) {
            e.preventDefault();
            this.sortBySelect = $( this.ui.sortBy ).val();
            this.limitSelect = $( this.ui.limit ).val();
            this.activePage = $(e.target).attr('class');
            this.collection.fetch({
                data: {
                    sortby: this.sortBySelect,
                    limit: this.limitSelect,
                    number: $(e.target).data('item')
                }
            });
        },

        // Очищаем корзину
        deleteAllItems: function() {
            var self = this;
            $( this.ui.dialog ).dialog({
               resizable: false,
               height: 175,
               modal: true,
               buttons: {
                   "Очистить": function() {
                       $.post(Frontend.adminURL + "/trash/deleteall", function() {
                           $('.pageedit').fadeOut(300).remove();
                           Helpers.completeDelete();
                           Helpers.checkEmptyTrash();
                           $( self.ui.pagination ).empty();
                       });
                       $( this ).dialog( "close" );
                   },
                   "Отмена": function() { $( this ).dialog( "close" ); }
               }
           });
        }

    });
});