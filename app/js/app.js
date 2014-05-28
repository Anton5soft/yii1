define(['jquery','underscore','backbone','backgrid', 'collections/Territories', 'view/columns'],
    function($,_,Backbone,Backgrid,territories,columns) {

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