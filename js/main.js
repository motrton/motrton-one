// main.js
// Copyright (c)  2013
// Fabian "fabiantheblind" Morón Zirfas
// Permission is hereby granted, free of charge, to any
// person obtaining a copy of this software and associated
// documentation files (the "Software"), to deal in the Software
// without restriction, including without limitation the rights
// to use, copy, modify, merge, publish, distribute, sublicense,
// and/or sell copies of the Software, and to  permit persons to
// whom the Software is furnished to do so, subject to
// the following conditions:
// The above copyright notice and this permission notice
// shall be included in all copies or substantial portions of the Software.
// THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND,
// EXPRESS OR IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES
// OF MERCHANTABILITY, FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT.
// IN NO EVENT SHALL THE AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM,
// DAMAGES OR OTHER LIABILITY, WHETHER IN AN ACTION OF  CONTRACT,
// TORT OR OTHERWISE, ARISING FROM, OUT OF OR IN CONNECTIO
// WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN THE SOFTWARE.

// see also http://www.opensource.org/licenses/mit-license.php

// function autocomplete ($) {

// // This would be jQuery autocomplete
// // searchterms
// var searchtermstring = $('#searchterms').text();

// // var searchterms = $.parseJSON("'" + searchtermstring + "'");
// // var terms = searchterms.list;

// // var availableTags = ["Batman", "Spiderman", "Hulk"];

// var terms = searchtermstring.split(',');
// terms.pop();
//  $( "input#s" ).autocomplete({
//      source: terms,
//      minLength: 0,
//      autoFocus: true,
//      delay: 10

// });

// $("div#debuginfo").append("<p>Preset searchterms added with js: -->" + terms + " as "+ terms.constructor.name+ "</p>");

// }


// function suggestions ($) {
//     var acs_action = 'myprefix_autocompletesearch';
//     // var res =  $.getJSON(MyAcSearch.url+'?callback=?&action='+acs_action);

//    $('input#s').suggest("<?php echo get_bloginfo('wpurl'); ?>/wp-admin/admin-ajax.php?callback=?&action=" +acs_action, {multiple:false});

// }

/**
* using superfish plugin
*/
function superfish ($) {
var width = $(window).width();
if (width >=480) {
    $("ul.sf-menu,menu").superfish({
         // pathClass: 'current_page_parent',
         pathLevels: 2,
         autoArrows: false,// disable generation of arrow mark-up
        dropShadows: false// disable drop shadows
    });
}

}

/**
 * ADDING <i> to every link in specific container
 */
function linkIcons ($) {

// if($('a').attr('title')==='link'){
// $('a[title="link"]').append(' <i class="icon-hand-right"></i>');
// selct all in container main
// $('#main').find('a').append(' <i class="icon-hand-right"></i>');
// the linked attribute gets appended to the content via
// a filter
 $('.linked').find('a').prepend('<i class="icon-hand-right"></i> ');
    // }
}


/**
 * Add better letterpress to elements
 * Looks better nut links get unclickable
 *
 */
// function depthLetterpress ($) {
// $('h1, h2, h3, h4').addClass('depth');
// $('h1, h2, h3').attr('title',function(){
//     return $(this).text();
// });
// }
//
// make the dropdown phone only
function mobileDropdown ($) {


if($('.navbar, .navbar-fixed-top, .visible-phone').css('display') !== 'none !important'){
$('.nav').children('li').addClass('dropdown');
$('ul.nav > li.dropdown').children('a').addClass('dropdown-toggle');
$('.dropdown-toggle').attr('data-toggle','dropdown');
$('a.dropdown-toggle').append(' <b class="caret"></b>');
$('li.dropdown > ul.children').addClass('dropdown-menu');

// remove the caret on the blog tab
$('ul.nav > li').last().children('a').children('b').removeClass('caret');

// we have to open the current item
$('li.current_page_item').addClass('open');

$('li.dropdown > a.dropdown-toggle').click(
    function(){
        var a_href = $(this).attr('href');
        window.location = a_href;
        }
    );
}

// var text = $('li.dropdown > a.dropdown-toggle').each(
//     function (index) {
//         var a_href = $(this).attr('href');
//         var a_text = $(this).text();

//         $(this).text('');
//         $(this).parent().prepend(a_text);
//         }
//     );


// $('.dropdown-menu').removeClass('children');
// $('ul.dropdown-menu > li').removeClass();
//
}

function helper ($) {
// get previous url
var cameFrom =  document.referrer;
$('div#debuginfo').append('This is where you came from' + cameFrom+ '<br>');
var res = "<?php echo get_bloginfo('wpurl'); ?>/wp-admin/admin-ajax.php?action=search";
$('div#debuginfo').append('<br>' + res);
}



/**
 * This calls all the functions
 * superfish($);
 * linkIcons($);
 * autocomplete($);
 * mobileDropdown($);
 * helper($)
 */

// jQuery(function($) {
//     $( ".combobox" ).combobox();
//     $( ".toggle" ).click(function() {
//       $( ".combobox" ).toggle();
//     });
//  });


jQuery(document).ready(function($){
superfish($);
linkIcons($);


// var se_ajax_url = "<?php echo admin_url('admin-ajax.php'); ?>";
// $('input#s').suggest(se_ajax_url + '?action=se_lookup');

// $('div#debuginfo').append(se_ajax_url + '?action=se_lookup');

// suggestions($);
//
// var haystack = ["ActionScript", "AppleScript", "Asp", "BASIC"];
// ajaxurl + "?action=search", { delay: 500, minchars: 2}

// $('input#s').suggest("<?php echo get_bloginfo('wpurl'); ?>/wp-admin/admin-ajax.php?action=search", {
//   suggestionColor   : '#cccccc',
//   moreIndicatorClass: 'suggest-more',
//   moreIndicatorText : '&hellip;'
//  });




// This would be jQuery autocomplete
// searchterms
// var searchtermstring = $('#searchterms').text();

// // var searchterms = $.parseJSON("'" + searchtermstring + "'");
// // var terms = searchterms.list;

// // var availableTags = ["Batman", "Spiderman", "Hulk"];

// var terms = searchtermstring.split(',');
// terms.pop();
//  $( "input#s" ).autocomplete({
//      source: terms,
//      minLength: 0,
//      autoFocus: true,
//      delay: 10

// });

// $("div#debuginfo").append("<p>Preset searchterms added with js: -->" + terms + " as "+ terms.constructor.name+ "</p>");
// // autocomplete($);
// // depthLetterpress($);
mobileDropdown($);
helper($);
});
