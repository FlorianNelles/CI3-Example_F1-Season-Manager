<div class="row">
	<div class="col-md-4"></div>
	<div class="col-md-4">
		<h1 class="text-center"><?php echo $this->lang->line('create_title') ?></h1>

		<?php echo validation_errors(); ?>

		<?php echo form_open_multipart('drivers/create'); ?>
		<div class="form-group">
			<label for="inputName"><?php echo $this->lang->line('drivername_create') ?></label>
			<input type="text" class="form-control" id="inputName"  name="name" placeholder="Name">
		</div>
		<div class="form-group">
			<label for="inputStartnr"><?php echo $this->lang->line('drivernumer_create') ?></label>
			<input type="text" class="form-control" id="inputStartnr" name="startnr" placeholder="99">
		</div>
		<div class="form-group">
			<label for="inputTeam"><?php echo $this->lang->line('team_create') ?></label>
			<select class="form-control" id="inputTeam" name="team">
				<option selected value="12"><?php echo $this->lang->line('choose') ?></option>
				<?php foreach ($teams as $team) : ?>

					<option value="<?php echo $team['id'];?>"><?php echo $team['name'];?></option>

				<?php endforeach; ?>
			</select>
		</div>
		<div class="form-group">
			<label for="inputPoints"><?php echo $this->lang->line('points_create') ?></label>
			<input type="text" class="form-control" id="inputPoints" name="points" placeholder="00">
		</div>

        <div class="form-group">
            <label>Upload Image</label>
            <input type="file" name="userfile" size="2048">
        </div>


		<button type="submit" class="btn btn-success"><?php echo $this->lang->line('submit') ?></button>
	</div>
</div>
</form>
