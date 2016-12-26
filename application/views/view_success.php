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
		<div class="row thanks-text">
			<p class="col-md-2"></p>
			<p class="col-md-8">
                <?php echo $this->lang->line('thanks_word') . $name . $this->lang->line('thanks_message');?>
            </p>
			<p class="col-md-2"></p>
		</div>
        <div class="row thanks-text">
            <p class="col-md-2"></p>
            <p class="col-md-8" style="color: #d43f3a">
                <?php echo $this->lang->line('important_notice');?>
            </p>
            <p class="col-md-2"></p>
        </div>
        <div class="row thanks-text">
            <p class="col-md-2"></p>
            <p class="col-md-8">
            <?php echo $this->lang->line('success_message');?>
            <br><br>
            <?php echo $this->lang->line('kershless_admin');?>
            </p>
            <p class="col-md-2"></p>
        </div>

		<footer>
			<p class="col-md-4"></p>
			<p class="col-md-4" style="text-align: center;">&copy; Kershless <?php echo date("Y");?></p>
			<p class="col-md-4"></p>
		</footer>
	</div>

	<script src="http://code.jquery.com/jquery-1.9.1.js"></script>
	<script src="<?php echo base_url(); ?>Assets/js/bootstrap.min.js"></script>
	<script src="<?php echo base_url(); ?>Assets/js/scripts.js"></script>
	<script src="<?php echo base_url(); ?>
    Assets/js/modernizr-2.6.2-respond-1.1.0.min.js"></script>
</body>
</html>
