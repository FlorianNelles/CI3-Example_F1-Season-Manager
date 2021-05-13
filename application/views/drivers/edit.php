<div class="row">
	<div class="col-md-4"></div>
	<div class="col-md-4">
		<h1 class="text-center"><?php echo $this->lang->line('edit_title') ?></h1>

		<?php echo validation_errors(); ?>

		<?php echo form_open_multipart('drivers/update/'.$driver['id']); ?>

		<input type="hidden" name="id" value="<?php echo $driver['id']; ?>">

		<div class="form-group">
			<label for="inputName"><?php echo $this->lang->line('drivername_edit') ?></label>
			<input type="text" class="form-control" id="inputName"  name="name" placeholder="Name" value="<?php echo $driver['name'];?>">
		</div>
		<div class="form-group">
			<label for="inputStartnr"><?php echo $this->lang->line('drivernumber_edit') ?></label>
			<input type="text" class="form-control" id="inputStartnr" name="startnr" placeholder="99" value="<?php echo $driver['startnr'];?>">
		</div>
		<div class="form-group">
			<label for="inputTeam"><?php echo $this->lang->line('team_edit') ?></label>
			<select class="form-control" id="inputTeam" name="team">
				<?php foreach ($teams as $team) : ?>
					<?php if($driver['team_id'] == $team['id']): ?>

						<option selected value="<?php echo $team['id'];?>"><?php echo $team['name'];?><?php echo $this->lang->line('currentteam') ?></option>

					<?php else: ?>

						<option value="<?php echo $team['id'];?>"><?php echo $team['name'];?></option>

					<?php endif; ?>
				<?php endforeach; ?>
			</select>
		</div>
		<div class="form-group">
			<label for="inputPoints"><?php echo $this->lang->line('points_edit') ?></label>
			<input type="text" class="form-control" id="inputPoints" name="points" placeholder="00" value="<?php echo $driver['points'];?>">
		</div>

        <div class="form-group">
            <label>Change Image</label>
            <input type="file" name="userfile" size="2048 " value="<?php echo $driver['drivers_image'];?>">
        </div>


		<button type="button" class="btn btn-danger" data-toggle="modal" data-target="#exampleModal">
			<svg width="2em" height="2em" viewBox="0 0 16 16" class="bi bi-trash" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
				<path d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0V6z"/>
				<path fill-rule="evenodd" d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1v1zM4.118 4L4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4H4.118zM2.5 3V2h11v1h-11z"/>
			</svg>
		</button>


		<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
			<div class="modal-dialog">
				<div class="modal-content">
					<div class="modal-header">
						<h5 class="modal-title" id="exampleModalLabel"><?php echo $this->lang->line('delete_title') ?><?php echo $driver['name'];?></h5>
						<button type="button" class="close" data-dismiss="modal" aria-label="Close">
							<span aria-hidden="true">&times;</span>
						</button>
					</div>
					<div class="modal-body">
						<?php echo $this->lang->line('delete_message_1') ?><?php echo $driver['name'];?><?php echo $this->lang->line('delete_message_2') ?>
					</div>
					<div class="modal-footer">
						<button type="button" class="btn btn-secondary" data-dismiss="modal"><?php echo $this->lang->line('cancel') ?></button>
						<a class="btn btn-danger" href="<?php echo site_url('drivers/delete/'.$driver['id']);?>"><?php echo $this->lang->line('delete') ?></a>
					</div>
				</div>
			</div>
		</div>
		<button type="submit" class="btn btn-success"><svg width="2em" height="2em" viewBox="0 0 16 16" class="bi bi-check" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
				<path fill-rule="evenodd" d="M10.97 4.97a.75.75 0 0 1 1.071 1.05l-3.992 4.99a.75.75 0 0 1-1.08.02L4.324 8.384a.75.75 0 1 1 1.06-1.06l2.094 2.093 3.473-4.425a.236.236 0 0 1 .02-.022z"/>
			</svg></button>
	</div>
</div>
</form>
