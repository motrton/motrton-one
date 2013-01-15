// justtext.js
// taken from here
// http://viralpatel.net/blogs/jquery-get-text-element-without-child-element/
jQuery.fn.justtext = function() {
    return $(this)  .clone()
            .children()
            .remove()
            .end()
            .text();

};