<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<?php
    require_once '../includes/classes.php';
    require_once '../includes/config.php';
?>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>About Page</title>
<script type="text/javascript" src="javascripts/jquery-1.7.1.js"></script>
<link href="stylesheets/init3D.css" rel="stylesheet" type="text/css"/>
<link rel="icon" type="image/png" href="images/favicon.jpg"/>
<script type="text/javascript" src="javascripts/aboutPageLinker.js"></script>
<!--<script type="text/javascript" src="https://apis.google.com/js/plusone.js"></script>
<script type="text/javascript">

  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-29888014-1']);
  _gaq.push(['_trackPageview']);

  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();

</script>-->
<script type="text/javascript" src="javascripts/Three.js"></script>
<script type="text/javascript" src="javascripts/init3D.js"></script>
<!--<script type="text/javascript">$(get3D)</script>-->
<script type="text/javascript">
    $(function(){
       var WIDTH = 400, HEIGHT = 300;
       var renderer = getRenderer($('#header'), WIDTH, HEIGHT) ;

    // attach the render-supplied DOM element
    $('#header').append(renderer.domElement);
       var scene = new THREE.Scene();
       var light = getPointLight(0xFFFFFF, 10, 50, 130);
       var camera = getCamera(27, WIDTH/HEIGHT, 1, 2000, 280);
	camera.position.z = 280;
//	camera.position.y = 20;
//       camera.lookAt( scene.position );
       
       var object = getCubeMesh(0x524a55, .4, 1); //getLogo();// getSphere(20, 16, 16);
       object.add(getCubeMesh(0x524a55, 4, .2));
       object.add(getCubeMesh(0x524a55, 8, .2));
       object.add(getLogo());
//	object.position.y = -6; 
       
       scene.add(object);
//       scene.add(light);
       
       renderer.render(scene, camera);
    });
</script>
</head>
<body>
<div id="container">
<!--    <div id="topNav"><ul><li><a href="<?php echoHomePage() ?>">Home</a></li><li class="lastItem">
                <a href="AboutPage.php?pg=<?php echoCurrentPageUrl() ?>">About Page</a></li></ul></div>
    <div id="header"><a href="<?php echoHomePage() ?>">Sernlabs</a></div>-->
    <div id="leftPane">
    </div>
    <div id="rightPane">
        <div id="header"></div>
    </div>
</div>
<!--<div id="fb-root"></div>-->
<!--<script>(function(d, s, id) {
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
<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0];if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src="//platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script>-->
</body>
</html>
