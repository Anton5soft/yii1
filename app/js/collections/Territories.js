define(['backbone','models/termodel'], function(Backbone,Territory) {
    var Territories = Backbone.Collection.extend({
        model:Territory,
        url: "./js/territories.json"
    });
    var territories = new Territories();
    return territories;
});
