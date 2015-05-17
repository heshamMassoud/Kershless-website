<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="description" content="">
  <meta name="author" content="">


  <title>Welcome to Kershless</title>

  <link rel="shortcut icon" href="<?php echo base_url(); ?>Assets/Images/tab-logo.png">

  <!-- Bootstrap Core CSS - Uses Bootswatch Flatly Theme: http://bootswatch.com/flatly/ -->
  <link href="<?php echo base_url(); ?>Assets/css/bootstrap.min.css" rel="stylesheet">

  <!-- Custom CSS -->
  <link href="<?php echo base_url(); ?>Assets/css/freelancer.css" rel="stylesheet">

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

<body id="page-top" class="index">

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
        <a class="navbar-brand" href="#page-top">Start Bootstrap</a>
      </div>

      <!-- Collect the nav links, forms, and other content for toggling -->
      <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
        <ul class="nav navbar-nav navbar-right">
          <li class="hidden">
            <a href="#page-top"></a>
          </li>
          <li class="page-scroll">
            <a href="#what">What is Kershless?</a>
          </li>
          <li class="page-scroll">
            <a href="#about">About</a>
          </li>
        </ul>
      </div>
      <!-- /.navbar-collapse -->
    </div>
    <!-- /.container-fluid -->
  </nav>


  <!-- What is Kershless? Section -->
  <section class="main" id="slider" style="padding:0px !important">
    <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
      <!-- Indicators -->
      <ol class="carousel-indicators">
        <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
        <li data-target="#carousel-example-generic" data-slide-to="1"></li>
      </ol>

      <!-- Wrapper for slides -->
      <div class="carousel-inner" role="listbox">
        <div class="item active">
          <img style="max-width:100%;height:auto" src="<?php echo base_url(); ?>Assets/Images/slider.jpg" />
          <div class="carousel-caption">
            First Picture
          </div>
        </div>
        <div class="item">
          <img style="max-width:100%;height:auto;" src="<?php echo base_url(); ?>Assets/Images/slider.jpg" />
          <div class="carousel-caption">
            <h1>
              Meet the team
            </h1>
            <button type="button" class="btn btn-primary" data-toggle="button" aria-pressed="false" autocomplete="off">
              Register Now
            </button>
          </div>
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
  </section>

  <!-- What is Kershless? Section -->
  <section class="main" id="what">
    <div class="container">
      <div class="row">
        <div class="col-lg-12 text-center">
          <h2>What is Kershless?</h2>
          <br>
        </div>
      </div>
      <div class="row">
        <div class="col-lg-4 col-lg-offset-2">
          <p>Freelancer is a free bootstrap theme created by Start Bootstrap. The download includes the complete source files including HTML, CSS, and JavaScript as well as optional LESS stylesheets for easy customization.</p>
        </div>
        <div class="col-lg-4">
          <p>Whether you're a student looking to showcase your work, a professional looking to attract clients, or a graphic artist looking to share your projects, this template is the perfect starting point!</p>
        </div>
      </div>
    </div>
  </section>

  <!-- About Section -->
  <section class="alternative" id="about">
    <div class="container">
      <div class="row">
        <div class="col-lg-12 text-center">
          <h2>About</h2>
          <br>
        </div>
      </div>
      <div class="row">
        <div class="col-lg-4 col-lg-offset-2">
          <p>Freelancer is a free bootstrap theme created by Start Bootstrap. The download includes the complete source files including HTML, CSS, and JavaScript as well as optional LESS stylesheets for easy customization.</p>
        </div>
        <div class="col-lg-4">
          <p>Whether you're a student looking to showcase your work, a professional looking to attract clients, or a graphic artist looking to share your projects, this template is the perfect starting point!</p>
        </div>
      </div>
    </div>
  </section>

  <!-- Footer -->
  <footer class="text-center">
    <div class="footer-above">
      <div class="container">
        <div class="row">
          <div class="footer-col col-md-4">
            <h3>Location</h3>
            <p>3481 Melrose Place
              <br>Beverly Hills, CA 90210</p>
          </div>
          <div class="footer-col col-md-4">
            <h3>Around the Web</h3>
            <ul class="list-inline">
              <li>
                <a href="#" class="btn-social btn-outline"><i class="fa fa-fw fa-facebook"></i></a>
              </li>
              <li>
                <a href="#" class="btn-social btn-outline"><i class="fa fa-fw fa-google-plus"></i></a>
              </li>
              <li>
                <a href="#" class="btn-social btn-outline"><i class="fa fa-fw fa-twitter"></i></a>
              </li>
              <li>
                <a href="#" class="btn-social btn-outline"><i class="fa fa-fw fa-linkedin"></i></a>
              </li>
              <li>
                <a href="#" class="btn-social btn-outline"><i class="fa fa-fw fa-dribbble"></i></a>
              </li>
            </ul>
          </div>
          <div class="footer-col col-md-4">
            <h3>About Freelancer</h3>
            <p>Freelance is a free to use, open source Bootstrap theme created by <a href="http://startbootstrap.com">Start Bootstrap</a>.</p>
          </div>
        </div>
      </div>
    </div>
    <div class="footer-below">
      <div class="container">
        <div class="row">
          <div class="col-lg-12">
            Copyright &copy; Your Website 2014
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

  <!-- Custom Theme JavaScript -->
  <script src="<?php echo base_url(); ?>Assets/js/freelancer.js"></script>

</body>

</html>
