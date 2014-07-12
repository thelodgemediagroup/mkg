<?php 

$this->load->view('_blocks/mkg_header');

$this->load->view('_blocks/mkg_topbar');

$this->load->view('_blocks/mkg_navigation');

?>
<section id="news">
<!-- begin Sub Header -->
		<div class="sub-header" >
			<div class="container">
				<div class="row" >
					<ul class="sub-header-container" >
						<li>
							<h3 class="title">MKGD News</h3>
						</li>
						<li>
							<ul class="custom-breadcrumb" >
								<li><h6><a href="/">Home</a></h6></li>
								<li><i class="separator entypo-play" ></i></li>
								<li><h6>News</h6></li>
							</ul>                    
						</li>
					</ul>
				</div>
			</div>
		</div>

<?php

$current_post = $this->fuel->blog->current_post();
if (isset($current_post) AND !$is_home)
{
	fuel_set_var('canonical', $post->url);	
}
?>
	<!-- begin News -->
	<article class="article-container">
		<div class="container" >
			<div class="row" >
				<!-- begin Main Colum -->
				<div class="col-sm-9">
					<?php echo fuel_var('body', ''); ?>
				</div>
				
				<aside class="col-sm-3 sidebar">
					<?php echo $this->fuel->blog->sidemenu(array('categories', 'search'))?>
				</aside>
				<!-- end Sidebar -->
			</div>
		</div>
	</article>
	<!-- end News -->
				
</section>
<?php $this->load->view('_blocks/mkg_footer')?>