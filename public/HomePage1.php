<?php
    require_once "../includes/config.php";
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=2.0, user-scalable=yes" /> 
<title>Welcome to SERNLabs</title>
<link rel="stylesheet" href="stylesheets/homepage1.css" type="text/css" media="Screen" />
<link rel="stylesheet" href="stylesheets/mobile/homepage1.css" type="text/css" 
      media="handheld, only screen and (max-width: 480px), only screen and (max-device-width: 480px)" />
<?php 
    include "../includes/commonImports.php";
?>
</head>
<body>
<div id="container">
  <div id="topNav">
    <ul>
        <li><a href="Links2.php" class="topNavLink">Links</a></li>
        <li><a href="AboutPage.php?pg=<?php echoCurrentPageUrl() ?>" class="topNavLink">About Page</a></li>
    </ul>
  </div>
    <div id="mastHead"><a href="<?php echoHomePage() ?>"><img src="images/sernLogo.png" alt="SERNLabs" /></a></div>
  <div id="navPole">
    <div id="navPoleImage"><img src="images/pole.png" alt="Direction Links" /></div>
    <div class="plankStack">
        <a href="HomePage1.php" class="plankImage" style="background-image: url('images/plkHomePage.png')"></a>
        <a href="AboutMe1.php" class="plankImage" style="background-image: url('images/plkAboutMe.png')"></a>
        <a href="AboutSite1.php" class="plankImage" style="background-image: url('images/plkAboutSite.png')"></a>
        <a href="PhotoGallery1.php" class="plankImage" style="background-image: url('images/plkPhotoGallery.png')"></a>
        <a href="Links2.php" class="plankImage" style="background-image: url('images/plkLinks.png')"></a>
    </div>
  </div>
  <div id="siteIntro">
      <div class="introColumn">
          <div><img src="images/beakers.png" width="43" height="41" 
                    alt="beaker image" class="aboutImg"/>
              <span class="aboutTitle">ABOUT<br />SERNLABS</span></div>
          <div class="clearboth"></div>
          <div class="aboutDesc">
            This website has been made 
            without any agenda, and serves no particular purpose. 
            Actually, may be it does, but that is subject to change. 
            To read a more saner explanation (and to know what SERN stands for), 
            <a href="AboutSite1.php">Read more</a>.
            </div>
      </div>
      <div class="introColumn">
          <div><img src="images/alert.png" width="59" height="42" 
                    alt="alert image" class="aboutImg"/>
              <span class="aboutTitle">ABOUT<br />ME</span></div>
          <div class="clearboth"></div>
          <div class="aboutDesc">
            I am a Computer Engineer 
            living and working in Mumbai. I am currently an ASE at
            TATA Consultancy Services and building this website is one 
            of the things I do - when they let me. 
            <a href="AboutMe1.php">Read more</a>, about me.
            </div>
      </div>
  </div>
<div id="footer">
    <div id="footerContent">
        <div>
            <div class="contactInfo">
                <div class="contactTitle">twitter:</div>
                <div class="contactLink"><a href="https://twitter.com/#!/sernlabs" target="_blank">@sernlabs</a></div>
            </div>
            <div class="contactInfo">
                <div class="contactTitle">email:</div>
                <div class="contactLink"><a href="mailto:sujay.narsale@gmail.com" target="_blank">sujay.narsale@gmail.com</a></div>
            </div>
            <div class="contactInfo">
                <div class="contactTitle">google+:</div>
                <div class="contactLink"><a href="https://plus.google.com/108115545564175216526" target="_blank">+sujay</a></div>
            </div>
            <div class="contactInfo">
                <div class="contactTitle">orkut:</div>
                <div class="contactLink"><a href="http://www.orkut.co.in/Main#Profile?rl=mp&uid=14161494046136599902" target="_blank">lol</a></div>
            </div>
        </div>
    </div>
    <div id="copyright">&copy; Copyright <?php echoCopyRightYear() ?> Sujay Narsale | All Rights Reserved </div>
  </div><!-- end #footer -->
</div>
</body>
</html>
