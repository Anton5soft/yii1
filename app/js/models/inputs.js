define([
    'underscore',
    'backbone',
], function(_, Backbone){
    var CallForm = Backbone.Model.extend({
        defaults: {
            projectname: null,
            call: null,
            dol: null,
            shir: null,
            z: null,
            results: null,
            catcon: null,
            catost: null,
            newstart: null,
            Newost: null,
            Newrubric: null
        },
        url: './index.php/new'

    });
    return CallForm;
});