/* Тесты сайта */
define([
    'QUnit',
    'collections/catalogs',
    'models/pages',
    'views/catalog',
    'views/page'
], function (QUnit, Catalog, Page, CatalogView, CatalogPageView) {

    // Проверяем коллекцию Catalog
    module('Коллекция Catalog', {
        setup : function () { this.catalog = new Catalog; },
        teardown : function () { this.catalog.remove(); }
    });
        test('проверка типа коллекции', 2, function () {
            equal(typeof Catalog, 'function',  'Должен быть конструктором');
            equal(typeof this.catalog, 'object', 'Коллекция catalog имеет тип "object"');
        });
        test('проверка свойств коллекции', 1, function () {
            equal(this.catalog.model, Page, 'Коллекция catalog содержит модели "Page"');
        });

    // Проверяем модель Page
    module('Модель Page', {
        setup : function () { this.page = new Page; },
        teardown : function () { this.page.destroy(); }
    });
        test('проверка типа модели', 2, function () {
            equal(typeof Page, 'function', 'Должен быть конструктором');
            equal(typeof this.page, 'object', 'Модель page имеет тип "object"');
        });
        test('проверка свойств модели', 1, function () {
            equal(this.page.urlRoot, baseURL + this.page.get('alias'), 'Корневой URL модели  ' + baseURL + ' + alias страницы');
        });

    // Проверяем вид CatalogView
    module('Вид CatalogView', {
        setup : function () {
            this.catalog = new Catalog;
            this.catalogView = new CatalogView({collection : this.catalog});
        },
        teardown : function () {
            this.catalog.remove();
            this.catalogView.remove();
        }
    });
        test('проверка типа вида CatalogView', 2, function () {
            equal(typeof CatalogView, 'function', 'Должен быть конструктором');
            equal(typeof this.catalogView, 'object', 'catalogView имеет тип "object"');
        });
        test('проверка свойств вида', 4, function () {
            notEqual(this.catalogView.collection, undefined, 'Использует какую-либо коллекцию');
            equal(this.catalogView.tagName, 'section', 'tagName равен "section"');
            equal(this.catalogView.className, 'row catalog', 'className равен "row catalog"');
            deepEqual(this.catalogView.render(), this.catalogView, 'Метод render() возвращает текущий объект');
        });

    // Проверяем вид CatalogPageView
    module('Вид CatalogPageView', {
        setup : function () {
            this.model = new Page;
            this.catalogPageView = new CatalogPageView({model : this.model});
        },
        teardown : function () {
            this.model.destroy();
            this.catalogPageView.remove();
        }
    });
        test('проверка типа вида CatalogPageView', 2, function () {
            equal(typeof CatalogPageView, 'function', 'Должен быть конструктором');
            equal(typeof this.catalogPageView, 'object', 'catalogPageView имеет тип "object"');
        });
        test('проверка свойств вида', 3, function () {
            notEqual(this.catalogPageView.model, undefined, 'Использует какую-либо модель');
            equal(this.catalogPageView.tagName, 'article', 'tagName равен "section"');
            equal(this.catalogPageView.className, 'threecol', 'className равен "threecol"');
        });

});


