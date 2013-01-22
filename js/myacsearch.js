// have a looky at
// http://wp.tutsplus.com/tutorials/theme-development/add-jquery-autocomplete-to-your-sites-search/
// myacsearch.js

jQuery(document).ready(function ($){
    var acs_action = 'myprefix_autocompletesearch';
    $("#s").autocomplete({
        source: function(req, response){
            $.getJSON(MyAcSearch.url+'?callback=?&action='+acs_action, req, response);
        },
        select: function(event, ui) {
            window.location.href=ui.item.link;
        },
        minLength: 3
    });
});
