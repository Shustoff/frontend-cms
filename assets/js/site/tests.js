/**
 * Тесты сайта
 */
define(
[
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
            test('проверка типа коллекции', function () {
                equal(typeof Catalog, 'function', 'Catalog должен быть конструктором');
                equal(typeof this.catalog, 'object', 'Коллекция catalog имеет тип "object"');
            });
            test('проверка свойств коллекции', function () {
                equal(this.catalog.model, Page, 'Коллекция catalog содержит модели "Page"');
                equal(this.catalog.url, '/frontend/', 'Корневой URL коллекции - frontend  ');
            });

    // Проверяем модель Page
    module('Модель Page', {
        setup : function () { this.page = new Page; },
        teardown : function () { this.page.destroy(); }
    });
            test('проверка типа модели', function () {
                equal(typeof Page, 'function', 'Page должен быть конструктором');
                equal(typeof this.page, 'object', 'Модель page имеет тип "object"');
            });
            test('проверка свойств модели', function () {
                equal(this.page.urlRoot, '/frontend/', 'Корневой URL модели - frontend');
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
            test('проверка типа вида CatalogView', function () {
                equal(typeof CatalogView, 'function', 'Должен быть конструктором');
                equal(typeof this.catalogView, 'object', 'catalogView имеет тип "object"');
            });
            test('проверка свойств вида', function () {
                notEqual(this.catalogView.collection, undefined, 'Должен использовать какую-либо коллекцию');
                equal(this.catalogView.tagName, 'section', 'tagName должен быть section');
                equal(this.catalogView.className, 'row catalog', 'className должен быть row catalog');
                equal(this.catalogView.render(), this.catalogView, 'Метод render должен возвращать текущий объект');
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
            test('проверка типа вида CatalogPageView', function () {
                equal(typeof CatalogPageView, 'function', 'Должен быть конструктором');
                equal(typeof this.catalogPageView, 'object', 'catalogPageView имеет тип "object"');
            });
            test('проверка свойств вида', function () {
                notEqual(this.catalogPageView.model, undefined, 'Должен использовать какую-либо модель');
                equal(this.catalogPageView.tagName, 'article', 'tagName должен быть section');
                equal(this.catalogPageView.className, 'threecol', 'className должен быть threecol');
                equal(this.catalogPageView.render(), this.catalogPageView, 'Метод рендер должен возвращать текущий объект');
            });

});


