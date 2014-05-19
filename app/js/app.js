define([
    'jquery',
    'underscore',
    'backbone',
    'views/terview',
    'views/col',
    'bower_components/backgrid/lib/backgrid',
], function($, _, Backbone, territories,columns,Backgrid){
    var grid = new Backgrid.Grid({
        columns: columns,
        collection: territories
    });

// Render the grid and attach the root to your HTML document
    $("#grid").append(grid.render().el);

// Fetch some countries from the url
    territories.fetch({reset: true});
    return grid;
});

