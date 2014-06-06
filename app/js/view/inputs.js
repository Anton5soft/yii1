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
            var Newdol = $('#dol').val();
            var Newshir = $('#shir').val();
            var NewZ = $('#z').val();
            var NewResults = $('#results').val();
            var Newcatcon = $('#catcon').val();
            var Newcatost = $('#catost').val();
            var Newnewstart = $('#newstart').val();
            var Newnewstarttime = $('#time').val();
            var Newost = $('#ost').val();
            var Newrubric = $('#Inputs_rubric').val();
            //new model parent CallForm with value's from inputs
            var newrecord = new CallForm({
                projectname: NewProjectname,
                call: NewCall,
                dol: Newdol,
                shir: Newshir,
                z: NewZ,
                results: NewResults,
                catcon: Newcatcon,
                catost: Newcatost,
                newstart: '2014-' + Newnewstarttime + '-' + Newnewstart,
                ost: Newost
            });
            newrecord.save();
            var json = newrecord.toJSON();
            $('.test').html(JSON.stringify(json));
            return false;
        }
    });
   return callView;
});