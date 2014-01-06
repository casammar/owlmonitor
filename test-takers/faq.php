<?php include '../views/baseurl.php'; ?>
<!DOCTYPE html>
<!--[if IE 8]>			<html class="ie ie8"> <![endif]-->
<!--[if IE 9]>			<html class="ie ie9"> <![endif]-->
<!--[if gt IE 9]><!-->	<html> <!--<![endif]-->
   <head>
      <meta charset="utf-8">
      <title>ExamHawk</title>
      <meta name="description" content="">
      <meta name="author" content="">
      <!-- Mobile Metas -->
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <!-- Google Fonts -->
      <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700,800' rel='stylesheet' type='text/css'>
      <link href='http://fonts.googleapis.com/css?family=Oswald:400,300,700' rel='stylesheet' type='text/css'>
      <link href='http://fonts.googleapis.com/css?family=Chango' rel='stylesheet' type='text/css'>
      <link href='http://fonts.googleapis.com/css?family=Roboto:400,500,700' rel='stylesheet' type='text/css'>
      <link href='http://fonts.googleapis.com/css?family=Merriweather+Sans:400,700,800,800italic,400italic,700italic' rel='stylesheet' type='text/css'>
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
      <link rel="stylesheet" href="<?php echo BASE_URL; ?>/css/institutions.css">

      <!-- Favicons -->
      <link rel="shortcut icon" href="<?php echo BASE_URL; ?>/img/wise-owl-transparent.png">
      <link rel="apple-touch-icon" href="<?php echo BASE_URL; ?>/img/ico/apple-touch-icon.png">
      <link rel="apple-touch-icon" sizes="72x72" href="<?php echo BASE_URL; ?>/img/ico/apple-touch-icon-72.png">
      <link rel="apple-touch-icon" sizes="114x114" href="<?php echo BASE_URL; ?>/img/ico/apple-touch-icon-114.png">
      <link rel="apple-touch-icon" sizes="144x144" href="<?php echo BASE_URL; ?>/img/ico/apple-touch-icon-144.png">
      <!-- The HTML5 shim, for IE6-8 support of HTML5 elements -->
      <!--[if lt IE 9]>
      <script src="//html5shim.googlecode.com/svn/trunk/html5.js"></script>
      <script src="<?php echo BASE_URL; ?>/js/respond.min.js"></script>
      <![endif]-->
      <!--[if IE]>
      <link rel="stylesheet" href="<?php echo BASE_URL; ?>/css/ie.css">
      <![endif]-->
   </head>
   <body class="home">
      <div class="background-banner test-taker-background-banner">
         <!-- Header Start -->
         <header id="header">
             <!-- Header Top Bar Start -->
                   <div class="top-bar">
                      <div class="slidedown collapse">
                         <div class="container">
                            <div class="phone-email pull-left">
                               <a><i class="icon-phone"></i> Call Us : 215-995-6893</a>
                               <a href="info@examhawk.com"><i class="icon-envelope"></i> Email : info@examhawk.com</a>
                            </div>
                            <div class="pull-right">
                               <ul class="social pull-left">
                                  <li class="facebook"><a href="#"><i class="icon-facebook"></i></a></li>
                                  <li class="twitter"><a href="#"><i class="icon-twitter"></i></a></li>
                                  <li class="linkedin"><a href="#"><i class="icon-linkedin"></i></a></li>
                                  <li class="rss"><a href="#"><i class="icon-rss"></i></a></li>
                               </ul>
                            </div>
                         </div>
                      </div>
                   </div>
                   <!-- Header Top Bar End -->
            <!-- Main Header Start -->
            <div class="main-header">
               <div class="container">
                  <!-- TopNav Start -->
                  <div class="topnav navbar-header">
                     <a class="navbar-toggle down-button" data-toggle="collapse" data-target=".slidedown">
                     <i class="icon-angle-down icon-current"></i>
                     </a>
                  </div>
                  <!-- TopNav End -->
                  <!-- Logo Start -->
                  <div class="logo pull-left">
                      <a href="<?php echo BASE_URL; ?>">
                         <img src="<?php echo BASE_URL; ?>/img/004-examhawk-logo.png">
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
                           <a id="<?php echo ($_SERVER['REQUEST_URI'] == '/beta/institutions/')?'current':''?>" href="<?php echo BASE_URL; ?>/institutions" style="color:#FFFFFF;">Institutions</a>
                        </li>
                        <li>
                           <a id="<?php echo ($_SERVER['REQUEST_URI'] == '/beta/test-takers/')?'current':''?>" href="<?php echo BASE_URL; ?>/test-takers" style="color:#FFFFFF;">Test Takers</a>
                        </li>
                        <li>
                           <a id="<?php echo ($_SERVER['REQUEST_URI'] == '/beta/about/')?'current':''?>" href="<?php echo BASE_URL; ?>/about" class="sf-with-ul" style="color:#FFFFFF;">About</a>
                        </li>
                        <li>
                           <a id="<?php echo ($_SERVER['REQUEST_URI'] == '/beta/institutions/live-demo.php')?'current':''?>" href="<?php echo BASE_URL; ?>/institutions/live-demo.php" class="demo-link">Live Demo</a>
                        </li>
                    </ul>
                 </nav>
                 <!-- Menu End -->
               </div>

                <!-- About horizontal nav start-->
                <?php
                $mystring = $_SERVER['REQUEST_URI'];
                $findme   = 'about';
                $pos = strpos($mystring, $findme);

                if ($pos === false) {
                    //show nothing
                } else { ?>
<!--                    <div class="container">
                            <table class="horizontal-table">
                                <tr>
                                    <td><a href="<?php echo BASE_URL; ?>/about/faq.php#institution-faq">Institution FAQs</a></td>
                                    <td><a href="<?php echo BASE_URL; ?>/about/faq.php#test-takers-faq">Test Taker FAQs</a></td>
                                    <td><a href="<?php echo BASE_URL; ?>/about/team.php">Team</a></td>
                                    <td><a href="<?php echo BASE_URL; ?>/about/contact.php">Contact</a></td>
                                    <td><a href="<?php echo BASE_URL; ?>/about/conferences.php">Conferences</a></td>
                                    <td><a href="<?php echo BASE_URL; ?>/about/blog.php">Blog</a></td>
                                </tr>
                            </table>
                    </div>-->
                <?php } ?>
                <!-- About horizontal nav end-->

            </div>
            <!-- Main Header End -->

         </header>
         <!-- Header End -->
        <!-- Content Start -->
            <div class="content">
               <div class="container">
                  <div class="row">
                     <!-- FAQ Start -->
                        <div class="col-lg-9 col-md-9 col-sm-9 col-xs-12">
                           <h3 class="title">Test Taker FAQs</h3>
                           <div class="accordionMod panel-group">
                              <div class="accordion-item">
                                 <h4 class="accordion-toggle">How Secure is ExamHawk?</h4>
                                 <section class="accordion-inner panel-body">
                                    <p>
                                        <ul>
                                            <li>The test-taker’s webcam feed, audio feed, screenshots are all recorded</li>
                                            <li>A live person will monitor the test-taker for any infractions and will be available for customer service issues via chat or video chat directly with the test-taker</li>
                                            <li>The application tracks facial engagement, audio analysis, keystrokes, and ping</li>
                                        </ul>
                                    </p>
                                 </section>
                              </div>
                              <div class="accordion-item">
                                 <h4 class="accordion-toggle">What do I need before I take my test?</h4>
                                 <section class="accordion-inner panel-body">
                                    <p>
                                        <ul>
                                            <li>Either in advance or right before the exam starts, download the ExamHawk application from the ExamHawk website. This application will run on all major operating systems.</li>
                                            <li>Be alone in a well-lit and quiet room for their testing session.</li>
                                            <li>All other devices and electronic besides your computer are forbidden during a exam.</li>
                                            <li>You will need to bring a photo ID for the test to verify their identity.</li>
                                        </ul>
                                    </p>
                                 </section>
                              </div>
                              <div class="accordion-item">
                                 <h4 class="accordion-toggle">What are the technical requirements to take an exam?</h4>
                                 <section class="accordion-inner panel-body">
                                    <p>
                                        <ul>
                                            <li>A solid internet connection</li>
                                            <li>A working webcam</li>
                                        </ul>
                                    </p>
                                 </section>
                              </div>
                              <div class="accordion-item">
                                 <h4 class="accordion-toggle">What can I expect from the ExamHawk application?</h4>
                                 <section class="accordion-inner panel-body">
                                    <p>
                                        <ul>
                                            <li>Starting the application will initiate a lockdown internet browser, disabling any external programs, webpages, or methods of copying data from the screen during the test.</li>
                                            <li>Throughout the entire testing process, the test-taker’s webcam feed will be monitored, as well as the audio and screen of the test taker. </li>
                                        </ul>
                                    </p>
                                 </section>
                              </div>
                              <div class="accordion-item">
                                 <h4 class="accordion-toggle">How do I actually take an exam once I launch the application?</h4>
                                 <section class="accordion-inner panel-body">
                                    <p>
                                        <ul>
                                            <li>After the ID Check and Authentication, you will be prompted to navigate to their test within the LMS or test delivery system.</li>
                                            <li>In cases where students are prompted for a test password, a large “Unlock Your Test” button will be displayed in the sidebar of the application, allowing you to access your exam inside the secure browser only.</li>
                                        </ul>
                                    </p>
                                 </section>
                              </div>
                              <div class="accordion-item">
                                 <h4 class="accordion-toggle">What if I run into any trouble during the test?</h4>
                                 <section class="accordion-inner panel-body">
                                    <p>
                                        A “click to connect” button will also be displayed on the sidebar of the application to engage a customer service representative if technical help is needed.
                                    </p>
                                 </section>
                              </div>
                           </div>
                        </div>
                     <!-- FAQ end-->
                     <!-- Sidebar Begin -->
                     <?php include '../views/about-sidebar.php'; ?>
                     <!-- Sidebar End -->
                  </div>
               </div>
            </div>
         <!-- Content End -->
<?php include '../views/footer.php'; ?>
