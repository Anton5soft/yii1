
require.config({
    baseUrl: '',
    paths: {
        jquery: 'lib/jquery',
        underscore: 'bower_components/underscore/underscore',
        backbone: 'bower_components/backbone/backbone',
        "backgrid/select-all":	'bower_components/backgrid/extensions/select-all/backgrid-select-all',
    },
    map: {
        '*': {
            'css': 'plugins/requirecss/css'
        }
    },
    shim: {
        backgrid: {
            deps: ['jquery', 'backbone', 'underscore', 'css!vendor/backgrid/backgrid'],
            exports: 'Backgrid'
        },
        "backgrid/select-all": ['backgrid', 'css!vendor/backgrid/extensions/select-all/backgrid-select-all']
    }

});

require([

    // Load our app module and pass it to our definition function
    'app',
], function(App){
    // The "app" dependency is passed in as "App"
    App.initialize();
});