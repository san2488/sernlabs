<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<?php
    require_once "../includes/config.php";
?>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>About Me</title>
<link href="stylesheets/aboutMe1.css" rel="stylesheet" type="text/css" />
<script type="text/javascript" src="javascripts/jquery-1.7.1.js"></script>
<script type="text/javascript" src="javascripts/aboutMe1.js"></script>
<script type="text/javascript" src="javascripts/aboutPageLinker.js"></script>
<?php 
    include "../includes/commonImports.php";
?>
</head>
<body>
<noscript>
You gotta get JS!
</noscript>
<div id="mainContent">
    <div id="sx20"><img src="images/AboutMe1/PowerShot-SX20-IS_4.png" id="camera" alt="SX20"/>
        <img src="images/AboutMe1/sx20_off.png" alt="SX20 Off Switch" id="switch"/><div id="galleryButton"></div></div>
    <div id="x10"><img src="images/AboutMe1/SE-Mini.png" alt="SE Experia X10 Mini Pro"/></div>
    <div id="iEarPhones"><img src="images/AboutMe1/ipod-plugs.png" alt="iPod Earphones"/></div>
    <div id="spikeGuard"><img src="images/AboutMe1/SpikeGuard.png" alt="Spike Suppressor"/></div>
    <div id="naughtyMouse"><img src="images/AboutMe1/naughymouse_off.png" alt="Mouse"/></div>
    <div id="dummiesBook"><img src="images/AboutMe1/dummiesBook.png" alt="Design Patterns for Dummies"/></div>
    <div id="coffeeStain"><img src="images/AboutMe1/coffeeRing.png" alt="Coffee Stain"/></div>
  <div id="ipodHolder">
    <div id="ipodHome"><a href="<?php echoHomePage() ?>"></a></div>
    <div class="ui-mobile-viewport" id="ipodViewport"><span class="ipodStatusBar">
            <span class="divLeft" style="text-indent: 30px"><a href="AboutPage.php?pg=<?php echoCurrentPageUrl() ?>" 
                   style="color:#000; text-decoration: none;">About</a></span>
            <span id="clock" class="divCenter" style="text-align: center">Time</span>
            <span class="divRight">&nbsp;</span>
      <div id="ipodContent">
        <div class="ipodPane"><span style="background-color:#10F" class="ipodSlideWindow">
          <div>
            <div class="ipodHeader ipodHdrBlue">Info</div>
            <div style="padding:5px;">
              <table class="ipodIntro">
                <tr>
                  <td><img src="images/AboutMe1/kites.jpg" class="ipodBoxImage"  alt="This is me" /></td>
                  <td>Sujay Narsale</td>
                </tr>
              </table>
              <table class="ipodForm" cellspacing="0">
                <tr>
                  <td>email</td>
                  <td>sujay.narsale@gmail.com</td>
                </tr>
                <tr>
                  <td>city</td>
                  <td>Mumbai, India</td>
                </tr>
                <tr>
                  <td class="ipodLabel">education</td>
                  <td>Computer Engineer</td>
                </tr>
              </table>
              <table class="ipodForm" cellspacing="0">
                <tr>
                  <td class="ipodLabel">work</td>
                  <td>Assistant Systems Engineer</td>
                </tr>
                <tr>
                  <td class="ipodLabel">company</td>
                  <td>Tata Consultancy Services</td>
                </tr>
              </table>
              <table class="ipodForm" cellspacing="0">
                <tr>
                  <td class="ipodLabel">hobbies</td>
                  <td>Reading, Trekking, Travelling, Photography</td>
                </tr>
              </table>
            </div>
          </div>
          </span>
          <h3 class="ipodNavButton viewing"><a href="#"><span>Info</span><img src="images/AboutMe1/ipodTabIcon_info.png" width="83" height="115" /></a></h3>
        </div>
        <div class="ipodPane"><span style="background-color:#CFC" class="ipodSlideWindow">
          <div>
            <div class="ipodHeader ipodHdrBlue">Contact</div>
            <div style="padding:5px;">
              <table class="ipodIntro">
                <tr>
                  <td><img src="images/AboutMe1/Mail.png" class="ipodBoxImage" alt="email" /></td>
                  <td>Catch me here</td>
                </tr>
              </table>
              <table class="ipodForm" cellspacing="0">
                <tr>
                  <td><img src="images/AboutMe1/twitter_ios_icon.png" width="20" height="20" alt="twitter" /></td>
                  <td><a href="https://twitter.com/#!/sernlabs" target="_blank">@sernlabs</a></td>
                </tr>
                <tr>
                  <td><img src="images/AboutMe1/Icon-Gmail.png" width="20" height="20" alt="gmail" /></td>
                  <td><a href="mailto:sujay.narsale@gmail.com" target="_blank">sujay.narsale@gmail.com</a></td>
                </tr>
              </table>
              <table class="ipodForm" cellspacing="0">
                <tr>
                <tr>
                  <td><img src="images/AboutMe1/linkedin_icon.png" width="20" height="20" alt="linked in" /></td>
                  <td><a href="http://www.linkedin.com/in/sujaynarsale" target="_blank">sujaynarsale</a></td>
                </tr>
                <tr>
                  <td><img src="images/AboutMe1/google_plus_ios_icon.jpg" width="20" height="20" alt="google plus" /></td>
                  <td><a href="https://plus.google.com/108115545564175216526" target="_blank">+sujay</a></td>
                </tr>
                <tr>
                <td><img src="images/AboutMe1/orkut-icon.png" width="20" height="20" alt="orkut" /></td>
                  <td><a href="http://www.orkut.co.in/Main#Profile?rl=mp&uid=14161494046136599902" target="_blank">sujay</a></td>
                </tr>
              </table>
            </div>
          </div>
          </span>
          <h3 class="ipodNavButton"><a href="#"><span>Contact</span><img src="images/AboutMe1/ipodTabIcon_contact.png" width="83" height="115" /></a></h3>
        </div>
        <div class="ipodPane"><span style="background-color:#C01" class="ipodSlideWindow">
          <div>
            <div class="ipodHeader ipodHdrBlue">Skills</div>
            <div style="padding:5px;">
              <table class="ipodIntro">
                <tr>
                  <td><img src="images/AboutMe1/ibooks_icon_yiset.png" class="ipodBoxImage" alt="expert" /></td>
                  <td>Worked With</td>
                </tr>
              </table>
              <table class="ipodForm" cellspacing="0">
                <tr>
                  <td>Tech</td>
                  <td>HTML, CSS, Javascript, Java, JAVA OpenGL, .Net Framework, SQL, LINQ</td>
                </tr>
                <tr>
                  <td>Tools</td>
                  <td>Adobe Dreamweaver, Adobe Photoshop, Adobe Flash, Microsoft Visual Studio, NetBeans</td>
                </tr>
              </table>
              <table class="ipodForm" cellspacing="0">
                <tr>
                  <td class="ipodLabel">certified</td>
                  <td>Microsoft Application Development Foundation, TCS-Internal Green-belt</td>
                </tr>
              </table>
              <table class="ipodForm" cellspacing="0">
                <tr>
                  <td class="ipodLabel">learning</td>
                  <td>HTML5 + CSS3, Microsoft MVC 3.0, WCF, Silverlight 4.0, jQuery, Raphael Charts</td>
                </tr>
              </table>
            </div>
          </div>
          </span>
          <h3><a href="#"><span>Skills</span><img src="images/AboutMe1/ipodTabIcon_skills.png" width="83" height="115" /></a></h3>
        </div>

        <div class="ipodPane"><span style="background-color:#C0F" class="ipodSlideWindow">
          <div>
            <div class="ipodHeader ipodHdrBlue">Misc</div>
            <div style="padding:5px;">
              <table class="ipodIntro">
                <tr>
                    <td><img src="images/AboutMe1/reminders_icon.png" class="ipodBoxImage" alt="expert" /></td>
                  <td>In a few words</td>
                </tr>
              </table>
              <table class="ipodForm" cellspacing="0">
                <tr>
                  <td style="width:0%;"></td>
                  <td style="text-transform:none; text-align:justify;">I am currently working at TCS under a project for Genworth Wealth Management. This developer profile involves work in the latest MS technologies. Very exciting stuff!<br />
                    <br />
                    SernLabs is just for TP so that I can stay in touch with CSS, JS and Photoshop. It also provides good motivation to try out new things.<br />
                    <br />
                    I read somewhere that its good to have your mug pasted on your site....so here goes.</td>
                </tr>
              </table>
              <table class="ipodForm" cellspacing="0">
                <tr class="ipodLink" id="mugShot">
                  <td class="ipodLabel"><img src="images/AboutMe1/more_realistic_icons.jpg" width="20" height="20" alt="photo" /></td>
                  <td>My Mugshot</td>
                </tr>
                <tr class="ipodLink aboutPage" href="AboutPage.php">
                  <td class="ipodLabel"><img src="images/AboutMe1/iossettings.png" width="20" height="20" alt="settings" /></td>
                  <td>About Page</td>
                </tr>
              </table>
            </div>
          </div>
          </span>
          <h3 class="ipodNavButton"><a href="#"><span>Misc</span><img src="images/AboutMe1/ipodTabIcon_misc.png" width="83" height="115" /></a></h3>
        </div>
        <div class="ipodPane" style="width:0%;"><span style="background:#000;" class="ipodSlideWindow" id="mugShotWindow">
          <div>
            <div class="ipodHeader ipodHdrBlack"><span class="ipodHdrBtn ipodHeaderLftBack btnBack">Back</span><span class="ipodHeaderTxt">Me</span><span class="ipodHdrBtn" style="float:right;"></span></div>
            <div style="overflow:hidden; top: 0px; position: absolute">
            <img src="images/AboutMe1/mugshot.jpg" width="332" height="446" /></div>
          </div>
          </span>
<!--          <h3><a href="#"><span>Skills</span><img src="images/AboutMe1/ipodTabIcon_skills.png" width="83" height="115" /></a></h3>-->
        </div>
      </div>
    </div>
  </div>
</div>
</body>
</html>
