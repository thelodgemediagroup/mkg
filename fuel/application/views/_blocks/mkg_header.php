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
	