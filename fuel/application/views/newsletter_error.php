<article class="article-container">
	<div class="container" >
		<div class="row">
			<div class="col-md-4 col-md-offset-4">
				<h3>Newsletter</h3>
				<?php echo validation_errors(); ?>

				<?php echo form_open('newsletter'); ?>

					<div class="form-group">
						<label for="name" class="sr-only">Your Name</label>
						<input type="text" name="name" class="form-control" id="name" placeholder="Your name" value="<?php echo set_value('name'); ?>">
					</div>
					<div class="form-group">
						<label for="email" class="sr-only">Email address</label>
						<input type="email" name="email" class="form-control" id="email" placeholder="Enter email" value="<?php echo set_value('email'); ?>">
					</div>
					<button type="submit" class="button-gym" >Suscribe now</button>

				</form>
			</div>
		</div>
	</div>
</article>