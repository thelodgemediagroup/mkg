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
						<li class="dropdown">
							<a href="#" class="dropdown-toggle"><i class="entypo-calendar" ></i>Opening Hours</a>
							<ul>
								<li><i class="entypo-calendar" ></i>Monday to Friday</li>
								<li><i class="entypo-clock" ></i>10AM - 11AM and 7PM - 8PM</li>
								<li><i class="entypo-location" ></i>Room 07, Center Plaza 15654</li>
								<li><a href="<?php echo base_url('schedule'); ?>">See Pricing Tables</a></li>
							</ul>
						</li>   
						<li>
							<a href="#"><i class="entypo-phone" ></i>2-985-505-6574</a>
						</li>
						<li>
							<a href="<?php echo base_url('contact'); ?>"><i class="entypo-mail" ></i>Contact</a>
						</li>
					</ul>
					<ul class="social-header pull-right">
						<li>
							<a href="#"><i class="entypo-flickr" ></i></a>
						</li>
						<li>
							<a href="#"><i class="entypo-gplus" ></i></a>
						</li>
						<li>
							<a href="#"><i class="entypo-play" ></i></a>
						</li>
						<li>
							<a href="#"><i class="entypo-facebook" ></i></a>
						</li>
						<li>
							<a href="#"><i class="entypo-twitter" ></i></a>
						</li>
					</ul>
				</div>    
			</div>
		</div>
		<!-- End Top Bar -->

		<?php echo $navigation; ?>
	   
	</header>   
	<!-- End header -->