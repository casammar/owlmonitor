<?php include 'baseurl.php'; ?>
<!DOCTYPE html>
<!--[if IE 8]>			<html class="ie ie8"> <![endif]-->
<!--[if IE 9]>			<html class="ie ie9"> <![endif]-->
<!--[if gt IE 9]><!-->	<html> <!--<![endif]-->
   <head>
      <meta charset="utf-8">
      <title>examhawk</title>
      <meta name="description" content="examhawk application">
      <meta name="author" content="examhawk development team">
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
      <link rel="stylesheet" href="<?php echo BASE_URL; ?>/css/colors/blue.css">
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
      <div class="wrap">
         <!-- Header Start -->
         <header id="header">
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
                           <a id="<?php echo ($_SERVER['REQUEST_URI'] == '/beta/institutions/')?'current':''?>" href="<?php echo BASE_URL; ?>/institutions">Institutions</a>
                        </li>
                        <li>
                           <a id="<?php echo ($_SERVER['REQUEST_URI'] == '/beta/test-takers/')?'current':''?>" href="<?php echo BASE_URL; ?>/test-takers">Test Takers</a>
                        </li>
                        <li>
                           <a id="<?php echo ($_SERVER['REQUEST_URI'] == '/beta/about/')?'current':''?>" href="<?php echo BASE_URL; ?>/about" class="sf-with-ul">About</a>
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