require.config({
    urlArgs: 'bust='+ (new Date()).getMilliseconds(),
    paths : {
        'jQuery' : '../libs/jquery/jquery',
        'Underscore' : '../libs/underscore',
        'Backbone' : '../libs/backbone/backbone',
        'jasmine': '../libs/jasmine/jasmine',
        'jasmine-html': '../libs/jasmine/jasmine-html'
    },
    shim : {
        'Backbone' : {
            deps : ['jQuery', 'Underscore'],
            exports : 'Backbone'
        },
        'jasmine': { exports: 'jasmine' },
        'jasmine-html': {
            deps: ['jasmine'],
            exports: 'jasmine'
        }
    }
});

require(['jasmine-html'], function(jasmine){
    var jasmineEnv = jasmine.getEnv();
    jasmineEnv.updateInterval = 1000;
    var htmlReporter = new jasmine.HtmlReporter();
    jasmineEnv.addReporter(htmlReporter);
    jasmineEnv.specFilter = function(spec) {
        return htmlReporter.specFilter(spec);
    };

    require(['specs'], function(){
        jasmineEnv.execute();
    });
});