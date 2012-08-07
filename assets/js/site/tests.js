/**
 * Тесты сайта
 */
define(
[
    'QUnit',
    'collections/catalogs',
    'models/pages'
], function (QUnit, Catalog, Page) {


    // Проверяем коллекцию Catalog
    module('Проверка коллекции Catalog', {
        setup : function () {
            this.catalog = new Catalog;
        }
    });
    test('проверка типа коллекции', function () {
        expect(3);
        equal(typeof this.catalog, 'object', 'Коллекция Catalog имеет тип "object"');
        equal(this.catalog.model, Page, 'Коллекция Catalog содержит модели "Page"');
        equal(this.catalog.url, '/frontend/', 'Корневой URL коллекции - frontend  ')
    });



    // Проверяем модель Page
    module('Проверка модели Page', {
        setup : function () {
            this.page = new Page;
        }
    });
    test('проверка типа модели', function () {
        expect(2);
        equal(typeof this.page, 'object', 'Модель Page имеет тип "object"');
        equal(this.page.urlRoot, '/frontend/', 'Корневой URL модели - frontend')
    });


});


