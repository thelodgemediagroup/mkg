<?php
/* template head */
/* end template head */ ob_start(); /* template body */ ?><!DOCTYPE html>
<html>
<head>    
	<!-- Define Charset -->
	<meta charset="utf-8">
	
	<!-- Page Title -->
	<title>MKG Detroit - Home</title>
	
	<!-- Responsive Metatag -->
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
	   
	<!-- CSS -->
	<link href="/assets/css/bootstrap.min.css?c=-62169955200" media="all" rel="stylesheet"/>
		<link href="/assets/css/rs-plugin/css/settings.css?c=-62169955200" media="all" rel="stylesheet"/>
		<link href="/assets/css/styles.css?c=-62169955200" media="all" rel="stylesheet"/>
	    <link href="/assets/css/color/gray.css?c=-62169955200" media="all" rel="stylesheet"/>
		<link href="/assets/css/media-queries.css?c=-62169955200" media="all" rel="stylesheet"/>
		<link href="/assets/css/gce-style.css?c=-62169955200" media="all" rel="stylesheet"/>
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
<body><h1>This is the Homepage. Inserted into _layouts</h1><?php  /* end template body */
return $this->buffer . ob_get_clean();
?>