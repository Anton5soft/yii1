define([
    'underscore',
    'backbone',
    'jquery',
    'models/inputs'
], function(_, Backbone,$,CallForm){
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
                step: NewStep
            });
            newrecord.save();
            var json = newrecord.toJSON();
            $('.test').html(JSON.stringify(json));
            return false;
        }
    });
   return callView;
});