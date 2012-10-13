<?php

define("IGNORE_PATH", "sernlabs/public/");
define("CURRENT_DOMAIN", "localhost");
define("HOME_PAGE", "HomePage1.php");
define("COPYRIGHT_YEAR", "2012");
        
function echoHomePage(){
    echo HOME_PAGE;
}        
function echoCopyRightYear(){
    echo COPYRIGHT_YEAR;
}
function echoCurrentPageUrl(){
    echo $_SERVER['PHP_SELF'];
}
?>
