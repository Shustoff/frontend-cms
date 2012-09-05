/* Главный файл, конфиг Require. Bootstrap */
var siteRoot = 'localhost/frontend';

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
        'domReady' : '../libs/require/domready',
        // Custom
        'config' : './config'
    },
    shim : {
        'Backbone' : {
            deps : ['jQuery', 'Underscore'],
            exports : 'Backbone'
        },
        'config' : { deps : ['Underscore'] }
    }
});

requirejs(['router', 'config'], function (Router) {

    var site = Router.initialize();

    // Меняем URL без редиректа
    $(document).on('click', 'a', function(e){
        var href = $(this).attr('href');
        var protocol = this.protocol + '//';
        if (href.slice(protocol.length) !== protocol) {
            e.preventDefault();
            site.navigate(href, true);
        }
    });

});