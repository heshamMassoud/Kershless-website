<!DOCTYPE html>
<html lang="en" xmlns="http://www.w3.org/1999/xhtml"
      xmlns:fb="http://ogp.me/ns/fb#">

<head>

  <meta charset="utf-8">
  <meta property="og:image" content="<?php echo base_url(); ?>Assets/Images/kershless_496x351.png"/>
  <meta property="og:image:width" content="496"/>
  <meta property="og:image:height" content="351"/>
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="author" content="">


  <title>Welcome to Kershless</title>

  <link rel="shortcut icon" href="<?php echo base_url(); ?>Assets/Images/tab-logo.png">

  <!-- Bootstrap Core CSS - Uses Bootswatch Flatly Theme: http://bootswatch.com/flatly/ -->
  <link href="<?php echo base_url(); ?>Assets/css/bootstrap.min.css" rel="stylesheet">
  <!-- Bootstrap RTL -->
  <link href="<?php echo base_url(); ?>Assets/css/bootstrap-rtl.css" rel="stylesheet">
  <link href="<?php echo base_url(); ?>Assets/css/custom-bootstrap.css" rel="stylesheet">

  <!-- Custom CSS -->
  <link href="<?php echo base_url(); ?>Assets/css/freelancer.css" rel="stylesheet">
  <link rel="stylesheet" href="<?php echo base_url(); ?>Assets/css/contact-form.css">
  <link rel="stylesheet" href="<?php echo base_url(); ?>Assets/fonts/jf/font.css">
  <link rel="stylesheet" href="<?php echo base_url(); ?>Assets/css/fonts.css">


  <!-- Custom Fonts -->
  <link href="<?php echo base_url(); ?>font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
  <link href="http://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
  <link href="http://fonts.googleapis.com/css?family=Lato:400,700,400italic,700italic" rel="stylesheet" type="text/css">

  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>
<?php
$current_lang = $this->lang->lang();
if ($current_lang == 'en') {
    $other_lang = 'ar';
} else {
    $other_lang = 'en';
}
?>
<body id="page-top" class="index"
  style="
    <?php
    if ($current_lang == 'ar') {
        echo 'font-family: \'jf\' !important';
    } else {
        echo 'font-family: \'HelveticaNeue-Light\' !important';
    } ?>">
    <!-- Load Facebook SDK for JavaScript -->
      <div id="fb-root"></div>
      <script>(function(d, s, id) {
        var js, fjs = d.getElementsByTagName(s)[0];
        if (d.getElementById(id)) return;
        js = d.createElement(s); js.id = id;
        js.src = "//connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.6";
        fjs.parentNode.insertBefore(js, fjs);
      }(document, 'script', 'facebook-jssdk'));</script>

  <!-- Navigation -->
  <nav class="navbar navbar-default navbar-fixed-top">
    <div class="container">
      <!-- Brand and toggle get grouped for better mobile display -->
      <div class="navbar-header page-scroll">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
          <span class="sr-only">Toggle navigation</span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand" href="#page-top">
          <img class="img-responsive logo" src="<?php echo base_url(); ?>Assets/Images/kershless_logo.svg" width="170px" alt="">
        </a>

      </div>
      <!-- Collect the nav links, forms, and other content for toggling -->
      <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
        <ul class="nav navbar-nav navbar-left">
          <li class="hidden">
            <a href="#page-top"></a>
          </li>

          <li class="page-scroll">
            <a href="#what"><?php echo lang('what_is_kershless'); ?></a>
          </li>

          <li class="page-scroll">
            <a href="#contact"><?php echo lang('contact'); ?></a>
          </li>

          <!--<li class="page-scroll">
            <a href="<?php echo  base_url() . $this->lang->switch_uri($other_lang); ?>"><?php echo lang('switch_lang'); ?></a>
          </li>

          <li>
            <a href="#search"><i class="fa fa-search"></i></a>
          </li>
          <li>
            <img id="profile-img" style="margin-left:100px;" class="profile-img-card" src="https://scontent-fra.xx.fbcdn.net/hphotos-xpa1/v/t1.0-9/10394068_10155198980345634_7312502108895889947_n.jpg?oh=2ff3ce48dbe828095c9d97d82db3c73d&oe=55D18736" />
          </li>
          <li>
            <a href="#login">Tarek Massoud</a>
          </li>-->
        </ul>
      </div>
      <!-- /.navbar-collapse -->
    </div>
    <!-- /.container-fluid -->
  </nav>

  <!-- Slider Section -->
  <section class="main first" id="home">
    <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">

      <!-- Wrapper for slides -->
      <div class="carousel-inner" role="listbox">
        <div class="item active">
          <img src="<?php echo base_url(); ?>Assets/Images/slider_1.jpg" />
        </div>
        <div class="item">
          <img src="<?php echo base_url(); ?>Assets/Images/slider_2.jpg" />
        </div>
        <div class="item">
          <img src="<?php echo base_url(); ?>Assets/Images/slider_3.jpg" />
        </div>
        <div class="item">
          <img src="<?php echo base_url(); ?>Assets/Images/slider_4.jpg" />
        </div>
        <div class="item">
          <img src="<?php echo base_url(); ?>Assets/Images/slider_5.jpg" />
        </div>
        <div class="item">
          <img src="<?php echo base_url(); ?>Assets/Images/slider_6.jpg" />
        </div>
        <div class="item">
          <img src="<?php echo base_url(); ?>Assets/Images/slider_7.jpg" />
        </div>
        <div class="item">
          <img src="<?php echo base_url(); ?>Assets/Images/slider_8.jpg" />
        </div>
      </div>

      <!-- Controls -->
      <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
        <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
      </a>
      <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
        <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
      </a>
    </div>
    <br>
    <br>
    <div class="row">
      <div class="text-center register-row">
        <a role="button" class="btn btn-default register-now" href="register">
            <?php echo lang('register_now'); ?>
        </a>
      </div>
    </div>
  </section>

  <section class="main" id="video">
    <div class="container">
      <div class="row">
          <div class="text-center register-row">
              <!-- Your embedded video player code -->
              <div class="fb-video" data-href="https://www.facebook.com/Kershless/videos/1034411593280770/" data-width="500" data-show-text="false">
              </div>
               </div>
  </section>



  <!-- What is Kershless? Section -->
  <section class="main" id="what">
    <div class="container">
      <div class="row">
        <div class="col-lg-12 text-center">
          <h3><?php echo lang('what_is_kershless'); ?></h3>
          <br>
        </div>
      </div>
      <div class="row">
        <div class="col-lg-2"></div>
        <div class="col-lg-8">
          <p><?php echo lang('what_is_kershless_1'); ?></p>
          <p><?php echo lang('what_is_kershless_2'); ?></p>
          <p><?php echo lang('what_is_kershless_3'); ?></p>
          <p><?php echo lang('what_is_kershless_4'); ?></p>
          <p><?php echo lang('what_is_kershless_5'); ?></p>
          <div class="col-lg-2"></div>
        </div>
      </div>
  </section>

    <?php
    $name = array(
      'name' => 'name',
      'id' => 'name',
      'class' => 'form-control',
      'value' => set_value('name'),
      'placeholder' => 'الاسم *',
      'required' => 'required',
      'data-validation-required-message' => "من فضلك أدخل الاسم  "
    );
    $email = array(
      'name' => 'email',
      'id' => 'email',
      'class' => 'form-control',
      'type' => 'email',
      'value' => set_value('dial_code'),
      'placeholder' => 'البريد الإلكتروني *',
      'required' => 'required',
      'data-validation-required-message' => "من فضلك أدخل البريد الإلكتروني   "
    );
    $message = array(
      'name' => 'message',
      'title' => 'message',
      'id' => 'message',
      'value' => set_value('message'),
      'placeholder' => 'كيف نساعدك *',
      'required' => 'required',
      'data-validation-required-message' => "من فضلك أدخل الرسالة "
    );
    $send_message = array(
      'name' => 'send',
      'class' => 'btn btn-default send-message',
      'id' => 'form_submitter',
      'value' => 'ارسل'
    );
    ?>

  <!-- Contact Section -->
  <form name="sendMessage" acttion="main/contact" id="contactForm" method="post" accept-charset="utf-8" enctype="multipart/form-data" novalidate>
  <section id="contact">
      <div class="container">
          <div class="row">
            <div class="col-lg-12 text-center">
              <h3><?php echo lang('contact'); ?></h3>
              <br>
            </div>
          </div>
          <div class="row">
              <div class="col-md-2"></div>
              <div class="col-md-8">
                  <div class="col-md-12">
                    <div id="success"></div>
                      <div class="row">
                        <div class="form-group name col-md-6 control-group">
                            <?php echo form_input($name); ?>
                            <p class="help-block text-danger"></p>
                        </div>
                        <div class="form-group email col-md-6 control-group">
                            <?php echo form_input($email); ?>
                            <p class="help-block text-danger"></p>
                        </div>
                      </div>
                      <div class="row control-group">
                        <div class="form-group message col-md-12">
                            <?php echo form_textarea($message); ?>
                            <p class="help-block text-danger"></p>
                        </div>
                      </div>
                      <div class="row">
                        <div class="col-md-12">
                            <?php
                              echo form_submit($send_message);
                                ?>
                        </div>
                      </div>
                  </div>
              </div>
              <div class="col-md-2"></div>
          </div>
      </div>
  </section>
</form>

  <!-- Footer -->
  <footer>
    <div class="footer-above">
      <div class="container">
        <div class="row">
          <div class="footer-col col-md-4"></div>
          <div class="footer-col col-md-4">
            <div class="row">
                <a href="https://www.facebook.com/Kershless" target="_blank" class="btn-social btn-outline"><i class="fa fa-fw fa-facebook"></i></a>&nbsp;
                <a href="https://instagram.com/kershless" target="_blank" class="btn-social btn-outline"><i class="fa fa-fw fa-instagram"></i></a>&nbsp;
                <a href="https://twitter.com/kershless" target="_blank" class="btn-social btn-outline"><i class="fa fa-fw fa-twitter"></i></a>
            </div>
          </div>
          <div class="footer-col col-md-4"></div>
        </div>
        <div class="row">
          <div class="footer-col col-md-4"></div>
          <div class="footer-col col-md-4 copy-right">
              Copyright &copy; Kershless <?php echo date("Y");?>
          </div>
          <div class="footer-col col-md-4"></div>
        </div>
        </div>
      </div>
    </div>
  </footer>

  <!-- Scroll to Top Button (Only visible on small and extra-small screen sizes) -->
  <div class="scroll-top page-scroll visible-xs visible-sm">
    <a class="btn btn-primary" href="#page-top">
      <i class="fa fa-chevron-up"></i>
    </a>
  </div>



  <!-- jQuery -->
  <script src="<?php echo base_url(); ?>Assets/js/jquery.js"></script>

  <!-- Bootstrap Core JavaScript -->
  <script src="<?php echo base_url(); ?>Assets/js/bootstrap.min.js"></script>

  <!-- Plugin JavaScript -->
  <script src="http://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js"></script>
  <script src="<?php echo base_url(); ?>Assets/js/classie.js"></script>
  <script src="<?php echo base_url(); ?>Assets/js/cbpAnimatedHeader.js"></script>

  <!-- Contact Form JavaScript -->
  <script src="<?php echo base_url(); ?>Assets/js/jqBootstrapValidation.js"></script>
  <script src="<?php echo base_url(); ?>Assets/js/contact_me.js"></script>

  <!-- Custom Theme JavaScript -->
  <script src="<?php echo base_url(); ?>Assets/js/freelancer.js"></script>

</body>

</html>
