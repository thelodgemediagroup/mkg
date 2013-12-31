<!DOCTYPE html>
<html>
<head>    
	<!-- Define Charset -->
	<meta charset="utf-8">
	
	<!-- Page Title -->
	<title>Gym Club - Home</title>
	
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
								<li><a href="price.html">See Pricing Tables</a></li>
							</ul>
						</li>   
						<li>
							<a href="#"><i class="entypo-phone" ></i>2-985-505-6574</a>
						</li>
						<li>
							<a href="contact.html"><i class="entypo-mail" ></i>Contact</a>
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
									<a class="navbar-brand" href="index.html"><img src="<?php echo img_path('mkg_logo.png'); ?>" alt="Logo" /></a>
								</h1>  
							</div>

							<!-- Collect the nav links, forms, and other content for toggling -->
							<div class="collapse navbar-collapse navbar-ex1-collapse">
								<ul class="nav navbar-nav navbar-right">
									<li class="active"><a href="index.html">Home</a></li>
									<li><a href="classes.html">Classes</a></li>
									<li class="dropdown">
										<a href="trainers.html" class="dropdown-toggle">Trainers</a>
										<ul>
											<li><a href="trainers.html">All Trainers</a></li>
											<li><a href="single-trainer.html">Single Trainers</a></li>
										</ul>
									</li>
									<li class="dropdown">
											<a href="#" class="dropdown-toggle">Pages</a>
											<ul>
												<li><a href="club.html">Club</a></li>
												<li><a href="features.html">Features Page</a></li>
												<li><a href="faq.html">FAQ</a></li>
												<li><a href="tabs.html">Tabs</a></li>
												<li><a href="404.html">404 Error</a></li>
												<li><a href="single-class.html">Single Class</a></li>
												<li><a href="gallery-two.html">Gallery 2 col</a></li>
												<li><a href="gallery-three.html">Gallery 3 col</a></li>
												<li><a href="gallery-four.html">Gallery 4 col</a></li>
												<li><a href="single-news.html">Single News</a></li>
											</ul>
									</li>	
									<li><a href="news.html">News</a></li>
									<li><a href="price.html">Price</a></li>

								</ul>
							</div><!-- /.navbar-collapse -->
						</nav>
					</div>
				</div>
			</div>
		</div>
		<!-- End Main Menu -->
	</header>   
	<!-- End header -->

	<!-- Content -->
	<section id="home" >
		<!-- Sub Header -->
		<div class="sub-header" >
			<!-- Slider -->                             
			<div class="bannercontainer">
			<div class="banner ">
				<ul>                        
					<li 
						class="slide1" 
						data-transition="boxslide" 
						data-slotamount="1"
					>
						<img src="<?php echo img_path('slider/01.jpg'); ?>" alt="//" />
						<div 
							class="caption lfb ltb" 
							data-x="600"
							data-y="120"
							data-speed="700"
							data-start="500"
							data-easing="easeOutBack"
						>
							<h2>cardio fitness</h2>
						</div>
						<div 
							class="caption lfb ltb"  
							data-x="600" 
							data-y="120" 
							data-speed="500" 
							data-start="500" 
							data-easing="easeOutBack"
						>
							<p>strength - stamina - power</p>
						</div>
						<div 
							class="caption lfb ltb"  
							data-x="600" 
							data-y="120" 
							data-speed="300" 
							data-start="500"
						>
							<a class="see_work" href="#portfolio" >sign up today</a>
						</div>                                    
					</li>

					<li 
						class="slide2" 
						data-transition="boxslide" 
						data-slotamount="1"
					>
						<img src="<?php echo img_path('slider/02.jpg'); ?>" alt="//" />
						<div 
							class="caption lfb ltb divA"  
							data-x="100" 
							data-y="bottom" 
							data-speed="700" 
							data-start="500" 
							data-easing="easeOutBack"
						>
							<h2>yoga pilates</h2>
							<p>Lorem ipsum dolor sit amet velum, consectetur adipiscing volutpat rutrum sollicitudin. Lorem ipsum dolor sit amet velu.</p>
						</div>

						<div 
							class="caption lfb ltb divB"  
							data-x="440" 
							data-y="bottom" 
							data-speed="700" 
							data-start="500" 
							data-easing="easeOutBack"
						>
							<h2 class="invert">indoor cycling</h2>
							<p>Lorem ipsum dolor sit amet velum, consectetur adipiscing volutpat rutrum sollicitudin. Lorem ipsum dolor sit amet velu.</p>
							<button class="button-gym">Read More</button>
						</div>

						<div 
							class="caption lfb ltb divC"  
							data-x="780" 
							data-y="bottom" 
							data-speed="700" 
							data-start="500" 
							data-easing="easeOutBack"
						>
							<h2>cardio fitness</h2>                               
							<p>Lorem ipsum dolor sit amet velum, consectetur adipiscing volutpat rutrum sollicitudin. Lorem ipsum dolor sit amet velu.</p>
						</div>
					</li> 

					<li 
						class="slide3" 
						data-transition="boxslide" 
						data-slotamount="1"
					>
						<img src="<?php echo img_path('slider/04.jpg'); ?>" alt="//" />
						<div 
							class="caption lfb ltb"  
							data-x="100" 
							data-y="95" 
							data-speed="700" 
							data-start="500" 
							data-easing="easeOutBack"
						>
							<h2>Personal Training</h2>
						</div>
						<div 
							class="caption lfb ltb"  
							data-x="100" 
							data-y="75" 
							data-speed="500" 
							data-start="500" 
							data-easing="easeOutBack"
						>
							<p>Lorem ipsum dolor sit amet velum, consectetur adipiscing volutpat rutrum sollicitudin. Lorem ipsum dolor sit amet velum, consectetur adipiscing volutpat rutrum sollicitudin.</p>
						</div>
						<div 
							class="caption lfb ltb"  
							data-x="100" 
							data-y="75" 
							data-speed="300" 
							data-start="500"
						>
							<a class="see_work" href="#portfolio" >sign up today</a>
						</div>                                    
					</li>
					<li 
						class="slide1" 
						data-transition="boxslide" 
						data-slotamount="1"
					>
						<img src="<?php echo img_path('slider/05.jpg'); ?>" alt="//" />
						<div 
							class="caption lfb ltb" 
							data-x="600"
							data-y="120"
							data-speed="700"
							data-start="500"
							data-easing="easeOutBack"
						>
							<h2>cardio fitness</h2>
						</div>
						<div 
							class="caption lfb ltb"  
							data-x="600" 
							data-y="120" 
							data-speed="500" 
							data-start="500" 
							data-easing="easeOutBack"
						>
							<p>strength - stamina - power</p>
						</div>
						<div 
							class="caption lfb ltb"  
							data-x="600" 
							data-y="120" 
							data-speed="300" 
							data-start="500"
						>
							<a class="see_work" href="#portfolio" >sign up today</a>
						</div>                                    
					</li>

					<li 
						class="slide2" 
						data-transition="boxslide" 
						data-slotamount="1"
					>
						<img src="<?php echo img_path('slider/06.jpg'); ?>" alt="//" />
						<div 
							class="caption lfb ltb divA"  
							data-x="100" 
							data-y="bottom" 
							data-speed="700" 
							data-start="500" 
							data-easing="easeOutBack"
						>
							<h2>yoga pilates</h2>
							<p>Lorem ipsum dolor sit amet velum, consectetur adipiscing volutpat rutrum sollicitudin. Lorem ipsum dolor sit amet velu.</p>
						</div>

						<div 
							class="caption lfb ltb divB"  
							data-x="440" 
							data-y="bottom" 
							data-speed="700" 
							data-start="500" 
							data-easing="easeOutBack"
						>
							<h2 class="invert">indoor cycling</h2>
							<p>Lorem ipsum dolor sit amet velum, consectetur adipiscing volutpat rutrum sollicitudin. Lorem ipsum dolor sit amet velu.</p>
							<button class="button-gym">Read More</button>
						</div>

						<div 
							class="caption lfb ltb divC"  
							data-x="780" 
							data-y="bottom" 
							data-speed="700" 
							data-start="500" 
							data-easing="easeOutBack"
						>
							<h2>cardio fitness</h2>                               
							<p>Lorem ipsum dolor sit amet velum, consectetur adipiscing volutpat rutrum sollicitudin. Lorem ipsum dolor sit amet velu.</p>
						</div>
					</li> 

					<li 
						class="slide3" 
						data-transition="boxslide" 
						data-slotamount="1"
					>
						<img src="<?php echo img_path('slider/01.jpg'); ?>" alt="//" />
						<div 
							class="caption lfb ltb"  
							data-x="100" 
							data-y="95" 
							data-speed="700" 
							data-start="500" 
							data-easing="easeOutBack"
						>
							<h2>Personal Training</h2>
						</div>
						<div 
							class="caption lfb ltb"  
							data-x="100" 
							data-y="75" 
							data-speed="500" 
							data-start="500" 
							data-easing="easeOutBack"
						>
							<p>Lorem ipsum dolor sit amet velum, consectetur adipiscing volutpat rutrum sollicitudin. Lorem ipsum dolor sit amet velum, consectetur adipiscing volutpat rutrum sollicitudin.</p>
						</div>
						<div 
							class="caption lfb ltb"  
							data-x="100" 
							data-y="75" 
							data-speed="300" 
							data-start="500"
						>
							<a class="see_work" href="#portfolio" >sign up today</a>
						</div>                                    
					</li>					 
				</ul>
			</div>
			</div>
			<!-- End Slider -->
		</div>
		<!-- Sub Header -->
		
		<!-- begin Intro -->
		<article class="article-container" id="intro">
			<div class="container">
			<div class="row">
				<div class="col-md-10 col-md-offset-1">
					<h2><strong>Go from where you are to where you want to be</strong></h2>
					<p>If you put yourself in a position where you have to stretch outside your comfort zone, then you are forced to expand your consciousness.</p>
					<button class="button-gym big-button">see our classes</button>
				</div>
			</div>
			</div>
		</article>
		<!-- end Intro -->

		<!-- begin new classes -->
		<article class="article-container">
			<div class="container" >
				<div class="row" >
					<div class="col-md-12">

					<h2 class="article-title" >New Classes</h2>
					<span class="line" >
						<span class="sub-line" ></span>
					</span>
					<a class="slider-control pull-right next" href="#new-classes" data-slide="next"></a>
					<a class="slider-control pull-right prev" href="#new-classes" data-slide="prev"></a>
					<a class="button-gym normal-button view-all pull-right" href="classes.html" >view all</a>
					</div>
				</div>

				<div class="row">
					<div class="new-classes" >
					<div id="new-classes" class="carousel slide">
					<!-- Wrapper for slides -->
					<div class="carousel-inner">
						<div class="item active">
							<div class="col-sm-6 col-md-3" >
								<div class="new-class" >
									<img src="<?php echo img_path('classes/01.jpg'); ?>" alt="//" />
									<div class="class-title" >
										<div class="occult" ><a href="#" class="link" ></a></div>
										<h3>stretching</h3>
										<p class="occult" >Lorem ipsum dolor sit amet velum, consectetur adipiscing volutpat rutrum</p>
									</div>
								</div>
							</div>
								
							<div class="col-sm-6 col-md-3" >
								<div class="new-class" >
									<img src="<?php echo img_path('classes/01.jpg'); ?>" alt="//" />
									<div class="class-title" >
										<div class="occult" ><a href="#" class="link" ></a></div>
										<h3>dance classes</h3>
										<p class="occult" >Lorem ipsum dolor sit amet velum, consectetur adipiscing volutpat rutrum</p>
									</div>
								</div>
							</div>
								
							<div class="col-sm-6 col-md-3" >
								<div class="new-class" >
									<img src="<?php echo img_path('classes/01.jpg'); ?>" alt="//" />
									<div class="class-title" >
										<div class="occult" ><a href="#" class="link" ></a></div>
										<h3>zen and yoga</h3>
										<p class="occult" >Lorem ipsum dolor sit amet velum, consectetur adipiscing volutpat rutrum</p>
									</div>
								</div>
							</div>

							<div class="col-sm-6 col-md-3" >
								<div class="new-class" >
									<img src="<?php echo img_path('classes/01.jpg'); ?>" alt="//" />
									<div class="class-title" >
										<div class="occult" ><a href="#" class="link" ></a></div>
										<h3>weight training</h3>
										<p class="occult" >Lorem ipsum dolor sit amet velum, consectetur adipiscing volutpat rutrum</p>
									</div>
								</div>
							</div>
						</div>

						<div class="item">
							<div class="col-sm-6 col-md-3" >
								<div class="new-class" >
									<img src="<?php echo img_path('classes/01.jpg'); ?>" alt="//" />
									<div class="class-title" >
										<div class="occult" ><a href="#" class="link" ></a></div>
										<h3>dance classes</h3>
										<p class="occult" >Lorem ipsum dolor sit amet velum, consectetur adipiscing volutpat rutrum</p>
									</div>
								</div>
							</div>
								
							<div class="col-sm-6 col-md-3" >
								<div class="new-class" >
									<img src="<?php echo img_path('classes/01.jpg'); ?>" alt="//" />
									<div class="class-title" >
										<div class="occult" ><a href="#" class="link" ></a></div>
										<h3>zen and yoga</h3>
										<p class="occult" >Lorem ipsum dolor sit amet velum, consectetur adipiscing volutpat rutrum</p>
									</div>
								</div>
							</div>

							<div class="col-sm-6 col-md-3" >
								<div class="new-class" >
									<img src="<?php echo img_path('classes/01.jpg'); ?>" alt="//" />
									<div class="class-title" >
										<div class="occult" ><a href="#" class="link" ></a></div>
										<h3>weight training</h3>
										<p class="occult" >Lorem ipsum dolor sit amet velum, consectetur adipiscing volutpat rutrum</p>
									</div>
								</div>
							</div>

							<div class="col-sm-6 col-md-3" >
								<div class="new-class" >
									<img src="<?php echo img_path('classes/01.jpg'); ?>" alt="//" />
									<div class="class-title" >
										<div class="occult" ><a href="#" class="link" ></a></div>
										<h3>stretching</h3>
										<p class="occult" >Lorem ipsum dolor sit amet velum, consectetur adipiscing volutpat rutrum</p>
									</div>
								</div>
							</div>
						</div>
					</div>
					</div>

					</div>

				</div>
			</div>
		</article>
		<!-- end new classes --> 


		<!-- begin Featured Classes -->
		<article class="article-container">
			<div class="container" >
				<div class="row" >
					<div class="col-xs-12">
					<h2 class="headers">Featured Classes</h2>
					<span class="line" >
						<span class="sub-line" ></span>
					</span>
					<a class="button-gym normal-button view-all pull-right no-margin" href="classes.html" >view all</a>
					</div>
				</div>
				<div class="row" >
					<div class="col-xs-3 col-sm-2 col-md-1" >
						<img src="<?php echo img_path('featured-classes/ballet-red.png'); ?>" alt="//" />
					</div>
					<div class="col-xs-9 col-sm-10 col-md-3 fc-container" >
						<h3>Ballet classes</h3>
						<p>Ut a molestie urna. Vestibulum malesuada, diam ut mollis varius, lorem urna euismod purus, ut varius est erat a orci.</p>
						<a href="#">Read more...</a>
					</div>
					
					<div class="col-xs-3 col-sm-2 col-md-1" >
						<img src="<?php echo img_path('featured-classes/yoga-red.png'); ?>" alt="//" />
					</div>
					<div class="col-xs-9 col-sm-10 col-md-3 fc-container" >
						<h3>Yoga classes</h3>
						<p>
							Ut a molestie urna. Vestibulum malesuada, diam ut mollis varius, lorem urna euismod purus, ut varius est erat a orci.
						</p>
						<a href="#">Read more...</a>
					</div>
					
					<div class="col-xs-3 col-sm-2 col-md-1" >
						<img src="<?php echo img_path('featured-classes/karate-red.png'); ?>" alt="//" />
					</div>
					<div class="col-xs-9 col-sm-10 col-md-3 fc-container" >
						<h3>Karate classes</h3>
						<p>
							Ut a molestie urna. Vestibulum malesuada, diam ut mollis varius, lorem urna euismod purus, ut varius est erat a orci.
						</p>
						<a href="#">Read more...</a>
					</div>
				  </div>
			  </div>
		</article>  
		<!-- end Featured Classes -->
		
		<!-- begin No pressure, no diamonds  / The Club Featured -->
		<article class="article-container">
			<div class="container" >
				<div class="row">
					<div class="col-md-7">
						<h2 class="headers">No pressure, no diamonds</h2>
						<span class="line" >
							<span class="sub-line" ></span>
						</span>
						<div class="tabbable tabs-left">
						<ul class="nav nav-tabs col-xs-4"><!--  nav-tabs-sec" id="myTab"  nav-tabs-sec -->
							<li class="active"><a href="#outside-sec" data-toggle="tab"><span class="gym-icon outside"></span>Outside Sports</a></li>
							<li><a href="#video-sec" data-toggle="tab" ><span class="gym-icon video"></span>Video Tour</a></li>
							<li><a href="#quiet-sec" data-toggle="tab" ><span class="gym-icon sports"></span>Quiet Sports</a></li>
							<li><a href="#comunity-sec" data-toggle="tab" ><span class="gym-icon comunity"></span>Sportive Comunity</a></li>
							<li><a href="#footbal-sec" data-toggle="tab" ><span class="gym-icon footbal"></span>Footbal</a></li>
						</ul>
								 
						<div class="tab-content col-xs-8">
							<div class="tab-pane in active" id="outside-sec">
								<p>
									1Ut a molestie urna. Vestibulum malesuada, diam ut mollis varius, lorem urna euismod purus, ut varius est erat a orci. Sed ultricies elit eget venenatis tristique. Sed tempus egestas ante, vel ullamcorper nulla ultricies at.
								</p>
								<p>
									Maecenas pellentesque rhoncus egestas. Aenean molestie nisl eget semper pretium. Praesent adipiscing faucibus magna, eu vulbus magna, eu vul and putate ante volutpat volutpat and ulla facilisi. 
								</p>
								<p>
									Maecenas pellentesque rhoncus egestas. Aenean molestie nisl eget semper pretium. Praesent adipiscing faucibus magna, eu vulbus magna, eu vul and putate ante volutpat volutpat and ulla facilisi. Maecenas pellentesque rhoncus egestas. Aenean molestie nisl eget semper pretium. Praesent adipiscing faucibus magna, eu vulbus magna, eu vul and putate ante volutpat volutpat and ulla facilisi. 
								</p>
							</div>
							<div class="tab-pane in" id="video-sec">
								<p>
									2Ut a molestie urna. Vestibulum malesuada, diam ut mollis varius, lorem urna euismod purus, ut varius est erat a orci. Sed ultricies elit eget venenatis tristique. Sed tempus egestas ante, vel ullamcorper nulla ultricies at.
								</p>
								<p>
									Maecenas pellentesque rhoncus egestas. Aenean molestie nisl eget semper pretium. Praesent adipiscing faucibus magna, eu vulbus magna, eu vul and putate ante volutpat volutpat and ulla facilisi. 
								</p>
								<p>
									Maecenas pellentesque rhoncus egestas. Aenean molestie nisl eget semper pretium. Praesent adipiscing faucibus magna, eu vulbus magna, eu vul and putate ante volutpat volutpat and ulla facilisi. 
								</p>
							</div>
							<div class="tab-pane in" id="quiet-sec">
								<p>
									3 go ulum malesuada, diam ut mollis varius, lorem urna euismod purus, ut varius est erat a orci. Sed ultricies elit eget venenatis tristique. Sed tempus egestas ante, vel ullamcorper nulla ultricies at.
								</p>
								<p>
									Maecenas pellentesque rhoncus egestas. Aenean molestie nisl eget semper pretium. Praesent adipiscing faucibus magna, eu vulbus magna, eu vul and putate ante volutpat volutpat and ulla facilisi. 
								</p>
							</div>
							<div class="tab-pane in" id="comunity-sec">
								<p>
									4Ut a molestie urna. Vestibulum malesuada, diam ut mollis varius, lorem urna euismod purus, ut varius est erat a orci. Sed ultricies elit eget venenatis tristique. Sed tempus egestas ante, vel ullamcorper nulla ultricies at.
								</p>
								<p>
									Maecenas pellentesque rhoncus egestas. Aenean mnean molestie nissl eget semper pretium. Praesent adipiscing faucibus magna, eu vulbus magna, eu vul and putate ante volutpat volutpat and ulla facilisi. 
								</p>
							</div>
							<div class="tab-pane in" id="footbal-sec">
								<p>
									5Ut a molestie urna. Vestibulum malesuaollis varius, lorem urna euismod purus, ut varius est erat a orci. Sed ultricies elit eget venenatis tristique. Sed tempus egestas ante, vel ullamcorper nulla ultricies at.
								</p>
								<p>
									Maecenas pellentesque rhoncus egestas. Aenean molestie nisl eget semper pretium. Praesent adipiscing faucibus magna, eu vulbus magna, eu vul and putate ante volutpat volutpat and ulla facilisi. 
								</p>
							</div>
						</div> 

						</div>
					</div>
					<div class="col-md-5">
						<h2 class="headers">The Club Features</h2>
						<span class="line" >
							<span class="sub-line" ></span>
						</span>
						
						<!-- begin Accordion -->
						<div class="accordion" id="accordion2">
							<div class="accordion-group">
								<div class="accordion-heading">
									<h5>Gym Fitness</h5>
									<a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion2" href="#collapseOne">+</a>
								</div>
								<div id="collapseOne" class="accordion-body collapse in">
								<div class="accordion-inner">
									<a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion2" href="#collapseOne">-</a>
									<h5>Indoor Cycling</h5>
									<p>
										Ut a molestie urna. Vestibulum malesuada, diam ut mollis varius, lorem urna euismod purus, ut varius est erat a orci. Sed ultricies elit eget venenatis tristique. Sed tempus egestas ante, vel ullamcorper nulla ultricies at. Maecenas pellentesque rhoncus egestas. Aenean molestie nisl eget semper pretium. Praesent adipiscing faucibus magna, eu vulputate ante volutpat volutpat and ulla facilisi.
									</p>
								</div>
								</div>
							</div>
							
							<div class="accordion-group">
								<div class="accordion-heading">
									<h5>Yoga Pilates</h5>
									<a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion2" href="#collapseTwo">+</a>
								</div>
								<div id="collapseTwo" class="accordion-body collapse">
								<div class="accordion-inner">
									<a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion2" href="#collapseOne">-</a>
									<h5>Indoor Cycling</h5>
									<p>
										Ut a molestie urna. Vestibulum malesuada, diam ut mollis varius, lorem urna euismod purus, ut varius est erat a orci. Sed ultricies elit eget venenatis tristique. Sed tempus egestas ante, vel ullamcorper nulla ultricies at. Maecenas pellentesque rhoncus egestas. Aenean molestie nisl eget semper pretium. Praesent adipiscing faucibus magna, eu vulputate ante volutpat volutpat and ulla facilisi.
									</p>
								</div>
								</div>
							</div>

							<div class="accordion-group">
								<div class="accordion-heading">
									<h5>Cardio Fitness</h5>
									<a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion2" href="#collapseThree">+</a>
								</div>
								<div id="collapseThree" class="accordion-body collapse">
								  <div class="accordion-inner">
									<a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion2" href="#collapseOne">-</a>
									<h5>Indoor Cycling</h5>
									<p>
										Ut a molestie urna. Vestibulum malesuada, diam ut mollis varius, lorem urna euismod purus, ut varius est erat a orci. Sed ultricies elit eget venenatis tristique. Sed tempus egestas ante, vel ullamcorper nulla ultricies at. Maecenas pellentesque rhoncus egestas. Aenean molestie nisl eget semper pretium. Praesent adipiscing faucibus magna, eu vulputate ante volutpat volutpat and ulla facilisi.
									</p>
								</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</article>
		<!-- end No pressure, no diamonds  / The Club Featured -->


        <!-- Table -->
        <article class="article-container">      
            <div class="container" >
            
                <div class="row" >
                  <div class="col-xs-12">
                  <h2 class="headers">List of classes in the timeline</h2>
                  <span class="line" >
                      <span class="sub-line" ></span>
                  </span>
                  </div>
                </div>
                            
                <div class="row" >
                	<div class="col-xs-12">
                		<div class="table-responsive">
                        <table class="table table-hover table-bordered">
                          <thead>
                            <tr>
                              <th>TIME</th>
                              <th>MONDAY</th>
                              <th>TUESDAY</th>
                              <th>WEDNESDAY</th>
                              <th>THURSDAY</th>
                              <th>FRIDAY</th>
                              <th>SATURDAY</th>
                              <th>SUNDAY</th>                             
                            </tr>
                          </thead>
                          <tbody>
                            <tr>
                              <td>06.00 - 07.00</td>
                              <td class="success"><a href="">Boxing</a></td>
                              <td class="success"><a href="">Boxing</a></td>
                              <td>&nbsp;</td>
                              <td>&nbsp;</td>
                              <td>&nbsp;</td>
                              <td>&nbsp;</td>   
                              <td>&nbsp;</td>                         
                            </tr>
                            <tr>
                              <td>07.00 - 08.00</td>
                              <td class="success"><a href="">Archbold Gym</a></td>
                              <td class="success"><a href="">Archbold Gym</a></td>
                              <td class="warning" rowspan="2"><a href="">Volleyball <br />Match</a></td>
							  <td class="success"><a href="">Volleyball</a></td>
							  <td class="success"><a href="">Volleyball</a></td>
                              <td>&nbsp;</td>  
                              <td>&nbsp;</td>                         
                            </tr>
                            <tr>
                              <td>08.00 - 09.00</td>
                              <td class="success"><a href="">Cardio Fitness</a></td>
                              <td class="success"><a href="">Cardio Fitness</a></td>                             
                              <td>&nbsp;</td>
                              <td class="success"><a href="">Flanagym Gym</a></td>
                              <td class="success"><a href="">Flanagym Gym</a></td>
                              <td class="success"><a href="">Flanagym Gym</a></td>                            
                            </tr>
                            <tr>
                              <td>09.00 - 10.00</td>
                              <td>&nbsp;</td>
                              <td>&nbsp;</td>
                              <td class="success"><a href="">Cardio Fitness</a></td>
                              <td>&nbsp;</td>
                              <td>&nbsp;</td>
                              <td>&nbsp;</td>
                              <td>&nbsp;</td>                            
                            </tr>
                            <tr>
                              <td>10.00 - 11.00</td>
                              <td class="success"><a href="">Table-Tennis</a></td>
                              <td class="success"><a href="">Table-Tennis</a></td>
                              <td class="success"><a href="">Volleyball</a></td>
                              <td class="success"><a href="">Volleyball</a></td>
                              <td class="success"><a href="">Volleyball</a></td>
                              <td class="success"><a href="">Volleyball</a></td> 
                              <td class="success"><a href="">Volleyball</a></td>                          
                            </tr>
                            <tr>
                              <td>11.00 - 12.00</td>
                              <td class="success"><a href="">Gym Training</a></td>
                              <td class="success"><a href="">Gym Training</a></td>
                              <td class="success"><a href="">Gym Training</a></td>
                              <td>&nbsp;</td>                                 
                              <td>&nbsp;</td>   
                              <td>&nbsp;</td>    
                              <td>&nbsp;</td>                              
                            </tr>
                            <tr>
                              <td>13.00 - 15.00</td>
                              <td class="danger">Close</td>
                              <td class="danger">Close</td>
                              <td class="danger">Close</td>
                              <td class="danger">Close</td>
                              <td class="danger">Close</td>
                              <td class="danger">Close</td> 
                              <td class="danger">Close</td>                           
                            </tr>
                            <tr>
                              <td>14.00 - 15.00</td>
                              <td class="success"><a href="">Flanagym Gym</a></td>
                              <td class="success"><a href="">Flanagym Gym</a></td>
                              <td class="success"><a href="">Flanagym Gym</a></td> 
                              <td>&nbsp;</td>
                              <td class="warning" rowspan="2"><a href="">Volleyball <br />Match</a></td>
                              <td>&nbsp;</td> 
                              <td>&nbsp;</td>                           
                            </tr>
                            <tr>
                              <td>15.00 - 16.00</td>
                              <td>&nbsp;</td>   
                              <td>&nbsp;</td>   
                              <td class="success"><a href="">Gym Fitness</a></td>
                              <td class="success"><a href="">Gym Fitness</a></td>
                               
                              <td>&nbsp;</td>    
                              <td>&nbsp;</td>                              
                            </tr>
                            <tr>
                              <td>16.00 - 17.00</td>
                              <td class="success"><a href="">Flanagym Gym</a></td>
                              <td class="success"><a href="">Flanagym Gym</a></td>
                              <td class="success"><a href="">Flanagym Gym</a></td> 
                              <td>&nbsp;</td>
                              <td>&nbsp;</td>
                              <td class="success"><a href="">Racquetball</a></td> 
                              <td>&nbsp;</td>                       
                            </tr>
                            <tr>
                              <td>17.00 - 18.00</td>
                              <td>&nbsp;</td>
                              <td>&nbsp;</td>
                              <td>&nbsp;</td>
                              <td>&nbsp;</td>
                              <td class="success"><a href="">Flanagym Gym</a></td>
                              <td class="success"><a href="">Flanagym Gym</a></td>
                              <td class="success"><a href="">Flanagym Gym</a></td>                           
                            </tr>
                            <tr>
                              <td>19.00 - 20.00</td>
                              <td class="success"><a href="">Indoor running </a></td>
                              <td class="success"><a href="">Indoor running </a></td>
                              <td class="danger">Close</td>
                              <td class="success"><a href="">Indoor running </a></td>
                              <td class="danger">Close</td>
                              <td class="danger">Close</td> 
                              <td class="danger">Close</td>                         
                            </tr>
                          </tbody>
                        </table>
                        </div>
                    </div>
                </div>
            
            </div>            
        </article>  
        <!-- end Table -->


		<!-- begin Bodybuilding Supplements -->
		<article class="article-container">
			<div class="container" >

				<!-- arrows -->
				<div class="row" >					
					<div class="col-md-12">
						<h2 class="headers">Bodybuilding Supplements</h2>
						<span class="line" >
							<span class="sub-line" ></span>
						</span>
						<a class="slider-control pull-right next" href="#bodybuilding" data-slide="next"></a>
						<a class="slider-control pull-right prev" href="#bodybuilding" data-slide="prev"></a>
					</div>
				</div>
				<!-- end arrows -->

				<div class="row" >
					<div id="bodybuilding" class="carousel slide">
					<!-- Wrapper for slides -->
					<div class="carousel-inner">
						<div class="item active">
							<ul class="logos" >
								<li><a href="#"><img src="<?php echo img_path('logos/1.png'); ?>" alt="//" /></a></li>
								<li><a href="#"><img src="<?php echo img_path('logos/2.png'); ?>" alt="//" /></a></li>
								<li><a href="#"><img src="<?php echo img_path('logos/3.png'); ?>" alt="//" /></a></li>
								<li><a href="#"><img src="<?php echo img_path('logos/4.png'); ?>" alt="//" /></a></li>
								<li><a href="#"><img src="<?php echo img_path('logos/5.png'); ?>" alt="//" /></a></li>
							</ul>
						</div>
						<div class="item">
							<ul class="logos" >
								<li><a href="#"><img src="<?php echo img_path('logos/5.png'); ?>" alt="//" /></a></li>
								<li><a href="#"><img src="<?php echo img_path('logos/1.png'); ?>" alt="//" /></a></li>
								<li><a href="#"><img src="<?php echo img_path('logos/2.png'); ?>" alt="//" /></a></li>
								<li><a href="#"><img src="<?php echo img_path('logos/3.png'); ?>" alt="//" /></a></li>
								<li><a href="#"><img src="<?php echo img_path('logos/4.png'); ?>" alt="//" /></a></li>
							</ul>
						</div>
					</div>
					</div>
				</div>
			</div>
		</article>
		<!-- end Bodybuilding Supplements -->
	</section>

	<!-- end content -->

	<!-- Footer -->
	<footer>
		<div class="container" >
			<div class="row misc">
				<div class="col-md-3" >
					<h3>About the Club</h3>
					<p>Phasellus sit amet justo sapien. Praesent bibendum, enim non fringilla vestibulum.</p>
					<p>We can condimentum est lacus ut dolor. Sed facilisis ante felis, vitae mattis massa luctus sit amet. Vestibulum eu blandit ipsum. In ornare enim nunc.</p>
					<ul class="about" >
						<li><i class="entypo-location" ></i>Street 32165, 646 UK</li>
						<li><i class="entypo-mobile" ></i>(62626) 5154 4545</li>
						<li><i class="entypo-mail" ></i>email@democompany.com</li>
						<li><i class="entypo-clock" ></i>From 10:15 AM to 7:30 PM</li>
					</ul>
				</div>  
				<div class="col-md-3">
					<h3>Useful Links</h3>
					<ul class="links" >
						<li><a href="#"><i class="entypo-right-open-mini" ></i>Meet the Coaches of the Club</a></li>  
						<li><a href="#"><i class="entypo-right-open-mini" ></i>Meet the Trainers</a></li>  
						<li><a href="#"><i class="entypo-right-open-mini" ></i>See the Club inside</a></li>  
						<li><a href="#"><i class="entypo-right-open-mini" ></i>Testimonials Videos</a></li>  
						<li><a href="#"><i class="entypo-right-open-mini" ></i>Meet the Trainers of the Club</a></li>  
						<li><a href="#"><i class="entypo-right-open-mini" ></i>Personal Coaching Video</a></li>                      
					</ul>
				</div>
				<div class="col-md-3">
					<h3>Newsletter</h3>
					<p>Suscribe to our ahasellus sit amet justo sapien and raesent bibendum you will get nim non fringilla vestibulum.</p>
					<form method="post" action="//" role="form">
						<div class="form-group">
							<label for="name" class="sr-only">Your Name</label>
							<input type="text" name="name" class="form-control" id="name" placeholder="Your name">
						</div>
						<div class="form-group">
							<label for="email" class="sr-only">Email address</label>
							<input type="email" name="email" class="form-control" id="email" placeholder="Enter email">
						</div>
						<button class="button-gym" >Suscribe now</button>

					</form>
				</div>
				<div class="col-md-3">
					<h3>Get Social</h3>
					<p>Follow us on the Social Networks to let all the news and win disccounts!</p>
					<ul class="social" >
						<li><a href="#"><i class="entypo-facebook" ></i></a></li>
						<li><a href="#"><i class="entypo-twitter" ></i></a></li>
						<li><a href="#"><i class="entypo-linkedin" ></i></a></li>
						<li><a href="#"><i class="entypo-play" ></i></a></li>
						<li><a href="#"><i class="entypo-tumblr" ></i></a></li>
						<li><a href="#"><i class="entypo-gplus" ></i></a></li>
						<li><a href="#"><i class="entypo-pinterest-circled" ></i></a></li>
					</ul>
				</div>                
			</div>
		</div>
		<div class="copyright" >
			<div class="container">
				<p class="pull-left" >&copy; All rights reserved. Gym Website by <a href="#">Demo</a></p>
				<ul class="main-links pull-right" >
					<li><a href="#">Home</a></li>
					<li><a href="#">Classes</a></li>
					<li><a href="#">Trainers</a></li>
					<li><a href="#">Club</a></li>
					<li><a href="#">News</a></li>
					<li><a href="#">Price</a></li>
				</ul>
			</div>
		</div>           
	</footer>
	<!-- End footer -->


	<a href="#" class="scrollup"><i class="entypo-up-open"></i></a>      



	<!-- Javascript Files -->
	<!-- jQuery -->
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js" type="text/javascript" ></script>
	
	    
    <!-- Respond.j media queries for IE8 -->
    <?php echo js('respond.min.js'); ?>
    
	<!-- Bootstrap-->
	<?php echo js('bootstrap.min.js'); ?>
 
	<!-- Easing -->
	<?php echo js('jquery.easing.min.js'); ?>

	<!-- Placeholder.js http://widgetulous.com/placeholderjs/ -->
	<?php echo js('placeholder.js'); ?>

    <!-- Retina.js -->
    <?php echo js('retina.js'); ?>
    
	<!-- jQuery REVOLUTION Slider  -->
	<?php echo js('rs-plugin/pluginsources/jquery.themepunch.plugins.min.js'); ?>
	<?php echo js('rs-plugin/js/jquery.themepunch.revolution.min.js'); ?>

	<!-- Custom site js-->
	<?php echo js('script.js'); ?>
	<!-- End Javascript Files -->
</body>
</html>