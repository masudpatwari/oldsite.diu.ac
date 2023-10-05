<?php
/**
 * The template for displaying the header
 *
 * Displays all of the head element and everything up until the "site-content" div.
 *
 * @package WordPress
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?php echo $blog_title = get_bloginfo( 'name' ); ?> <?php wp_title(); ?></title>
	 <!-- Bootstrap -->
    <link href="<?php bloginfo('template_url');?>/css/bootstrap.min.css" rel="stylesheet">
	<link rel="shortcut icon" href="<?php bloginfo('template_directory'); ?>/favicons.png" type="image/x-icon">
    <!-- custom css -->
	<link href="<?php bloginfo('template_url');?>/css/flexslider.css" rel="stylesheet">
	<link href="<?php bloginfo('template_url');?>/OwlCarousel/owl.carousel.min.css" rel="stylesheet">
	<link href="<?php bloginfo('template_url');?>/js/fancybox/jquery.fancybox.css" rel="stylesheet" media="screen, projection, print">
	<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>?v=<?php echo time(); ?>" type="text/css" media="screen" />
	<!-- Google Font -->
	<link href="https://fonts.googleapis.com/css?family=Roboto:100,300,400,500,700,900" rel="stylesheet">
	<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
	<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
	<!--[if lt IE 9]>
	<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
	<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
	<![endif]-->
	<?php wp_head(); ?>
</head>

<body>
<header>
	<div class="container">
		<div class="row">
			<div class="col-lg-3 col-md-2 col-sm-12 col-xs-12">
				<a href="<?php bloginfo('url');?>" class="logo"><img src="<?php bloginfo('template_url');?>/images/diu-logo12-01.png" alt="diu logo Dhaka" class="img-responsive"></a>
			</div>
			<div class="col-lg-9 col-md-10 col-sm-12 col-xs-12">
				<div class="row">
					<div class="col-lg-10 col-md-10 col-sm-10 col-xs-12">
						<ul class="top-nav">
							<li><a href="http://students.diu.ac/" target="_blink">Students</a></li>
							<li><a href="<?php bloginfo('url');?>/form-download">Form Download</a></li>
							<li><a href="http://web.diu.ac/result-verification/" target="_blink">Result Verification </a></li>
							<li><a href="https://blog.diu.ac/" target="_blink">Blog </a></li>
							<li><a href="https://international.diu.ac/" target="_blink">International Students </a></li>
							<li><a href="https://jobs.diu.ac/" target="_blink">Jobs</a></li>
			             </ul>
					</div>
					<div class="col-lg-2 col-md-2 col-sm-2 col-xs-12">
						<ul class="registration-nav">
							<li><a href="http://mail.diu-bd.net/webmail/">webmail</a></li>
						</ul>
					</div>
				</div>
				<div class="row">
					<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
						<nav class="main-nav">
							<div class="navbar-header">
								<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
								</button>
							</div>
							<div class="collapse navbar-collapse" id="myNavbar">
								<ul class="nav-list nav navbar-nav">
									<li><a href="<?php bloginfo('url');?>/">Home</a></li>
									<li><a href="<?php bloginfo('url');?>/about">About</a></li>
									<li><a href="<?php bloginfo('url');?>/admission">Admission</a></li>
									<!--<li><a href="javascript:void(0)">Faculties</a></li>-->
									<li>
										<a href="javascript:void(0)" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Departments</a>
										<ul class="dropdown-menu">
											<li><a href="<?php bloginfo('url');?>/department-of-business-administration">Department of Business Administration</a></li>
											<li><a href="<?php bloginfo('url');?>/department-of-civil">Department of Civil Engineering</a></li>
											<li><a href="<?php bloginfo('url');?>/department-of-law">Department of Law</a></li>
											<li><a href="<?php bloginfo('url');?>/department-of-cse">Department of CSE</a></li>
											<li><a href="<?php bloginfo('url');?>/department-of-english">Department of English</a></li>
											<li><a href="<?php bloginfo('url');?>/department-of-eete">Department of EETE</a></li>
											<li><a href="<?php bloginfo('url');?>/department-of-sociology">Department of Sociology</a></li>
											<li><a href="<?php bloginfo('url');?>/department-of-pharmacy">Department of Pharmacy</a></li>
										</ul>
									</li>
									<li><a href="<?php bloginfo('url');?>/institutes">Institutes</a></li>
									<li>
										<a href="javascript:void(0)" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Cell</a>
										<ul class="dropdown-menu">
											<li><a href="javascript:void(0)" target="_blink">SBAC</a></li>
											<li><a href="http://www.tcrcdiu.org/" target="_blink">TCRC</a></li>
											<li><a href="http://web.diu.ac/iqac/" target="_blink">IQAC</a></li>
										</ul>
									</li>
									<li><a href="<?php bloginfo('url');?>/convocation">Convocation</a></li>
									<li>
										<a href="javascript:void(0)" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Alumni </a>
										<ul class="dropdown-menu">
											<li><a href="javascript:void(0)" target="_blink">Business</a></li>
											<li><a href="http://www.csediualumni.com/" target="_blink">CSE Alumni Association</a></li>
											<li><a href="http://diueetealumni.com/" target="_blink">EETE Alumni Association</a></li>
										</ul>
									</li>
									<li><a href="<?php bloginfo('url');?>/publications">Publications</a></li>
									<li><a href="<?php bloginfo('url');?>/contact">Contact</a></li>
								</ul>
							</div>
						</nav>
					</div>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
				<hr class="top-border">
			</div>
		</div>
	</div>
</header>
