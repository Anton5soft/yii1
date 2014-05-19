define([
    'underscore',
    'backbone',
    // Pull in the Model module from above
    'models/termodel'
], function(_, Backbone, Territories){
    var Territories = Backbone.Collection.extend({
        model: Territory,
        url: "territories.json"
    });
    // You don't usually return a collection instantiated
    return Territories;
});


