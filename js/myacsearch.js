// // have a looky at
// // http://wp.tutsplus.com/tutorials/theme-development/add-jquery-autocomplete-to-your-sites-search/
// // myacsearch.js

jQuery(document).ready(function ($){

      var ajaxaction = 'my_autocomplete';
      $("input#s").autocomplete({
  delay: 0,
  minLength: 1,
  source: function(req, response){
    $.getJSON( MyAcSearch.url+'?callback=?&action=' + ajaxaction, req, response);
  },
            select: function(event, ui) {
                window.location.href=ui.item.link;
            }
      });

});
