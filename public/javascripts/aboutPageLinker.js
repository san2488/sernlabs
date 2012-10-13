$(function() {
    $(".aboutPage").click(function(e) {
        var lnkAbtPg = $(this).attr('href');
        e.preventDefault();
        window.location.href = insertParam("pg", window.location.pathname, lnkAbtPg);
    });
});
//http://stackoverflow.com/questions/486896/adding-a-parameter-to-the-url-with-javascript
function insertParam(key, value, url)
{

    key = encodeURIComponent(key); value = encodeURIComponent(value);

    if (url.indexOf('?') == -1) {
        return url + '?' + key + '=' + value;
    }

    var kvp = url.split('?')[1].split('&');
    var i=kvp.length; var x; while(i--) 
    {
        x = kvp[i].split('=');

        if (x[0]==key)
        {
            x[1] = value;
            kvp[i] = x.join('=');
            break;
        }
    }

    if(i<0) {kvp[kvp.length] = [key,value].join('=');}

    //again, do what you will here
    return url + kvp.join('&');
}
