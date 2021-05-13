<div class="row">
	<div class="col-md-4"></div>
	<div class="col-md-4">
		<h1 class="text-center"><?php echo $this->lang->line('create_title') ?></h1>
		<?php echo validation_errors(); ?>
		<?php echo form_open('teams/create'); ?>
		<div class="form-group">
			<label for="inputName"><?php echo $this->lang->line('create_name') ?></label>
			<input type="text" class="form-control" id="inputName"  name="name" placeholder="<?php echo $this->lang->line('placeholder_name') ?>">
		</div>
		<div class="form-group">
			<label for="inputTeamchef"><?php echo $this->lang->line('create_principal') ?></label>
			<input type="text" class="form-control" id="inputTeamchef" name="teamchef" placeholder="<?php echo $this->lang->line('placeholder_principal') ?>">

		<div class="form-group">
			<label for="inputMotor"><?php echo $this->lang->line('create_engine') ?></label>
			<input type="text" class="form-control" id="inputMotor" name="motor" placeholder="<?php echo $this->lang->line('placeholder_engine') ?>">
		</div>
			<div class="form-group">
				<label for="inputSitz"><?php echo $this->lang->line('create_place') ?></label>
				<input type="text" class="form-control" id="inputSitz" name="sitz" placeholder="<?php echo $this->lang->line('placeholder_place') ?>">
			</div>
		<button type="submit" class="btn btn-success"><?php echo $this->lang->line('submit') ?></button>
	</div>
	</div>
</div>
</form>
