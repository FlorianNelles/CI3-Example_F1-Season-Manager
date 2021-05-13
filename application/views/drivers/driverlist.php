<h2><?php echo $this->lang->line('your_driver') ?></h2>
<p><a class="btn btn-success" href="<?php echo site_url('/drivers/create');?>"><?php echo $this->lang->line('driver_create') ?></a></p>

<table class="table">
	<thead>
	<tr>
		<th scope="col"><?php echo $this->lang->line('pos') ?></th>
		<th scope="col"><?php echo $this->lang->line('points') ?></th>
		<th scope="col"><?php echo $this->lang->line('name') ?></th>
		<th scope="col"><?php echo $this->lang->line('team') ?></th>
		<th scope="col"><?php echo $this->lang->line('number') ?></th>
		<th scope="col"><?php echo $this->lang->line('profile') ?></th>
		<th scope="col"><?php echo $this->lang->line('edit') ?></th>
	</tr>
	</thead>
	<tbody>

	<?php $i = 1; ?>
	<?php foreach($drivers as $driver) : ?>
		<tr>
			<?php if($driver['user_id']== $this->session->userdata('user_id')):?>
				<th scope="row"><?php echo $i; ?></th>
				<td><?php echo $driver['points']; ?></td>
				<td><?php echo $driver['name']; ?></td>

				<?php foreach ($teams as $team) : ?>
					<?php if($driver['team_id'] == $team['id']): ?>

						<td><?php echo $team['name'];?></td>

					<?php endif; ?>
				<?php endforeach; ?>


				<td><?php echo $driver['startnr']; ?></td>
				<td><a class="btn btn-secondary" href="<?php echo site_url('/drivers/'.$driver['id']);?>">
						<svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-info-circle" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
							<path fill-rule="evenodd" d="M8 15A7 7 0 1 0 8 1a7 7 0 0 0 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z"/>
							<path d="M8.93 6.588l-2.29.287-.082.38.45.083c.294.07.352.176.288.469l-.738 3.468c-.194.897.105 1.319.808 1.319.545 0 1.178-.252 1.465-.598l.088-.416c-.2.176-.492.246-.686.246-.275 0-.375-.193-.304-.533L8.93 6.588z"/>
							<circle cx="8" cy="4.5" r="1"/>
						</svg></a></td>
				<?php if($this->session->userdata('user_id') == $driver['user_id']):?>
				<td><a class="btn btn-primary" href="<?php echo base_url();?>drivers/edit/<?php echo $driver['id'];?>"><svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-pen-fill" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
							<path fill-rule="evenodd" d="M13.498.795l.149-.149a1.207 1.207 0 1 1 1.707 1.708l-.149.148a1.5 1.5 0 0 1-.059 2.059L4.854 14.854a.5.5 0 0 1-.233.131l-4 1a.5.5 0 0 1-.606-.606l1-4a.5.5 0 0 1 .131-.232l9.642-9.642a.5.5 0 0 0-.642.056L6.854 4.854a.5.5 0 1 1-.708-.708L9.44.854A1.5 1.5 0 0 1 11.5.796a1.5 1.5 0 0 1 1.998-.001z"/>
						</svg></a></td>
				<?php else: ?>
					<td><a class="btn btn-outline-secondary" href="#"><svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-pen-fill" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
								<path fill-rule="evenodd" d="M13.498.795l.149-.149a1.207 1.207 0 1 1 1.707 1.708l-.149.148a1.5 1.5 0 0 1-.059 2.059L4.854 14.854a.5.5 0 0 1-.233.131l-4 1a.5.5 0 0 1-.606-.606l1-4a.5.5 0 0 1 .131-.232l9.642-9.642a.5.5 0 0 0-.642.056L6.854 4.854a.5.5 0 1 1-.708-.708L9.44.854A1.5 1.5 0 0 1 11.5.796a1.5 1.5 0 0 1 1.998-.001z"/>
							</svg></a></td>
				<?php endif;?>
			<?php $i++;endif;?>
		</tr>
		<?php endforeach; ?>

	</tbody>
</table>
<br>

<?php if($this->session->userdata('user_id')!= 1):?>
<h2><?php echo $this->lang->line('official_driver') ?></h2>
<table class="table">
	<thead>
	<tr>
		<th scope="col"><?php echo $this->lang->line('pos') ?></th>
		<th scope="col"><?php echo $this->lang->line('points') ?></th>
		<th scope="col"><?php echo $this->lang->line('name') ?></th>
		<th scope="col"><?php echo $this->lang->line('team') ?></th>
		<th scope="col"><?php echo $this->lang->line('number') ?></th>
		<th scope="col"><?php echo $this->lang->line('profile') ?></th>
		<th scope="col"><?php echo $this->lang->line('edit') ?></th>
	</tr>
	</thead>
	<tbody>

	<?php $i = 1; ?>
	<?php foreach($drivers as $driver) : ?>
		<tr>
			<?php if($driver['user_id']== 1):?>
				<th scope="row"><?php echo $i; ?></th>
				<td><?php echo $driver['points']; ?></td>
				<td><?php echo $driver['name']; ?></td>

				<?php foreach ($teams as $team) : ?>
					<?php if($driver['team_id'] == $team['id']): ?>

						<td><?php echo $team['name'];?></td>

					<?php endif; ?>
				<?php endforeach; ?>

				<td><?php echo $driver['startnr']; ?></td>
				<td><a class="btn btn-secondary" href="<?php echo site_url('/drivers/'.$driver['id']);?>">
						<svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-info-circle" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
							<path fill-rule="evenodd" d="M8 15A7 7 0 1 0 8 1a7 7 0 0 0 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z"/>
							<path d="M8.93 6.588l-2.29.287-.082.38.45.083c.294.07.352.176.288.469l-.738 3.468c-.194.897.105 1.319.808 1.319.545 0 1.178-.252 1.465-.598l.088-.416c-.2.176-.492.246-.686.246-.275 0-.375-.193-.304-.533L8.93 6.588z"/>
							<circle cx="8" cy="4.5" r="1"/>
						</svg></a></td>
				<?php if($this->session->userdata('user_id') == $driver['user_id']):?>
					<td><a class="btn btn-primary" href="<?php echo base_url();?>drivers/edit/<?php echo $driver['id'];?>"><svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-pen-fill" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
								<path fill-rule="evenodd" d="M13.498.795l.149-.149a1.207 1.207 0 1 1 1.707 1.708l-.149.148a1.5 1.5 0 0 1-.059 2.059L4.854 14.854a.5.5 0 0 1-.233.131l-4 1a.5.5 0 0 1-.606-.606l1-4a.5.5 0 0 1 .131-.232l9.642-9.642a.5.5 0 0 0-.642.056L6.854 4.854a.5.5 0 1 1-.708-.708L9.44.854A1.5 1.5 0 0 1 11.5.796a1.5 1.5 0 0 1 1.998-.001z"/>
							</svg></a></td>
				<?php else: ?>
					<td><a class="btn btn-outline-secondary" href="#"><svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-pen-fill" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
								<path fill-rule="evenodd" d="M13.498.795l.149-.149a1.207 1.207 0 1 1 1.707 1.708l-.149.148a1.5 1.5 0 0 1-.059 2.059L4.854 14.854a.5.5 0 0 1-.233.131l-4 1a.5.5 0 0 1-.606-.606l1-4a.5.5 0 0 1 .131-.232l9.642-9.642a.5.5 0 0 0-.642.056L6.854 4.854a.5.5 0 1 1-.708-.708L9.44.854A1.5 1.5 0 0 1 11.5.796a1.5 1.5 0 0 1 1.998-.001z"/>
							</svg></a></td>
				<?php endif;?>
			<?php $i++; endif;?>
		</tr>
		<?php endforeach; ?>

	</tbody>
</table>
<?php endif;?>
