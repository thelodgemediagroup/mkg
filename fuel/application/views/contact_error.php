<article class="article-container">
	<div class="container" >
		<div class="row" >
			<div class="col-md-5 col-md-offset-3 contact" >
				<?php echo validation_errors(); ?>
				<?php echo form_open('contact/email'); ?>
				  <div class="form-group">
					<label for="contact_name"><i class="entypo-user" ></i> Name <em>(required)</em></label>
					<input type="text" name="name" class="form-control" id="contact_name" value="<?php echo set_value('name'); ?>">
				  </div>
				  <div class="form-group">
					<label for="contact_e-mail"><i class="entypo-mail" ></i> E-mail <em>(required)</em></label>
					<input type="email" name="email" class="form-control" id="contact_e-mail" value="<?php echo set_value('email'); ?>">
				  </div>
				  <div class="form-group">
					<label for="contact_subject"><i class="entypo-comment" ></i> Subject <em>(required)</em></label>
					<input type="text" name="subject" class="form-control" id="contact_subject" value="<?php echo set_value('subject'); ?>">
				  </div>
				  <div class="form-group">
					<label for="contact_message"><i class="entypo-pencil" ></i> Message</label>
					<textarea id="contact_message" name="message" class="form-control" rows="6" value="<?php echo set_value('message'); ?>"></textarea>
				  </div>

				  <button type="submit" class="btn btn-default">contact us</button>
				</form>
			</div>
		</div>
	</div>
</article>