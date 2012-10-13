$(function() 
    {		
        var paneWidth = $("div#ipodContent").width();
        var tabImgHt = $(".ipodPane h3.viewing").find("img").prop('height');
        //init
        refreshViewPane(0);


        $(".ipodPane h3").hover(function() 
        {
            $(this).find("img").css('margin-top', (-tabImgHt / 2) + 'px');
            $(this).find("span").css('color', '#FFF');
        },
        function (){
            $(this).not(".viewing").find("img").css('margin-top', '0px');
            $(this).not(".viewing").find("span").css('color', '#7c7c7c');
        });
	
        $(".ipodPane h3").click(function() 
        {			
            $(this).addClass("viewing");
            $(".ipodPane h3").not($(this)).removeClass("viewing");
            refreshViewPane($(this).siblings().css('left') == 0 + "px" ? 0 : paneWidth);
        });
	
        function refreshViewPane(initLeft){
            $(".ipodPane h3.viewing").siblings().css('left', initLeft + "px");
            $(".ipodPane h3.viewing").siblings().animate({
                left: "0px"
            },'fast','swing');
            $(".ipodPane span.ipodSlideWindow").not($("h3.viewing").siblings()).animate({
                left: -paneWidth + "px"
                },'fast','swing');
		
            $(".ipodPane h3.viewing").find("img").css('margin-top', -tabImgHt / 2 + 'px');
            $(".ipodPane h3.viewing").find("span").css('color', '#FFF');
		
            $(".ipodPane h3").not(".viewing").find("img").css('margin-top', '0px');
            $(".ipodPane h3").not(".viewing").find("span").css('color', '#7c7c7c');
        }
	
        $("#mugShot").click(function() {
            $(".ipodPane .ipodSlideWindow").animate({
                left: -paneWidth + "px"
                },'fast','swing');
            $("#mugShotWindow").animate({
                left: "0px"
            },'fast','swing');
        });
	
        $(".btnBack").click(function() {
            $(this).parent(".ipodPane span.ipodSlideWindow").animate({
                left: -paneWidth + "px"
                },'fast','swing');
            refreshViewPane(0);
        });
        updateClock( );
        setInterval('updateClock()', 1000 );
        
        //        $('#naughtyMouse').bind('mouseenter', sneakABoo);
        $('#naughtyMouse').click(sneakABoo);
        $('#switch').click(function(){
            $(this).hasClass('transparent') ? 
                ($(this).removeClass('transparent') && $('#galleryButton').removeClass('pointer')):
                ($(this).addClass('transparent') && $('#galleryButton').addClass('pointer'));
        });
        $('#galleryButton').click(function(){
            if($('#switch').hasClass('transparent')) {
                window.location.href="PhotoGallery1.php";
//                $('<a href="PhotoGallery1.php"></a>').click();
            }
        });
    });

function sneakABoo() {
    hideAway($(this).children('img'), getShy);
    $('#naughtyMouse').unbind('click');
}

function getShy() {
    $this = $(this);
    comeOnOut($this);
    $this.hover(function() {
        hideAway($this, function() {
            comeOnOut($this);
            });
        });
}

function hideAway($this, callBack){
    $this.stop().animate({
        left: '400px', 
        top: '380px'
    }, 200, callBack);
}

function comeOnOut($this, callBack){
    setTimeout(function() {
        $this.stop().animate({
            left: '260px', 
            top: '240px'
        }, 4000, 'swing', callBack);
    }, 3000);
}


function updateClock ( )
{
    var currentTime = new Date ( );

    var currentHours = currentTime.getHours ( );
    var currentMinutes = currentTime.getMinutes ( );

    // Pad the minutes and seconds with leading zeros, if required
    currentMinutes = ( currentMinutes < 10 ? "0" : "" ) + currentMinutes;

    // Choose either "AM" or "PM" as appropriate
    var timeOfDay = ( currentHours < 12 ) ? "AM" : "PM";

    // Convert the hours component to 12-hour format if needed
    currentHours = ( currentHours > 12 ) ? currentHours - 12 : currentHours;

    // Convert an hours component of "0" to "12"
    currentHours = ( currentHours == 0 ) ? 12 : currentHours;

    // Compose the string for display
    var currentTimeString = currentHours + ":" + currentMinutes + " " + timeOfDay;

    // Update the time display
    $("#clock").html(currentTimeString);
}
