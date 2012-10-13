$(function(){
   $(".photo").hover(function(){
       var $self = $(this);
       var photoWidth = $self.data("orientation") == 1?400:225;

       $self.stop().animate({width:photoWidth}, 300);
       $self.siblings('.photo.active').stop().animate({width:40}, 500).removeClass('active');
       $self.addClass('active');
   });
});
$(function() {
    $(".photo").click(function(){
       var $self = $(this);
       var $imgSrc = $self.css('background-image')
                            .replace(/"/g,"")
                            .replace(/url\(|\)$/ig, "")
                            .replace("Photos/", "Photos/Original/");
       var caption = $self.data('caption');
            
       $('#photo-dialog > img').attr("src", $imgSrc).load(function() {
                         if (!this.complete || typeof this.naturalWidth == "undefined" || this.naturalWidth == 0) {
                             alert('Error while downloading image! I hope your are insured.');
                         } else {
                             $("#photoScreen").css('display','none');
                         }
                      });
                      
       $('#photo-dialog > #photoCaption').html(caption);
       var $photoDialog = $("#photo-dialog").dialog({
            dialogClass: 'photoDialog',
            modal: true,
            width: 840,
            height: 620
        }); 
    
        $(".ui-widget-overlay").unbind('click').click(function(){
            $photoDialog.dialog('destroy');
            $("#photoScreen").css('display','inherit');
        });
        $photoDialog.children("#photoDialogClose").unbind('click').click(function() {
            $photoDialog.dialog('destroy');
            $("#photoScreen").css('display','inherit');
        });
        $photoDialog.children("#photoDialogClose").css('cursor', 'pointer');
        
        
        $photoDialog.hover(function() {
           $(this).children("#photoCaption").stop().fadeTo(400, 1);
           $(this).children("#photoDialogClose").stop().fadeTo(400, 1);
        },
        function(){
            $(this).children("#photoCaption").stop().delay(600).fadeOut(400);
            $(this).children("#photoDialogClose").stop().delay(600).fadeOut(400);
        });
    });
});