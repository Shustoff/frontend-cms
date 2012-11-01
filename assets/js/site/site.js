/* Главный файл, конфиг Require. Bootstrap */
var siteRoot = '';

requirejs.config({
    urlArgs: 'bust='+ (new Date()).getMilliseconds(),
    deps : ['site', 'tests'],
    paths : {
        // Libs
        'jQuery' : '../libs/jquery/jquery',
        'Underscore' : '../libs/underscore',
        'Backbone' : '../libs/backbone',
        'QUnit' : '../libs/qunit',
        // Plugins
        'text' : '../libs/require/text',
        'domReady' : '../libs/require/domready',
        // Custom
        'config' : './config',
        'player' : './mediaelement-and-player.min'
    },
    shim : {
        'Backbone' : {
            deps : ['jQuery', 'Underscore'],
            exports : 'Backbone'
        },
        'config' : { deps : ['Underscore'] },
        'player' : { deps : ['jQuery']}
    }
});

requirejs(['router', 'player', 'config'], function (Router) {
    // Начинаем запись истории
    var site = Router.initialize();

    // Меняем URL без редиректа
    $(document).on('click', '.topmenu a, .pagename a, .pagination a', function(e){
        var href = $(this).attr('href');
        var protocol = this.protocol + '//';
        if (href.slice(protocol.length) !== protocol) {
            e.preventDefault();
            site.navigate(href, true);
        }
    });

});