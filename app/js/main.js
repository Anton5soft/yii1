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
        //Model
        var CallForm = Backbone.Model.extend({
            defaults: {
                projectname: null,
                sll: null,
                sll: null,
                sspn: null,
                z: null,
                results: null,
                step: null
            },
            url: function() {
                return '/call';
            },
            validate: function(attr) {
                if( !(attr.projectname && attr.sll && attr.sll) > 9 ) {
                    return "Error Occurred";
                }
            },

            initialize: function() {
                this.bind("error", function (model, error) {
                    console.log(error);
                });

            }

        });
        //View
        var callView = Backbone.View.extend({
            el: '.callForm',
            events: {
                'click input.submit': 'getStatus'
            },
            getStatus: function(event){
                //for each inputs function value
                var NewProjectname = $('#projectname').val();
                var NewCall = $('#call').val();
                var NewSll = $('#sll').val();
                var NewSspn = $('#sspn').val();
                var NewZ = $('#z').val();
                var NewResults = $('#results').val();
                var NewStep = $('#step').val();
                //new model parent CallForm with value's from inputs
                var newrecord = new CallForm({
                    projectname: NewProjectname,
                    call: NewCall,
                    sll: NewSll,
                    sspn: NewSspn,
                    z: NewZ,
                    results: NewResults,
                    step: NewStep,
                });
                var json = newrecord.toJSON();
                $('.test').html(JSON.stringify(json));
                return false;
            }
        });
        var callForm = new CallForm();
        var callView = new callView({
            model: callForm
        });


        // The "app" dependency is passed in as "App"
    grid.initialize();
});
