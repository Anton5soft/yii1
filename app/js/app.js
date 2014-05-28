define(['jquery','underscore','backbone','backgrid', 'collections/Territories', 'view/columns','view/inputs','models/inputs'],
    function($,_,Backbone,Backgrid,territories,columns,callView,CallForm) {
//grid
        var grid = new Backgrid.Grid({
            columns: columns,
            collection: territories
        });

// Render the grid and attach the root to your HTML document
        $("#grid").append(grid.render().el);

// Fetch some countries from the url
        territories.fetch({reset: true});
//inputs
        var callForm = new CallForm();
        var callView = new callView({
            model: callForm
        });
        return grid;
    });