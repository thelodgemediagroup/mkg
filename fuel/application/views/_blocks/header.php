<!DOCTYPE html>
<html>
<head>
	<!-- Define Charset -->
	<meta charset="utf-8">
	<meta name="keywords" content="<?php echo fuel_var('meta_keywords')?>">
	<meta name="description" content="<?php echo fuel_var('meta_description')?>">

	<!-- Page Title -->
	<title>
		<?php
			if (!empty($is_blog)) :
				echo $CI->fuel_blog->page_title($page_title, ' : ', 'right');
			else:
				echo fuel_var('page_title', '');
			endif;
		?>
	</title>


	<!-- Responsive Metatag -->
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />

	<!-- CSS -->
	<?php echo css('bootstrap.min'); ?>
	<?php echo css('rs-plugin/css/settings.css'); ?>
	<?php echo css('styles.css'); ?>
    <?php echo css('color/gray.css'); ?>
	<?php echo css('media-queries.css'); ?>
	<?php echo css('gce-style.css'); ?>
	<link type="text/css" href="http://cdn.jsdelivr.net/qtip2/2.2.0/jquery.qtip.min.css" rel="stylesheet">

	<!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
	<!--[if lt IE 9]>
		<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
	<![endif]-->

	<!-- Media queries -->
	<!--[if lt IE 9]>
	<script src="http://css3-mediaqueries-js.googlecode.com/svn/trunk/css3-mediaqueries.js"></script>
	<![endif]-->
</head>
<body>
	<!-- Header -->
	<header>
		<!-- Top Bar -->
		<div class="top-bar" >
			<div class="container" >
				<div class="row">
					<ul class="misc pull-left" >
						<li>
							<a href="<?php echo base_url('contact'); ?>"><i class="entypo-location" ></i>MKG Detroit</a>
						</li>
						<li>
							<a href="<?php echo base_url('contact'); ?>"><i class="entypo-phone" ></i>1-248-820-5MKG</a>
						</li>
						<li>
							<a href="<?php echo base_url('contact'); ?>"><i class="entypo-mail" ></i>Contact</a>
						</li>
					</ul>
					<ul class="social-header pull-right">
						<li>
							<a href="https://www.facebook.com/MKGDetroit" target="_blank"><i class="entypo-facebook" ></i></a>
						</li>
						<li>
							<a href="https://twitter.com/MKGDetroit" target="_blank"><i class="entypo-twitter" ></i></a>
						</li>
					</ul>
				</div>
			</div>
		</div>
		<!-- End Top Bar -->
		<!-- Main Menu -->
		<div class="main-menu" >
			<div class="main-menu-line" >
				<div class="container">
					<div class="row">
						<nav class="navbar" role="navigation">
							<div class="navbar-header">
								<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
									<span class="sr-only">Toggle navigation</span>
									<span class="icon-bar"></span>
									<span class="icon-bar"></span>
									<span class="icon-bar"></span>
								</button>
								<h1 class="logo">
									<a class="navbar-brand" href="<?php echo base_url(); ?>"><img src="<?php echo img_path('redesign/logo.jpg'); ?>" alt="Logo" /></a>
								</h1>
							</div>

							<!-- Collect the nav links, forms, and other content for toggling -->
							<div class="collapse navbar-collapse navbar-ex1-collapse">
								<ul class="nav navbar-nav navbar-right">
									<li class="dropdown">
										<a href="<?php echo base_url('about/') ?>">About</a>
										<ul class="dropdown-about">
											<li><a href="<?php echo base_url('about/'); ?>">General Info</a></li>
											<?php /* <li><a href="<?php echo base_url('about/mission/'); ?>">Mission Statement</a></li> */ ?>
											<li><a href="<?php echo base_url('about/mkg_international/'); ?>">International Organization</a></li>
											<li><a href="<?php echo base_url('about/staff/'); ?>">Staff</a></li>
										</ul>
									</li>

									<li class="dropdown">
										<a href="<?php echo base_url('classes/'); ?>">Classes</a>
										<ul class="dropdown-class">
											<li><a href="<?php echo base_url('classes/phase_program/'); ?>">Phase Program</a></li>
											<li><a href="<?php echo base_url('classes/muay_thai_thai_boxing/'); ?>">Muay Thai / Thai Boxing</a></li>
											<li><a href="<?php echo base_url('classes/jeet_kune_do/'); ?>">Jeet Kune Do / JKD Concepts</a></li>
											<li><a href="<?php echo base_url('classes/filipino_kali_weaponry/'); ?>">Filipino Kali Weaponry</a></li>
											<li><a href="<?php echo base_url('classes/dirty_boxing/'); ?>">Filipino Dirty Boxing / Panantukan</a></li>
											<li><a href="<?php echo base_url('classes/womens_kickboxing/'); ?>">Women’s Kickboxing</a></li>
											<li><a href="<?php echo base_url('classes/fitness/'); ?>">Functional Fitness Circuits</a></li>
											<li><a href="<?php echo base_url('classes/self_protection/'); ?>">Self Protection</a></li>
											<li><a href="<?php echo base_url('classes/specialty_programs/'); ?>">Specialty Programs</a></li>
										</ul>
									</li>

									<li class="dropdown">
										<a href="https://clients.mindbodyonline.com/classic/ws?studioid=197335&stype=-7&sTG=22&sVT=6&sView=week&sLoc=1" target="_blank">Registration</a>
										<?php /*<ul class="dropdown-registration">
											<li><a href="<?php echo base_url('membership'); ?>">Membership</a></li>
										</ul> */ ?>
									</li>

									<li class="dropdown">
										<a href="<?php echo base_url('news/'); ?>">News</a>
										<ul class="dropdown-news">
											<li><a href="<?php echo base_url('friends'); ?>">friends</a></li>
										</ul>
									</li>
									<li><a href="<?php echo base_url('schedule/'); ?>">Schedule</a></li>
								</ul>
							</div><!-- /.navbar-collapse -->
						</nav>
					</div>
				</div>
			</div>
		</div>
		<!-- End Main Menu -->
	</header>
