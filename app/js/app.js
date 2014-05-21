define(['jquery','underscore','backbone','backgrid', 'collections/Territories', 'view/columns'],
    function($,_,Backbone,Backgrid,territories,columns) {

        console.log(territories);
        var grid = new Backgrid.Grid({
            columns: columns,
            collection: territories
        });
        console.log(grid);
// Render the grid and attach the root to your HTML document
        $("#grid").append(grid.render().el);

// Fetch some countries from the url
        territories.fetch({reset: true});
        return grid;
    });