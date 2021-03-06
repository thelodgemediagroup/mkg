	<!-- Footer -->
	<footer>
		<div class="container" >
			<div class="row misc">
				<div class="col-md-3" >
					<h3>About MKGD</h3>
					<div>
					MKG DETROIT Martial Art &amp; Functional Fitness<br/><br/>
					Martial Art - Kickboxing - <br/>Yoga - Self Protection<br/><br/>
					Train Hard.&nbsp;&nbsp;Live Well.&nbsp;&nbsp;Keep Moving<br/><br/>
					</div>
					<ul class="about" >
						<li><i class="entypo-location" ></i></li>
						<li><i class="entypo-mobile" ></i>1-248-820-5MKG</li>
						<li><i class="entypo-mail" ></i><a href="mailto:info@mkgdetroit.com" class="light-hover">info@mkgdetroit.com</a></li>
						<li><i class="entypo-clock" ></i></li>
					</ul>
				</div>
				<div class="col-md-3">
					<h3>Useful Links</h3>
					<ul class="links" >
						<li><a href="<?php echo base_url('about'); ?>"><i class="entypo-right-open-mini" ></i>About MKGD</a></li>
						<li><a href="<?php echo base_url('about/staff/'); ?>"><i class="entypo-right-open-mini" ></i>Meet the Staff</a></li>
						<li><a href="<?php echo base_url('classes'); ?>"><i class="entypo-right-open-mini" ></i>Explore Our Classes</a></li>
						<li><a href="https://clients.mindbodyonline.com/classic/ws?studioid=197335&stype=-7&sTG=22&sVT=6&sView=week&sLoc=1" target="_blank"><i class="entypo-right-open-mini" ></i>Register for Classes</a></li>
						<li><a href="<?php echo base_url('news'); ?>"><i class="entypo-right-open-mini" ></i>MKGD News</a></li>
						<li><a href="<?php echo base_url('schedule'); ?>"><i class="entypo-right-open-mini" ></i>MKGD Schedule</a></li>
					</ul>
				</div>
				<div class="col-md-3">
					<h3>Newsletter</h3>
					<p>Suscribe to our newsletter and stay current on our course offerings and hot deals throughout the year.</p>

					<?php echo form_open('newsletter'); ?>

						<div class="form-group">
							<label for="name" class="sr-only">Your Name</label>
							<input type="text" name="name" class="form-control" id="name" placeholder="Your name">
						</div>
						<div class="form-group">
							<label for="email" class="sr-only">Email address</label>
							<input type="email" name="email" class="form-control" id="email" placeholder="Enter email">
						</div>
						<button class="button-gym" >Subscribe now</button>

					</form>
				</div>
				<div class="col-md-3">
					<h3>Get Social</h3>
					<p>Follow us on the Social Networks for news and special offers.</p>
					<ul class="social" >
						<li><a href="https://www.facebook.com/MKGDetroit" target="_blank"><i class="entypo-facebook" ></i></a></li>
						<li><a href="https://twitter.com/MKGDetroit" target="_blank"><i class="entypo-twitter" ></i></a></li>
					</ul>
				</div>
			</div>
		</div>
		<div class="copyright" >
			<div class="container">
				<p class="pull-left" >&copy; MKG Detroit <?php echo date('Y'); ?>. All rights reserved.</a></p>
				<ul class="main-links pull-right" >
					<li><a href="<?php echo base_url(); ?>">Home</a></li>
					<li><a href="<?php echo base_url('classes'); ?>">Classes</a></li>
					<li><a href="<?php echo base_url('staff'); ?>">Staff</a></li>
					<li><a href="<?php echo base_url('about'); ?>">About</a></li>
					<li><a href="<?php echo base_url('schedule'); ?>">Schedule</a></li>
					<li><a href="<?php echo base_url('contact'); ?>">Contact</a></li>
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

	<?php //if (current_url() == base_url()) : ?>
		<!-- jQuery REVOLUTION Slider  -->
		<?php echo js('rs-plugin/pluginsources/jquery.themepunch.plugins.min.js'); ?>
		<?php echo js('rs-plugin/js/jquery.themepunch.revolution.min.js'); ?>
	<?php //endif ?>

	<?php if (current_url() == base_url('classes/')) : ?>
		<!-- needed to work Isotope -->
		<script src="http://code.jquery.com/jquery-migrate-1.2.1.js"></script>
		<!-- Isotope -->
		<?php echo js('jquery.isotope.min.js'); ?>
	<?php endif ?>

	<?php if (current_url() == base_url('contact')) : ?>
		<!-- Gmaps -->
		<script type="text/javascript" src="http://maps.google.com/maps/api/js?sensor=true" ></script>
		<?php echo js('gmaps.js'); ?>
	<?php endif ?>

	<!-- Custom site js-->
	<?php echo js('script.js'); ?>

	<?php //echo js('jquery-qtip.js'); ?>
	<script src="http://cdn.jsdelivr.net/qtip2/2.2.0/jquery.qtip.min.js" type="text/javascript"></script>

	<?php echo js('gce-script.js'); ?>
	<!-- End Javascript Files -->
