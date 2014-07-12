
<?php
		$CI->load->library('Gcalendar/gcalendar');
		
		$events = $CI->gcalendar->get_event_list($event_class);
?>
<div class="col-md-4">
						<div class="panel panel-gym">
							<div class="panel-heading">
								<h3 class="panel-title">Class Details</h3>
							</div>
							<div class="panel-body">
								<ul class="custom-icon-list" >
									<li><i class="entypo-user" ></i>Teacher: Kurt Cornwell</li>
									<?php echo $events; ?>
								</ul>
							</div>
							<div class="panel-footer"><a href="<?php echo base_url('contact'); ?>">Registration</a></div>
						</div>
					</div>
				</div>
			</div>
		</article>
		<!-- end Trainer Profile -->
	</section>
	<!-- end content -->
