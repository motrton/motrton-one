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

/**
 * using superfish plugin
 */
jQuery(document).ready(function($){
    $("ul.sf-menu,menu").superfish({
         // pathClass: 'current_page_parent',
         pathLevels: 2,
         autoArrows: false,// disable generation of arrow mark-up
        dropShadows: false// disable drop shadows
    });

// if($('a').attr('title')==='link'){
// $('a[title="link"]').append(' <i class="icon-hand-right"></i>');
// selct all in container main
// $('#main').find('a').append(' <i class="icon-hand-right"></i>');
// the linked attribute gets appended to the content via
// a filter
 $('.linked').find('a').append(' <i class="icon-hand-right"></i>');

    // }

});