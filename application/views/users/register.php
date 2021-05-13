
	<div class="row">
		<div class="col-md-4"></div>
		<div class="col-md-4">
			<h1 class="text-center"><?php echo $this->lang->line('create_title') ?></h1>
			<?php echo validation_errors(); ?>
			<?php echo form_open('users/register'); ?>
                <div class="form-group">
                    <label><?php echo $this->lang->line('create_name') ?></label>
                    <input type="text" class="form-control" name="name" placeholder="<?php echo $this->lang->line('placeholder_name') ?>">
                </div>
                <div class="form-group">
                    <label><?php echo $this->lang->line('create_email') ?></label>
                    <input type="email" class="form-control" name="email" placeholder="<?php echo $this->lang->line('placeholder_email') ?>">
                </div>
                <div class="form-group">
                    <label><?php echo $this->lang->line('create_username') ?></label>
                    <input type="text" class="form-control" name="username" placeholder="<?php echo $this->lang->line('placeholder_username') ?>">
                </div>
                <div class="form-group">
                    <label><?php echo $this->lang->line('create_password') ?></label>
                    <input type="password" class="form-control" name="password" placeholder="<?php echo $this->lang->line('placeholder_password') ?>">
                </div>
                <div class="form-group">
                <label><?php echo $this->lang->line('password_confirm') ?></label>
                <input type="password" class="form-control" name="password2" placeholder="<?php echo $this->lang->line('placeholder_confirm_password') ?>">
                </div>

                <button type="submit" class="btn btn-success btn-block"><?php echo $this->lang->line('submit') ?></button>
            <?php echo form_close(); ?>
		</div>
	</div>