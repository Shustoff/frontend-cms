/* Вид всех каталогов */

define([
    'Marionette',
    'Handlebars',
    './catalog',
    '../../models/catalog',
    'text!../../templates/catalogs/catalogs.hbs',
    'Helpers'
], function(Marionette, Handlebars, CatalogView, Catalog, CatalogsTemplate, Helpers) {
    return Frontend.Views.CatalogsView = Backbone.Marionette.CollectionView.extend({

        tagName: 'tbody',
        className: 'list-items',
        sortBySelect: 'id',
        limitSelect: '10',
        itemView: CatalogView,

        initialize: function() {
            this.render();
        },

        ui: {
            mainEl: '.main',
            itemNameSearch: '#itemNameSearch',
            sortBy: '#sortby',
            limit: '#limit'
        },

        events: {
            'click #applySettings': 'applySettings',
            'click .pagination a': 'goPage'
        },

        template: Handlebars.compile(CatalogsTemplate),

        render: function() {
            this.prepareCollection();

            $( this.ui.mainEl ).html( this.template({
                countItems: this.count,
                itemNameSearch: this.itemNameSearch,
                notFound: this.notFound
            }) );

            this.setElement('.list-items');

            _.each(this.collection.models, function(model) {
                this.$el.append( new this.itemView({ model: model }).render().el );
            }, this);

            $( this.ui.mainEl ).find('.table').append( this.$el );
            this.setElement('.w-grid');

            this.showActiveButton();
            this.delegateEvents(this.events);
            this.saveFilter();

            this.triggerMethod('render');

            return this;
        },

        // Подготавливаем коллекцию для рендера
        prepareCollection: function() {
            var modelCount = this.collection.at(this.collection.length - 1);
            this.count = modelCount.get('count');

            var modelSearch = this.collection.at(this.collection.length - 2);
            this.itemNameSearch = modelSearch.get('itemname');

            var modelNotFoundSearch = this.collection.at(0);
            this.notFound = modelNotFoundSearch.get('notfound');

            this.collection.remove( modelCount );
            this.collection.remove( modelSearch );
            this.collection.remove( modelNotFoundSearch );
        },

        // Показываем активную кнопку пагинации
        showActiveButton: function() {
            if (this.activePage) {
                $('.' + this.activePage).addClass('hovered');
            } else {
                $('.page1').addClass('hovered');
            }
        },

        // Сохраняем фильтрацию между переходами по страницам
        saveFilter: function() {
            var self = this;
            $('#sortby option').each(function() {
                if ($(this).val() === self.sortBySelect) {
                    $(this).attr('selected', 'selected');
                }
            });
            $('#limit option').each(function() {
                if ($(this).val() === self.limitSelect) {
                    $(this).attr('selected', 'selected');
                }
            });
        },

        // Применяем настройки фильтрации
        applySettings: function() {
            this.itemname = $( this.ui.itemNameSearch ).val();
            this.sortBySelect = $( this.ui.sortBy ).val();
            this.limitSelect = $( this.ui.limit ).val();
            this.collection.fetch({
                data: {
                    itemname: this.itemname,
                    sortby: this.sortBySelect,
                    limit: this.limitSelect
                }
            });
            this.activePage = 'page1';
        },

        // Переход по страницам
        goPage: function(e) {
            e.preventDefault();
            this.itemname = $( '#catNameSearch' ).val();
            this.sortBySelect = $( '#sortby' ).val();
            this.limitSelect = $( '#limit' ).val();
            this.activePage = $(e.target).attr('class');
            this.collection.fetch({
                data: {
                    itemname: this.itemname,
                    sortby: this.sortBySelect,
                    limit: this.limitSelect,
                    number: $(e.target).data('item')
                }
            });
        }

    });
});