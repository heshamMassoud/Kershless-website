<!-- //**local_to_global FOR all  paths remove '/Kershless'-->
<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!-->
<html class="no-js" lang="ar" xmlns="http://www.w3.org/1999/xhtml"
      xmlns:fb="http://ogp.me/ns/fb#">
<!--<![endif]-->
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">

<title>شكرا</title>
<link rel="shortcut icon" href="<?php echo base_url(); ?>Assets/Images/tab-logo.png">
<meta property="og:image" content="<?php echo base_url(); ?>Assets/Images/kershless_496x351.png"/>
<meta property="og:image:width" content="496"/>
<meta property="og:image:height" content="351"/>

<meta name="viewport" content="width=device-width">

<link rel="stylesheet" href="<?php echo base_url(); ?>Assets/css/bootstrap.min.css">
<link rel="stylesheet" href="<?php echo base_url(); ?>Assets/css/bootstrap-theme.min.css">
<!-- Bootstrap RTL -->
<link href="<?php echo base_url(); ?>Assets/css/bootstrap-rtl.css" rel="stylesheet">
<link rel="stylesheet" href="<?php echo base_url(); ?>Assets/css/style.css">
<link rel="stylesheet" href="<?php echo base_url(); ?>Assets/fonts/jf/font.css">
<link rel="stylesheet" href="<?php echo base_url(); ?>Assets/css/fonts.css">

<!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
    <![endif]-->

</head>
<body>
	<div class="container">
		<div class="row logo">
			<div class="col-md-4"></div>
			<div class="col-md-4">
			<a href="<?php echo base_url();?>"><img
				src="<?php echo base_url(); ?>Assets/Images/kershless_success.png" class="img-responsive"
				alt="Kershless"> </a>
			</div>
			<div class="col-md-4"></div>

		</div>
		<div class="row logo">
			<img  src="<?php echo base_url(); ?>Assets/Images/kersh_thumb.png" class="img-responsive thumbs-up"
				alt="Kershless">
		</div>
		<div class="row">
			<p class="col-md-4"></p>
			<p class="col-md-4 thanks-text">
				شكرا <?php
				echo $name; ?> على التسجيل معنا في كرشلس ، سوف يصلك إيميل خلال دقائق
					به كود التسجيل الخاص بك أرسله لأصدقائك لتكونوا معاً في نفس الموسم
			</p>
			<p class="col-md-4"></p>


		</div>

		<!-- 		<div class="row"> -->
		<!-- 			<div class="col-md-4"></div> -->
		<!--  			<div class="col-md-4" style="text-align: center;">-->
		<!-- 				<a id="fb" href="https://www.facebook.com/Kershless" target="_blank"> -->
		<!-- 					<img src="/Kershless/Assets/Icons/facebook.png" width="48" -->
		<!-- 					height="48" /> -->
		<!-- 				</a> &nbsp; <a id="tw" href="http://www.twitter.com/kershless" -->
		<!-- 					target="_blank"><img src="/Kershless/Assets/Icons/twitter.png" -->
		<!-- 					width="48" height="48" /> </a> &nbsp; <a id="yt" -->
		<!-- 					href="http://www.youtube.com/kershless" target="_blank"><img -->
		<!-- 					src="/Kershless/Assets/Icons/youtube.png" width="48" height="48" /> -->
		<!-- 				</a> &nbsp; -->
		<!-- 			</div> -->
		<!-- 			<div class="col-md-4"></div> -->
		<!-- 		</div> -->

		<footer>
			<p class="col-md-4"></p>
			<p class="col-md-4" style="text-align: center;">&copy; Kershless <?php echo date("Y");?></p>
			<p class="col-md-4"></p>
		</footer>
	</div>

	<script src="http://code.jquery.com/jquery-1.9.1.js"></script>
	<script src="<?php echo base_url(); ?>Assets/js/bootstrap.min.js"></script>
	<script src="<?php echo base_url(); ?>Assets/js/scripts.js"></script>
	<script src="<?php echo base_url(); ?>Assets/js/modernizr-2.6.2-respond-1.1.0.min.js"></script>
</body>
</html>
