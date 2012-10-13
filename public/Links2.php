<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<?php
    require_once '../includes/classes.php';
    require_once '../includes/config.php';
?>

<?php
    $pages = array();
    $pageList = simplexml_load_file('../includes/pageList.xml');

    $pageNames = $pageList->page;

    foreach($pageNames as $pageName){
        $pageUrl = "../includes/aboutpage/" . trim($pageName->AboutXml);
        $pages[] = new Page($pageUrl);
    }
?>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>About Page</title>
<script type="text/javascript" src="javascripts/jquery-1.7.1.js"></script>
<link href="stylesheets/links2.css" rel="stylesheet" type="text/css"/>
<link rel="icon" type="image/png" href="images/favicon.jpg"/>
<script type="text/javascript" src="javascripts/aboutPageLinker.js"></script>
<script type="text/javascript" src="https://apis.google.com/js/plusone.js"></script>
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
    <div id="topNav"><ul><li><a href="<?php echoHomePage() ?>">Home</a></li><li class="lastItem">
                <a href="AboutPage.php?pg=<?php echoCurrentPageUrl() ?>">About Page</a></li></ul></div>
    <div id="header"><a href="<?php echoHomePage() ?>">Sernlabs</a></div>
    <br />
    <div id="content">
        <?php
        $index = 1;
            foreach($pages as $page) {
                $pageUrl = "http://" . CURRENT_DOMAIN . "/" . IGNORE_PATH . $page->get_Link();
                $aboutPageParam = IGNORE_PATH . $page->get_Link();
                echo "<div class='pageInfo'>";
                    echo "<div class='pageIndex'>" . $index . "</div>";
                    echo "<div class='pageDetails'>";
                        echo "<div class='socialIntegration'>";
                            echo '<span><div class="fb-like" data-href="'.$pageUrl.'" data-send="false" data-layout="button_count" data-width="55" data-show-faces="false" data-font="segoe ui"></div></span>';
                            echo '<span><g:plusone href="'.$pageUrl.'" size="medium" annotation="bubble"></g:plusone></span>';
                            echo '<span><a href="https://twitter.com/share" class="twitter-share-button" data-url="'.$pageUrl.'" data-related="san_2488" data-hashtags="sernlabs">Tweet</a></span>';
                        echo "</div>";
                        echo "<div class='pageTitle'><a href='" . $pageUrl . "'>" . $page->get_Title() . "</a>"
                                . " <span class='aboutLink'>(<a href='AboutPage.php?pg=" . $aboutPageParam . "'>About</a>)</span></div>";
                        echo "<div class='pageLink'><a href='" . $pageUrl . "'>". $pageUrl ."</a></div>";
                    echo "</div>";
                    echo "<div class='clearboth'></div>";
//                    echo "<br />";
                echo "</div>";
                $index++;
            }
        ?>
    </div>
</div>
<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/en_US/all.js#xfbml=1";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>
<script type="text/javascript">
  window.___gcfg = {
    lang: 'en-US'
  };

  (function() {
    var po = document.createElement('script'); po.type = 'text/javascript'; po.async = true;
    po.src = 'https://apis.google.com/js/plusone.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(po, s);
  })();
</script>
<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0];if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src="//platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script>
</body>
</html>
