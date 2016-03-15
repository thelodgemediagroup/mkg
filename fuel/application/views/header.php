<!DOCTYPE html>
<html>
<head>
	<!-- Define Charset -->
	<meta charset="utf-8">

	<!-- Page Title -->
	<title>MKG Detroit - Home</title>

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
							<a href="<?php echo base_url('/'); ?>"><i class="entypo-home" ></i>MKG Detroit</a>
						</li>
						<li>
							<a href="<?php echo base_url('contact'); ?>"><i class="entypo-phone" ></i>1-248-820-5MKG</a>
						</li>
						<li>
							<a href="<?php echo base_url('contact'); ?>"><i class="entypo-mail" ></i>Contact</a>
						</li>
						<li>
							<a href="<?php echo base_url('contact'); ?>"><i class="entypo-location" ></i>Find Us</a>
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

		<?php echo $navigation; ?>

	</header>
	<!-- End header -->
