<?php
    require_once "../includes/config.php";
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>About SERNLabs</title>
<link href="stylesheets/aboutSite1.css" rel="stylesheet" type="text/css" />
<link rel="icon" type="image/png" href="images/favicon.jpg"/>
<script type="text/javascript" src="javascripts/jquery-1.7.1.js"></script>
<script type="text/javascript" src="javascripts/aboutPageLinker.js"></script>
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
    <div id="logo">
    <a href="<?php echoHomePage() ?>"></a>
    </div>
    <div id="topNav">
      <ul>
        <li class="topNavLink"><a href="<?php echoHomePage() ?>">Home</a></li>
        <li class="topNavLink"><a href="AboutMe1.php">About Me</a></li>
        <li class="topNavLink"><a href="AboutPage.php?pg=<?php echoCurrentPageUrl() ?>">About Page</a></li>
      </ul>
    </div>
    <!-- end #header -->
  </div>
  <div id="mainContent">
    <p><span class="highlightText">Well, I lied.</span> This is not a saner explanation. That's because, there is no sane explanation for this site. You will not find a consistent design to the pages or a proper sitemap or a global style, <span class="highlightText">or may be you might!</span> You will not find topics on this site related to a particular theme or a adherence to a certain technology or content and layout catering to a particular audience, <span class="highlightText">or may be you just might!</span> Am I not making sense? That is because I am not supposed to. That is the essense of this site, to not try make sense, <span class="highlightText">or may be it's not!</span></p>
    <p>You will often find pages switching wildly between multi-column layouts, between colour themes, between rendering technologies, between font stacks and between themes. There will be no particular order, or may be there will! That is undecided, or may be its not! <span class="highlightText">Uncertainity paves the way for progress.</span></p>
    <p>I will use my own design, pick up others' design or not use any design at all. I will try and use the newest CSS3 and HTML5 feature and try to configure for maximum cross-browser compatiability. I will insert <span class="highlightText">Flash, Javascript, jQuery</span> and mix them perhaps. Or maybe I will do none of these things!</p>
    <p>You want to know what SERN stands for? Well, it stands for <span class="highlightText">SAN's E-research and Networking</span>. Actually may be it stands for <span class="highlightText">Sujay's Everything Random and New</span>. Or maybe its just a take on the makers of the Large Hadron Collider. In the end, its - you guessed it - not decided; or sane!.</p>
    <p>In the end, the best way to define the crux of this website is with a technical term. There is nothing <span class="highlightText">out of scope </span>here. Because <span class="highlightText">there is no scope.</span> Or may be there is!</p>
    <h1>&nbsp;</h1>
    <!-- end #mainContent -->
  </div>
  <div id="sideBar">
  <img src="images/squiglyArrow.jpg" alt="" width="182" height="172" /> <br />Notice the weird typewritten font here? Are you wondering how I used it without such a font being installed on your Computer? To learn about CSS3 @font-face tag, read <a href="AboutPage.php" class="aboutPage">About Page.</a></div>
  <!-- end #container -->
</div>
<div id="footer">
  <p>&copy; Copyright <?php echoCopyRightYear() ?> Sujay Narsale | All Rights Reserved </p>
  <!-- end #footer -->
</div>
</body>
</html>
