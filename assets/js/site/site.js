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

requirejs(['router', 'domReady'], function (Router) {
    var site = Router.initialize();

    // Меняем URL без редиректа
    $(document).on('click', '.pagename a', function(e){
        var href = $(this).attr('href');
        var protocol = this.protocol + '//';
        if (href.slice(protocol.length) !== protocol) {
            e.preventDefault();
            site.navigate(href, true);
        }
    });

    $(document).on('click', '.topmenu a', function(e){
        var href = $(this).attr('href');
        var protocol = this.protocol + '//';
        if (href.slice(protocol.length) !== protocol) {
            e.preventDefault();
            site.navigate(href, true);
        }
    });

});