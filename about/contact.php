<?php include '../views/baseurl.php'; ?>
<!DOCTYPE html>
<!--[if IE 8]>			<html class="ie ie8"> <![endif]-->
<!--[if IE 9]>			<html class="ie ie9"> <![endif]-->
<!--[if gt IE 9]><!-->	<html> <!--<![endif]-->
   <head>
      <meta charset="utf-8">
      <title>ExamHawk | Online Exam Monitoring | Contact</title>
      <meta name="description" content="ExamHawk application">
      <meta name="author" content="ExamHawk development team">
      <!-- Mobile Metas -->
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <!-- Google Fonts -->
      <link href='http://fonts.googleapis.com/css?family=Roboto:400,500,700' rel='stylesheet' type='text/css'>
           <!-- Library CSS -->
      <link rel="stylesheet" href="<?php echo BASE_URL; ?>/css/bootstrap.css">
      <link rel="stylesheet" href="<?php echo BASE_URL; ?>/css/fonts/font-awesome/css/font-awesome.css">
      <link rel="stylesheet" href="<?php echo BASE_URL; ?>/css/animations.css" media="screen">
      <link rel="stylesheet" href="<?php echo BASE_URL; ?>/css/superfish.css" media="screen">
      <link rel="stylesheet" href="<?php echo BASE_URL; ?>/css/team-member.css" media="screen">
      <link rel="stylesheet" href="<?php echo BASE_URL; ?>/css/revolution-slider/css/settings.css" media="screen">
      <link rel="stylesheet" href="<?php echo BASE_URL; ?>/css/prettyPhoto.css" media="screen">
      <link rel="stylesheet" href="<?php echo BASE_URL; ?>/css/pricing-table.css" media="screen">
      <!-- Theme CSS -->
      <link rel="stylesheet" href="<?php echo BASE_URL; ?>/css/style.css">
      <!-- Skin -->
      <link rel="stylesheet" href="<?php echo BASE_URL; ?>/css/custom.css">
      <!-- Steps -->
      <link rel="stylesheet" href="<?php echo BASE_URL; ?>/css/steps.css">
      <!-- Schedule Grid -->
      <link rel="stylesheet" href="<?php echo BASE_URL; ?>/css/schedule-grid.css">
      <!-- Responsive CSS -->
      <link rel="stylesheet" href="<?php echo BASE_URL; ?>/css/theme-responsive.css">
      <!-- Institutions-->
      <link rel="stylesheet" href="<?php echo BASE_URL; ?>/css/about.css">
      <!-- Favicons -->
      <link rel="shortcut icon" href="<?php echo BASE_URL; ?>/img/wise-owl-transparent.png">
      <link rel="apple-touch-icon" href="<?php echo BASE_URL; ?>/img/ico/apple-touch-icon.png">
      <link rel="apple-touch-icon" sizes="72x72" href="<?php echo BASE_URL; ?>/img/ico/apple-touch-icon-72.png">
      <link rel="apple-touch-icon" sizes="114x114" href="<?php echo BASE_URL; ?>/img/ico/apple-touch-icon-114.png">
      <link rel="apple-touch-icon" sizes="144x144" href="<?php echo BASE_URL; ?>/img/ico/apple-touch-icon-144.png">
      <!-- The HTML5 shim, for IE6-8 support of HTML5 elements -->
      <!--[if lt IE 9]>
      <script src="//html5shim.googlecode.com/svn/trunk/html5.js"></script>
      <script src="js/respond.min.js"></script>
      <![endif]-->
      <!--[if IE]>
      <link rel="stylesheet" href="css/ie.css">
      <![endif]-->
   </head>
   <body>
       <!-- background banner start -->
       <div class="background-banner about-background-banner">
           <div class="container">
	           <div class="row">
                   <!-- Logo Start -->
                   <div class="logo pull-left">
                       <a href="<?php echo BASE_URL; ?>">
                           <img src="<?php echo BASE_URL; ?>/img/005-examhawk-logo.png" alt="ExamHawk">
                       </a>
                  </div>
                  <!-- Logo End -->
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
               <div class="row" style="padding-top: 100px;">
                   <div class="about-content col-lg-3 col-md-3 col-sm-3 col-xs-12">
                         <h3 class="title">Quick Contact</h3>
                         <ul class="contact-us">
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
                     </div>
                     <div class="about-content col-lg-offset-1 col-md-offset-1 col-sm-offset-1 col-lg-5 col-md-5 col-sm-5 col-xs-12" id="contact-form">
                        <h3 class="title">Send Us an Email</h3>
<!--                        <p>
                           Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam lorem quam, facilisis laoreet venenatis non, tincidunt eget nulla. In vulputate condimentum feugiat. Donec non leo leo. Maecenas pellentesque quis diam a ultrices. Curabitur est purus, ullamcorper ac justo et, dictum pulvinar ligula. Etiam ornare, eros sit amet vehicula fringilla, sem felis tristique diam, tincidunt cursus massa magna et sapien.
                        </p>-->
                        <div class="divider"></div>
                        <form method="post" class="reply" id="contact">
						<fieldset>
							<div class="row">
								<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
									<label>Name: <span>*</span></label>
									<input class="form-control" id="name" name="name" type="text" value="" required>
								</div>
                            </div>
                            <div class="row">
								<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
									<label>Email: <span>*</span></label>
									<input class="form-control" type="email" id="email" name="email" value="" required>
								</div>
							</div>
                            <div class="row">
								<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
									<label>Phone: <span>*</span></label>
									<input class="form-control" type="text" id="phone" name="phone" value="" required>
								</div>
							</div>
                            <div class="row">
								<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
									<label>Company: <span>*</span></label>
									<input class="form-control" type="text" id="company" name="company" value="" required>
								</div>
							</div>
						</fieldset>
						<button class="btn-normal btn-color submit bottom-pad pull-right" type="submit">Send</button>
						<div class="success alert-success alert" style="display:none">
							Your message has been sent successfully.
						</div>
						<div class="error alert-error alert" style="display:none">
							E-mail must be valid and message must be longer than 100 characters.
						</div>
						<div class="clearfix">
						</div>
					</form>
                     </div>
                   <div class="col-lg-offset-1 col-md-offset-1 col-sm-offset-1 col-lg-2 col-md-2 col-sm-2 col-xs-12 about-sidebar">
                       <!-- Sidebar Begin -->
                       <?php include '../views/about-sidebar.php'; ?>
                       <!-- Sidebar End -->
                   </div>
                </div>
	       </div>
           <!-- container end -->
       </div>
	   <!-- background image row end -->

        <!-- Footer Start -->
        <footer id="footer">
           <!-- Footer Top Start -->
           <div class="footer-top">
              <div class="container contact-us">
                 <div class="row">
                   <section class="col-lg-3 col-md-3 col-xs-12 col-sm-3">
                       <h3>Institutions</h3>
                        <ul>
                            <li><a href="<?php echo BASE_URL; ?>/institutions">Pricing</a></li>
                            <li><a href="<?php echo BASE_URL; ?>/about/faq.php#institution-faq">Institution FAQs</a></li>
                            <li><a href="<?php echo BASE_URL; ?>/institutions/live-demo.php">Live Demo</a></li>
                        </ul>
                   </section>
                   <section class="col-lg-3 col-md-3 col-xs-12 col-sm-3">
                       <h3>Test Takers</h3>
                        <ul>
                            <li><a href="<?php echo BASE_URL; ?>/test-takers">How it Works</a></li>
                            <li><a href="<?php echo BASE_URL; ?>/about/faq.php#test-takers-faq">Test Taker FAQs</a></li>
                            <li><a href="<?php echo BASE_URL; ?>/test-takers">Download</a></li>
                        </ul>
                   </section>

                    <section class="col-lg-3 col-md-3 col-xs-12 col-sm-3">
                       <h3>About</h3>
                        <ul>
                            <li><a href="<?php echo BASE_URL; ?>/about/mission.php">Mission / Vision</a></li>
                            <li><a href="<?php echo BASE_URL; ?>/about/team.php">Team</a></li>
                            <li><a href="<?php echo BASE_URL; ?>/about/contact.php">Contact</a></li>
                            <li><a href="<?php echo BASE_URL; ?>/about/conferences.php">Conferences</a></li>
                            <li><a href="<?php echo BASE_URL; ?>/about/blog.php">Blog</a></li>
                        </ul>
                   </section>
                    <section class="col-lg-3 col-md-3 col-xs-12 col-sm-3">
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
                             <p><strong>Phone:</strong>215-995-6893</p>
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
      <script src="<?php echo BASE_URL; ?>/js/custom.js"></script>
      <!--
      <script type='text/javascript'>(function () { var done = false; var script = document.createElement('script'); script.async = true; script.type = 'text/javascript'; script.src = 'https://www.purechat.com/VisitorWidget/WidgetScript'; document.getElementsByTagName('HEAD').item(0).appendChild(script); script.onreadystatechange = script.onload = function (e) { if (!done && (!this.readyState || this.readyState == 'loaded' || this.readyState == 'complete')) { var w = new PCWidget({ c: 'd5e7d80c-967b-4390-a12c-c25e4bfd6633', f: true }); done = true; } }; })();</script>
      -->
   </body>
</html>
