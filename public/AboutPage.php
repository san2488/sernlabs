<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<?php 
    require_once '../includes/config.php';
?>
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <title>About Page</title>
        <link href="stylesheets/aboutPage1.css" rel="stylesheet" type="text/css" />
        <link rel="icon" type="image/png" href="images/favicon.jpg"/>
        <script type="text/javascript" src="javascripts/jquery-1.7.1.js"></script>
        <script type="text/javascript" src="javascripts/site-extn.js"></script>
        <script type="text/javascript" src="javascripts/aboutPage.js"></script>
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
        <?php
        $doc = new DOMDocument();
        $xsl = new XSLTProcessor();

        $doc->load("../includes/aboutpage/aboutpage.xsl");
        $xsl->importStyleSheet($doc);

        $parentPageUrl = $page = $_GET["pg"];
        $prevPageUrl = isset($_GET["prevpg"]) && !empty($_GET["prevpg"]) ? $_GET["prevpg"] : "";
        $parentPageUrl = empty($prevPageUrl) ? $parentPageUrl : $prevPageUrl;
        $page = str_replace(IGNORE_PATH, "", $page);
        $page = explode(".", $page);
        $page = $page[0];
        $page = "../includes/aboutpage/" . $page . ".xml";
        $doc->load(strtolower($page));
        echo $xsl->transformToXML($doc);
        ?>
        <div id="pgHeader"><img src="images/AboutPage_Hdr_02.jpg" width="864" height="69" alt="About Page" />
            <div id="topNav">
                <ul>
                    <li class="topNavLink"><a href="<?php echoHomePage() ?>">Home</a></li>
                    <li class="topNavLink"><a href="<?php echo $parentPageUrl ?>">Back</a></li>
                    <li class="topNavLink"><a href="AboutPage.php?pg=<?php echoCurrentPageUrl() ?>&prevpg=<?php echo $parentPageUrl ?>">About Page</a></li>
                </ul>
            </div>
        </div>
    </body>
</html>
