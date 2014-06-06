define(['backbone','models/termodel'], function(Backbone,Territory) {
    var Territories = Backbone.Collection.extend({
        model:Territory,
        url: "./index.php?r=site/SendData"
    });
    var territories = new Territories();
    console.log(territories);
    return territories;
});
