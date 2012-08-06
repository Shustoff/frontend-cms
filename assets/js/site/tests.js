/**
 * Тесты сайта
 */

define(
[
    'collections/catalogs',
    'models/pages'
],
function (Catalog, Page) {
    return {
        RunTests: function () {
            test('mod1test', function () {
                QUnit.stop();
                Catalog.ajaxyMethod(arg, function(result) {
                      ok(true, 'true is true');
                      QUnit.start();
                });
            });

            test('mod2test', function () {
                QUnit.stop();
                Page.ajaxyMethod(arg, function(result) {
                      ok(true, 'true is true');
                      QUnit.start();
                });
            });

        }
    };
});







