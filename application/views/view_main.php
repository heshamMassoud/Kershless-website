<?php
/**
 * Deprecated homepage.
 *
 * PHP version 5

 * @category  HTML
 * @package   Views
 * @author    Hesham Massoud <hesham.massoud@tum.de>
 * @copyright 2013-2016 Kershless
 * @license   http://git.io/vtE5Z GNU GENERAL PUBLIC LICENSE
 * @link      http://www.kershless.com
 */
    ?>


    <html xmlns="http://www.w3.org/1999/xhtml" xmlns:fb="http://ogp.me/ns/fb#">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <meta property="og:image"
        content="<?php echo base_url(); ?>Assets/Images/kershless_496x351.png" />
        <meta property="og:image:width" content="496" />
        <meta property="og:image:height" content="351" />
        <title>Welcome to Kershless</title>
        <link rel="shortcut icon"
        href="<?php echo base_url(); ?>Assets/Images/tab-logo.png">
        <style>
            div#social_media > a {
                -webkit-transition: opacity 0.4s ease-in-out;
            }
        </style>
        <link href="<?php echo base_url(); ?>Assets/Stylesheets/stylesheet.css"
        rel="stylesheet" type="text/css">
    </head>

    <body>
        <div id="floater"></div>
        <div id="container">

            <div id="center_logo">
                <img src="<?php echo base_url(); ?>Assets/Images/kershless-logo.png"
                height="391" width="677" style="width: 40%; height: auto">
            </div>

            <div id="kershless_tools">
                <img src="<?php echo base_url(); ?>Assets/Images/kershless-items.png"
                height="201" width="686" style="width: 40%; height: auto;">
            </div>

            <div id="register_now_ar"
            style="font-family: DINNextLTArabic-Light !important;
         text-decoration: none; color: white; font-size: xx-large;">
                عفواً ..... باب التسجيل مغلق
                حالياً، موعدنا ١ يوليو ٢٠١٥
                <br>
                <br>
            </div>


            <div id="social_media">
                <a id="fb"
                href="https://www.facebook.com/Kershless" target="_blank"><img
                src="<?php echo base_url(); ?>Assets/Icons/facebook.png"
                width="48" height="48"/></a>&nbsp;<a id="tw"
                href="http://www.twitter.com/kershless" target="_blank"><img
                src="<?php echo base_url(); ?>Assets/Icons/twitter.png" width="48"
                height="48"/></a>&nbsp;<a id="yt" onClick="return false"
                href="http://www.youtube.com/kershless" target="_blank">
                <img src="<?php echo base_url(); ?>Assets/Icons/youtube.png"
                width="48" height="48"/></a>
            </div>


        </div>
        <div id="footer"
        style="font-family: DINNextLTArabic-Light !important;">
        All Rights Reserved &copy; kershless.com <?php echo date("Y");?>
        </div>


        <body>

    </html>
