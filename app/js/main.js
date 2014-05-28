requirejs.config({
    paths:{
        'jquery': 'bower_components/jquery/jquery',
        'underscore':'bower_components/underscore/underscore',
        'backbone':'bower_components/backbone/backbone',
        'backgrid': 'bower_components/backgrid/lib/backgrid'
    },
    map: {
        '*': {
            'css': 'bower_components/require-css/css'
        }
    },
    shim: {
        'jquery': {
            exports: 'jQuery',
        },
        underscore: {
            exports: '_'
        },
        backbone: {
            deps: ["underscore", "jquery"],
            exports: "Backbone"
        },
        backgrid: {
            deps: ['jquery', 'backbone', 'underscore', 'css!bower_components/backgrid/lib/backgrid'],
            exports: "Backgrid"
        }
    }
});
require(['app'],
    function(grid){
    grid.initialize();
});
