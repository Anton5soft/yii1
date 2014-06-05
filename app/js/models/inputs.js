define([
    'underscore',
    'backbone',
], function(_, Backbone){
    var CallForm = Backbone.Model.extend({
        defaults: {
            projectname: null,
            sll: null,
            sspn: null,
            z: null,
            results: null,
            step: null
        },
        url: './index.php/new'

    });
    return CallForm;
});