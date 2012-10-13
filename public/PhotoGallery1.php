<!DOCTYPE html>
<?php
    require_once "../includes/config.php";
?>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>SernGallery</title>
<script type="text/javascript" src="javascripts/jquery-1.7.1.js"></script>
<script type="text/javascript" src="javascripts/jquery-ui-1.8.17.custom.min.js"></script>
<script type="text/javascript" src="javascripts/photoGallery.js"></script>
<script type="text/javascript" src="javascripts/aboutPageLinker.js"></script>
<link rel="stylesheet" href="stylesheets/photoGallery1.css" type="text/css" />
<link rel="stylesheet" href="stylesheets/jquery-ui-1.8.17.custom.css"/>
<link rel="icon" type="image/png" href="images/favicon.jpg"/>
        <script type="text/javascript">

          var _gaq = _gaq || [];
          _gaq.push(['_setAccount', 'UA-29888014-1']);
          _gaq.push(['_trackPageview']);

          (function() {
            var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
            ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
            var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
          })();

        </script>
</head>
<body>
    <div id="container">
        <div id="header">
            <div id="logo"><a href="<?php echoHomePage() ?>">~ Sernlabs ~</a></div>
            <div id="navigation">
                <ul>
                    <li><a href="<?php echoHomePage() ?>">Home</a></li>
                    <li>~</li>
                    <li><a href="AboutPage.php?pg=<?php echoCurrentPageUrl() ?>">About Page</a></li>
                </ul>
            </div>
        </div>
        <div id="content">
            <?php
                $photosFile = simplexml_load_file("../includes/photoInfo.xml");
                $photos = $photosFile->photo;
                $total = count($photos);
                $z = 0;
                foreach($photos as $photo)
                {
                    $src = $photo->src;
                    $alt = $photo->alt;
                    $isActive = $z == floor($total/2)?"active":"";
                    $width = $z == floor($total/2)?400:40;
                    $orientation = $photo->attributes()->orientation;
                    //clean quotes
                    $caption = htmlspecialchars($photo->caption, ENT_QUOTES);
                    
                    echo "<div class='photo $isActive' 
                        style='background-image: url(\"$src\"); width:$width' 
                        data-orientation='$orientation' data-caption='$caption'>" . "</div>";
                    $z++;
                }
            ?>
        </div>
    </div>
    <div id="footer"><span>&copy; <?php echoCopyRightYear() ?> Sujay Narsale | All Rights Reserved</span></div>
    <div id="photo-dialog" style="display:none;">
        <div id="photoScreen"><img src="images/3.gif" alt="Loading..." style="top:45%;position:absolute;display: block"/></div>
        <div id="photoDialogClose">
            <img src="images/PhotoGallery1/closePhotoDialog.png" alt="Close"/>
        </div>
        <img src='#' height="590" alt="Photo" style="max-width: 800px"/>
        <div id="photoCaption"></div>
    </div>
</body>
</html>
