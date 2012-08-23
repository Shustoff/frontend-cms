/* Bootstrap */
requirejs.config({
    urlArgs: 'bust='+ (new Date()).getMilliseconds(),
    deps : ['site', 'tests'],
    paths : {
        // Libs
        'jQuery' : '../libs/jquery/jquery-1.7.2',
        'Underscore' : '../libs/underscore',
        'Backbone' : '../libs/backbone',
        'QUnit' : '../libs/qunit-1.9.0',
        // Plugins
        'text' : '../libs/require/text',
        'domReady' : '../libs/require/domready'
    },
    shim : {
        'Backbone' : {
            deps : ['jQuery', 'Underscore'],
            exports : 'Backbone'
        }
    }
});
requirejs(['router', 'domReady'], function (Router, domReady) {
    var site = Router.initialize();

<<<<<<< HEAD
    // Выстраиваем правильный URL страниц
    $(document).on('click', '.pagename a', function (e) {
=======
    $(document).on('click', '.pagename a', function(evt){
>>>>>>> db20fd3dac683d599d27e8a2d84e233e243fce43
        var href = $(this).attr('href');
        var protocol = this.protocol + '//';
        if (href.slice(protocol.length) !== protocol) {
            e.preventDefault();
            site.navigate(href, true);
        }
    });

<<<<<<< HEAD
// Выстраиваем правильный URL каталогов
    $(document).on('click', '.topmenu a', function (e) {
=======
    $(document).on('click', '.topmenu a', function(evt){
>>>>>>> db20fd3dac683d599d27e8a2d84e233e243fce43
        var href = $(this).attr('href');
        var protocol = this.protocol + '//';
        if (href.slice(protocol.length) !== protocol) {
            e.preventDefault();
            site.navigate(href, true);
        }
    });

});