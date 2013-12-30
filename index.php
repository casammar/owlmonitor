<?php include 'views/baseurl.php'; ?>
<!DOCTYPE html>
<!--[if IE 8]>			<html class="ie ie8"> <![endif]-->
<!--[if IE 9]>			<html class="ie ie9"> <![endif]-->
<!--[if gt IE 9]><!-->	<html> <!--<![endif]-->
   <head>
      <meta charset="utf-8">
      <title>ExamHawk</title>
      <meta name="description" content="ExamHawk application">
      <meta name="author" content="ExamHawk development team">
      <!-- Mobile Metas -->
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <!-- Google Fonts -->
      <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700,800' rel='stylesheet' type='text/css'>
      <link href='http://fonts.googleapis.com/css?family=Oswald:400,300,700' rel='stylesheet' type='text/css'>
      <link href='http://fonts.googleapis.com/css?family=Chango' rel='stylesheet' type='text/css'>
      <link href='http://fonts.googleapis.com/css?family=Roboto:400,500,700' rel='stylesheet' type='text/css'>
      <!-- Library CSS -->
      <link rel="stylesheet" href="<?php echo BASE_URL; ?>/css/bootstrap.css">
      <link rel="stylesheet" href="<?php echo BASE_URL; ?>/css/fonts/font-awesome/css/font-awesome.css">
      <link rel="stylesheet" href="<?php echo BASE_URL; ?>/css/animations.css" media="screen">
      <link rel="stylesheet" href="<?php echo BASE_URL; ?>/css/superfish.css" media="screen">
      <link rel="stylesheet" href="<?php echo BASE_URL; ?>/css/revolution-slider/css/settings.css" media="screen">
      <link rel="stylesheet" href="<?php echo BASE_URL; ?>/css/prettyPhoto.css" media="screen">
      <!-- Theme CSS -->
      <link rel="stylesheet" href="<?php echo BASE_URL; ?>/css/style.css">
      <!-- Skin -->
      <link rel="stylesheet" href="<?php echo BASE_URL; ?>/css/colors/blue.css">
      <link rel="stylesheet" href="<?php echo BASE_URL; ?>/css/institutions.css">
      <!-- Responsive CSS -->
      <link rel="stylesheet" href="<?php echo BASE_URL; ?>/css/theme-responsive.css">
      <!-- Switcher CSS -->
      <link rel="stylesheet" href="<?php echo BASE_URL; ?>/css/switcher.css">
      <link rel="stylesheet" href="<?php echo BASE_URL; ?>/css/spectrum.css">
      <link rel="stylesheet" href="<?php echo BASE_URL; ?>/css/slider.css">
      <!-- Favicons -->
      <link rel="shortcut icon" href="<?php echo BASE_URL; ?>/img/ico/favicon.ico" type="image/x-icon">
      <link rel="icon" href="<?php echo BASE_URL; ?>/img/ico/favicon.ico" type="image/x-icon">
      <link rel="apple-touch-icon" href="<?php echo BASE_URL; ?>/img/ico/apple-touch-icon.png">
      <link rel="apple-touch-icon" sizes="57x57" href="<?php echo BASE_URL; ?>/img/ico/apple-touch-icon-57x57.png" />
      <link rel="apple-touch-icon" sizes="60x60" href="<?php echo BASE_URL; ?>/img/ico/apple-touch-icon-60x60.png" />
      <link rel="apple-touch-icon" sizes="72x72" href="<?php echo BASE_URL; ?>/img/ico/apple-touch-icon-72.png">
      <link rel="apple-touch-icon" sizes="76x76" href="<?php echo BASE_URL; ?>/img/ico/apple-touch-icon-76x76.png" />
      <link rel="apple-touch-icon" sizes="114x114" href="<?php echo BASE_URL; ?>/img/ico/apple-touch-icon-114.png">
      <link rel="apple-touch-icon" sizes="120x120" href="<?php echo BASE_URL; ?>/img/ico/apple-touch-icon-120x120.png" />
      <link rel="apple-touch-icon" sizes="144x144" href="<?php echo BASE_URL; ?>/img/ico/apple-touch-icon-144.png">
      <link rel="apple-touch-icon" sizes="152x152" href="<?php echo BASE_URL; ?>/img/ico/apple-touch-icon-152x152.png" />
      <!-- The HTML5 shim, for IE6-8 support of HTML5 elements -->
      <!--[if lt IE 9]>
      <script src="//html5shim.googlecode.com/svn/trunk/html5.js"></script>
      <script src="js/respond.min.js"></script>
      <![endif]-->
      <!--[if IE]>
      <link rel="stylesheet" href="css/ie.css">
      <![endif]-->
   </head>
   <body >

       <div class="background-banner">

         <!-- Header Start -->

         <!-- Header End -->
	 <!-- mobile CTA's start -->
<!--	    <div class="container">
		<div class="row">
		   <div class="mobile-content" style="display:none;">
		      <div class="col-lg-12 col-md-12 col-sm-12">
			<a class="btn btn-primary btn-lg btn-block" href="#online-proctoring">Online Proctoring</a>
			<a class="btn btn-primary btn-lg btn-block" href="#all-features">ExamHawk Features</a>
			<a class="btn btn-primary btn-lg btn-block" href="#contact-form">Free Consultation</a>
		      </div>
		      <div class="clearfix"></div>
		   </div>
		</div>
            </div>-->
	 <!-- mobile CTA's end -->
         <!-- Content Start -->

	    <!-- background image row start -->
        <div class="container">
	    <div class="row">

                  <!-- TopNav Start -->
                  <div class="topnav navbar-header">
                     <a class="navbar-toggle down-button" data-toggle="collapse" data-target=".slidedown">
                     <i class="icon-angle-down icon-current"></i>
                     </a>
                  </div>
                  <!-- TopNav End -->
                  <!-- Logo Start -->
                  <div class="logo pull-left">
		      <a href="<?php echo BASE_URL; ?>/index.html">
			  <img src="<?php echo BASE_URL; ?>/img/005-examhawk-logo.png" alt="ExamHawk">
		      </a>
                  </div>
		  <!-- Logo End -->
                  <!-- Mobile Menu Start -->
                  <div class="mobile navbar-header">
                     <a class="navbar-toggle" data-toggle="collapse" href=".navbar-collapse">
                     <i class="icon-reorder icon-2x"></i>
                     </a>
                  </div>
                  <!-- Mobile Menu End -->
                  <!-- Menu Start -->
                  <nav class="collapse navbar-collapse menu">
                     <ul class="nav navbar-nav sf-menu">
                        <li>
                           <a href="<?php echo BASE_URL; ?>/institutions" class="">Institutions</a>
                        </li>
                        <li>
                           <a href="<?php echo BASE_URL; ?>/test-takers" class="">Test Takers</a>
                        </li>
                        <li>
                           <a href="<?php echo BASE_URL; ?>/about" class="">About</a>
                        </li>
                        <li>
                           <a href="<?php echo BASE_URL; ?>/institutions/live-demo.php" class="demo-link">Live Demo</a>
                        </li>
                    </ul>
                 </nav>
                 <!-- Menu End -->
               </div>
		<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12" style="margin-top:100px;">
			<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 bottom-pad">
			    <img src="img/sandbox/lg-owl.png" style="width:200px;height:250px;" class="pull-left"/>
			    <h3 id="background-title">Live & Recorded</h3>
			    <h3 id="background-subtitle">Online Exam Monitoring</h3>
			</div>
			<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 bottom-pad">
			    <p style="text-align:justify;">ExamHawk is a new online exam monitoring service that allows learners to take exams in a secure online environment. The platform is a simple and cost effective way to prevent cheating and maintain exam integrity. </p>
			</div>

			<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
			    <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 text-center">
				<a class="btn btn-special btn-lg btn-color product-tour" >Learn More</a>
			    </div>
			    <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 text-center">
				<a class="btn btn-special btn-lg btn-warning" href="institutions/live-demo.php" >Live Demo</a>
			    </div>
			</div>
		    </div>
	    </div>
	    <!-- background image row end -->

       </div>

        <div class="content" style="background: url('img/cream_dust.png') repeat;">
		<div class="container">
		  <div class="divider"></div>
		  <div class="row features-row">
                     <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
                        <div class="content-box big ch-item bottom-pad-small">
                           <div class="ch-info-wrap">
                              <div class="ch-info">
                                 <div class="ch-info-front ch-img-1" id="recorded"><i class="icon-eye-open" style="left:17%;"></i></div>
                                 <div class="ch-info-back">
                                    <i class="icon-eye-open"></i>
                                 </div>
                              </div>
                           </div>
                           <div class="content-box-info">
                              <h3>Recorded</h3>
                              <p>
                                 Our application records the user’s webcam feed, audio feed and screen throughout the entire test.
			      </p>
                           </div>
                        </div>
                     </div>
                     <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
                        <div class="content-box big ch-item bottom-pad-small">
                           <div class="ch-info-wrap">
                              <div class="ch-info">
                                 <div class="ch-info-front ch-img-1"><i class="icon-user" style="left:24%;"></i></div>
                                 <div class="ch-info-back">
                                    <i class="icon-user"></i>
                                 </div>
                              </div>
                           </div>
                           <div class="content-box-info">
                              <h3>Monitored</h3>
                              <p>
                                 Throughout a test, a live monitor watches in real-time to provide customer service and to prevent cheating.
			      </p>
                           </div>
                        </div>
                     </div>
                     <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
                        <div class="content-box big ch-item">
                           <div class="ch-info-wrap">
                              <div class="ch-info">
                                 <div class="ch-info-front ch-img-1"><i class="icon-laptop" style="left:14%;"></i></div>
                                 <div class="ch-info-back">
                                    <i class="icon-laptop"></i>
                                 </div>
                              </div>
                           </div>
                           <div class="content-box-info">
                              <h3>Simple</h3>
                              <p>
                                 All of our processes are designed to be easy to understand, minimizing the need for technical support.
			      </p>
                           </div>
                        </div>
                     </div>
		      <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
                        <div class="content-box big ch-item">
                           <div class="ch-info-wrap">
                              <div class="ch-info">
                                 <div class="ch-info-front ch-img-1"><i class="icon-lock" style="left:29%;"></i></div>
                                 <div class="ch-info-back">
                                    <i class="icon-lock"></i>
                                 </div>
                              </div>
                           </div>
                           <div class="content-box-info">
                              <h3>Secured</h3>
                              <p>
                                 Our live monitors can relay information about infractions in real-time to instructors, while our application tracks facial movement and audio spikes.
			      </p>
                           </div>
                        </div>
                     </div>
                  </div>
		    <div class="divider"></div>
		    <div class="row" id="product_tour">
			<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 web css wp item">
			    <h3 class="title">See ExamHawk in Action</h3>
			</div>
			<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 bottom-pad web css wp item">
			    <div class="portfolio-item">
				<a href="http://vimeo.com/69468445" class="portfolio-item-link" data-rel="prettyPhoto" >
				<span class="portfolio-item-hover"></span>
				<span class="fullscreen"><i class="icon-expand"></i></span>
				<img src="img/blog/blog-post1.jpg"   alt="Demo Video"/>
				</a>
				<div class="clearfix"></div>
			     </div>
			</div>
		    </div>
		</div>
	    </div>

         <!-- Content End -->
         <!-- Footer Start -->
         <footer id="footer">
            <!-- Footer Top Start -->
            <div class="footer-top">
               <div class="container contact-us">
                  <div class="row">
                    <section class="col-lg-3 col-md-3 col-xs-12 col-sm-3 footer-one">
                        <h3>Institutions</h3>
                    <ul>
                        <li><a href="<?php echo BASE_URL; ?>/institutions">Pricing</a></li>
                        <li><a href="<?php echo BASE_URL; ?>/about/faq.php#institution-faq">Institution FAQs</a></li>
                        <li><a href="<?php echo BASE_URL; ?>/institutions/live-demo.php">Live Demo</a></li>
                    </ul>
                    </section>
                    <section class="col-lg-3 col-md-3 col-xs-12 col-sm-3 footer-two">
                        <h3>Test Takers</h3>
                    <ul>
                        <li><a href="<?php echo BASE_URL; ?>/test-takers">How it Works</a></li>
                        <li><a href="<?php echo BASE_URL; ?>/about/faq.php#test-takers-faq">Test Taker FAQs</a></li>
                        <li><a href="<?php echo BASE_URL; ?>/test-takers">Download</a></li>
                    </ul>
                    </section>

                     <section class="col-lg-3 col-md-3 col-xs-12 col-sm-3 footer-three">
                        <h3>About</h3>
                    <ul>
                        <li><a href="<?php echo BASE_URL; ?>/about/mission.php">Mission / Vision</a></li>
                        <li><a href="<?php echo BASE_URL; ?>/about/team.php">Team</a></li>
                        <li><a href="<?php echo BASE_URL; ?>/about/contact.php">Contact</a></li>
                        <li><a href="<?php echo BASE_URL; ?>/about/conferences.php">Conferences</a></li>
                        <li><a href="<?php echo BASE_URL; ?>/about/blog.php">Blog</a></li>
                    </ul>
                    </section>
                     <section class="col-lg-3 col-md-3 col-xs-12 col-sm-3 footer-three">
                        <h3>Contact Us</h3>
                        <ul >
                           <li>
                              <i class="icon-map-marker"></i>
                              <p>
                                 <strong>Address:</strong>
                                 Philadelphia, PA
                              </p>
                           </li>
                           <li>
                              <i class="icon-phone"></i>
                              <p><strong>Phone:</strong>123-456-7890</p>
                           </li>
                           <li>
                              <i class="icon-envelope"></i>
                              <p><strong>Email:</strong><a href="mailto:info@ExamHawk.com">info@ExamHawk.com</a></p>
                           </li>
                        </ul>
                     </section>
                  </div>
               </div>
            </div>
            <!-- Footer Top End -->
            <!-- Footer Bottom Start -->
            <div class="footer-bottom">
               <div class="container">
                  <div class="row">
                     <div class="col-lg-12 col-md-12 col-xs-12 col-sm-12 text-center"> &copy; Copyright 2013 ExamHawk. All Rights Reserved. </div>
                  </div>
               </div>
            </div>
            <!-- Footer Bottom End -->
         </footer>

      <!-- Wrap End -->
      <section id="style-switcher">
        <h2>Style Switcher <a href="#"><i class="icon-cog"></i></a></h2>
        <div>
           <h3>Header Color</h3>
           <div class="header-color">
              <input type='text' class="header-bg" />
           </div>
           <h3>Background Banner</h3>
           <div class="header-color">
              <input type='text' class="banner-bg" />
           </div>
	   <h3>Title Color</h3>
           <div class="header-color">
              <input type='text' class="title-bg" />
           </div>
	   <div class="header-color">
	       <h3>Title Shadow</h3>
	       <input type="text"  class="slider" value="" data-slider-min="1" data-slider-max="5" data-slider-step="1" data-slider-value="1" data-slider-orientation="horizontal" data-slider-selection="after" data-slider-tooltip="show">
	   </div>
        </div>
     </section>
      <!-- The Scripts -->
      <script src="<?php echo BASE_URL; ?>/js/jquery.min.js"></script>
      <script src="<?php echo BASE_URL; ?>/js/bootstrap.js"></script>
      <script src="<?php echo BASE_URL; ?>/js/jquery.parallax.js"></script>
      <script src="<?php echo BASE_URL; ?>/js/modernizr-2.6.2.min.js"></script>
      <script src="<?php echo BASE_URL; ?>/js/revolution-slider/js/jquery.themepunch.revolution.min.js"></script>
      <script src="<?php echo BASE_URL; ?>/js/jquery.nivo.slider.pack.js"></script>
      <script src="<?php echo BASE_URL; ?>/js/jquery.prettyPhoto.js"></script>
      <script src="<?php echo BASE_URL; ?>/js/jquery.isotope.js"></script>
      <script src="<?php echo BASE_URL; ?>/js/superfish.js"></script>
      <script src="<?php echo BASE_URL; ?>/js/tweetMachine.js"></script>
      <script src="<?php echo BASE_URL; ?>/js/tytabs.js"></script>
      <script src="<?php echo BASE_URL; ?>/js/jquery.gmap.min.js"></script>
      <script src="<?php echo BASE_URL; ?>/js/circularnav.js"></script>
      <script src="<?php echo BASE_URL; ?>/js/jquery.sticky.js"></script>
      <script src="<?php echo BASE_URL; ?>/js/jflickrfeed.js"></script>
      <script src="<?php echo BASE_URL; ?>/js/imagesloaded.pkgd.min.js"></script>
      <script src="<?php echo BASE_URL; ?>/js/waypoints.min.js"></script>
      <script src="<?php echo BASE_URL; ?>/js/spectrum.js"></script>
      <script src="<?php echo BASE_URL; ?>/js/switcher.js"></script>
      <script src="<?php echo BASE_URL; ?>/js/bootstrap-slider.js"></script>
      <script src="<?php echo BASE_URL; ?>/js/custom.js"></script>
      <!--
      <script type='text/javascript'>(function () { var done = false; var script = document.createElement('script'); script.async = true; script.type = 'text/javascript'; script.src = 'https://www.purechat.com/VisitorWidget/WidgetScript'; document.getElementsByTagName('HEAD').item(0).appendChild(script); script.onreadystatechange = script.onload = function (e) { if (!done && (!this.readyState || this.readyState == 'loaded' || this.readyState == 'complete')) { var w = new PCWidget({ c: 'd5e7d80c-967b-4390-a12c-c25e4bfd6633', f: true }); done = true; } }; })();</script>
      -->
   </body>
</html>
