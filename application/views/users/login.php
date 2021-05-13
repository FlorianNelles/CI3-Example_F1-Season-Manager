<?php echo form_open('users/login');?>
	<div class="row">
		<div class="col-md-4"></div>
		<div class="col-md-4">
			<h1 class="text-center"><?php echo $this->lang->line('login_title') ?></h1>
			<div class="form_group">
				<input type="text" name="username" class="form-control" placeholder="<?php echo $this->lang->line('placeholder_username') ?>" required autofocus>
			</div>
			<br>
			<div class="form_group">
				<input type="password" name="password" class="form-control" placeholder="<?php echo $this->lang->line('placeholder_password') ?>" required autofocus>
			</div>
			<br>
			<button type="submit" class="btn btn-primary btn-block"><?php echo $this->lang->line('login_title') ?></button>
		</div>
	</div>


<?php echo form_close(); ?>
