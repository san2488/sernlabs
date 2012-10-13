$(document).ready(function() {
    var extlinks = $("a:external");
    $.each(extlinks, function(i, link){
        $("#externalLinks").append($(link).clone().attr("target","_blank")).append("<br />");
    });
});