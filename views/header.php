<?php include 'baseurl.php'; ?>
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
      <!-- Responsive CSS -->
      <link rel="stylesheet" href="<?php echo BASE_URL; ?>/css/theme-responsive.css">
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
                     <h1>
                        ExamHawk
                     </h1>
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
                           <a href="#" class="sf-with-ul">
                           Institutions
                           <span class="sf-sub-indicator">
                           <i class="icon-angle-down "></i>
                           </span>
                           </a>
                           <ul>
                              <li><a href="<?php echo BASE_URL; ?>/institutions/how-it-works.php" class="sf-with-ul">How It Works</a></li>
                              <li><a href="<?php echo BASE_URL; ?>/institutions/pricing.php" class="sf-with-ul">Pricing</a></li>
                              <li><a href="<?php echo BASE_URL; ?>/institutions/faq.php" class="sf-with-ul">FAQ's</a></li>
                              <li><a href="<?php echo BASE_URL; ?>/institutions/technical-requirements.php" class="sf-with-ul">Technical Requirements</a></li>
                              <li><a href="<?php echo BASE_URL; ?>/institutions/live-demo.php" class="sf-with-ul">Live Demo</a></li>
                           </ul>
                        </li>
                        <li>
                           <a href="#" class="sf-with-ul">
                           Students
                           <span class="sf-sub-indicator">
                           <i class="icon-angle-down "></i>
                           </span>
                           </a>
                           <ul>
                              <li><a href="<?php echo BASE_URL; ?>/students/how-it-works.php" class="sf-with-ul">How It Works</a></li>
                              <li><a href="<?php echo BASE_URL; ?>/students/sign-up.php" class="sf-with-ul">Sign Up/Download</a></li>
                              <li><a href="<?php echo BASE_URL; ?>/students/technical-requirements.php" class="sf-with-ul">Technical Requirements</a></li>
                              <li><a href="<?php echo BASE_URL; ?>/students/test-equipment.php" class="sf-with-ul">Test Your Equipment</a></li>
                           </ul>
                        </li>
                        <li>
                           <a href="#" class="sf-with-ul">
                           About
                           <span class="sf-sub-indicator">
                           <i class="icon-angle-down "></i>
                           </span>
                           </a>
                           <ul>
                              <li><a href="<?php echo BASE_URL; ?>/about/mission.php" class="sf-with-ul">Mission / Vision</a></li>
                              <li><a href="<?php echo BASE_URL; ?>/about/team.php" class="sf-with-ul">Team</a></li>
                              <li><a href="<?php echo BASE_URL; ?>/about/contact.php" class="sf-with-ul">Contact</a></li>
                              <li><a href="<?php echo BASE_URL; ?>/about/conferences.php" class="sf-with-ul">Conferences</a></li>
                              <li><a href="<?php echo BASE_URL; ?>/about/blog.php" class="sf-with-ul">Blog</a></li>
                           </ul>
                        </li>
                        <li>
                           <a href="<?php echo BASE_URL; ?>/institutions/live-demo.php">Live Demo</a>
                        </li>
		     </ul>
		  </nav>
		  <!-- Menu End -->
               </div>
            </div>
            <!-- Main Header End -->
         </header>
         <!-- Header End -->