// found here
// http://jsfiddle.net/andrewwhitaker/rMhVz/2/
// forked to this

var data =[];
$("input").autocomplete({
    source: data
}).data("autocomplete")._renderItem = function(ul, item) {
    var listItem = $("<li></li>")
        .data("item.autocomplete", item)
        .append("<a>" + item.label + "</a>")
        .appendTo(ul);

    if (item.personal) {
        listItem.addClass("personal");
    }
    return listItem;
};