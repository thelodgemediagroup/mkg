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
								<?php /*
								<h1 class="logo">
									<a class="navbar-brand" href="<?php echo base_url(); ?>">
										<img src="<?php echo img_path('redesign/logo.jpg'); ?>" alt="Logo" />
									</a>
								</h1>
								*/ ?>
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
										<a href="<?php echo base_url('blog'); ?>">News</a>
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
