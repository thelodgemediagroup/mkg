<?php $CI->load->library('gcalendar/gcalendar'); ?>
<?php $cal = $CI->gcalendar->get_calendar(); ?>

		<article class="article-container">      
			<div class="container" >
			
				<div class="row" >
				  <div class="col-xs-12">
				  <h2 class="headers">MKGD Schedule</h2>
				  <span class="line" >
					  <span class="sub-line" ></span>
				  </span>
				  </div>
				</div>
							
				<div class="row" >
					<div class="col-xs-12">
						<div class="gce-page-grid">
							<?php echo $cal; ?>
						</div>
					</div>
				</div>
			
			</div>            
		</article>  
		<!-- end Table -->
	</section>
