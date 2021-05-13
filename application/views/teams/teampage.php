<h2><?php echo $team['name']; ?></h2>
<hr>

<h4><?php echo $this->lang->line('teamdriver') ?></h4>
<?php foreach($drivers as $driver) : ?>
	<?php if($driver['team_id'] == $team['id']): ?>
		<?php if($this->session->userdata('user_id') == $driver['user_id'] or $driver['user_id'] == 1): ?>

			<?php echo $driver['name'];?>
			<br>

		<?php endif; ?>
	<?php endif; ?>
<?php endforeach; ?>
<hr>

<h4><?php echo $this->lang->line('teamprincipal') ?></h4><?php echo $team['teamchef']; ?><br><hr>
<h4><?php echo $this->lang->line('teamengine') ?></h4><?php echo $team['motor']; ?><br><hr>
<h4><?php echo $this->lang->line('teamplace') ?></h4><?php echo $team['sitz']; ?><br><hr>

<?php if($this->session->userdata('user_id') == 1):?>
	<button type="button" class="btn btn-danger" data-toggle="modal" data-target="#exampleModal">
		<svg width="1.5em" height="1.5em" viewBox="0 0 16 16" class="bi bi-trash" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
			<path d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0V6z"/>
			<path fill-rule="evenodd" d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1v1zM4.118 4L4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4H4.118zM2.5 3V2h11v1h-11z"/>
		</svg>
	</button>


	<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
		<div class="modal-dialog">
			<div class="modal-content">
				<div class="modal-header">
					<h5 class="modal-title" id="exampleModalLabel">Löschen: <?php echo $team['name'];?></h5>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>
				<div class="modal-body">
					Möchten Sie das Team <?php echo $team['name'];?> wirklich löschen?
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-secondary" data-dismiss="modal">Zurück</button>
					<a class="btn btn-danger" href="<?php echo site_url('teams/delete/'.$team['id']);?>">Löschen</a>
				</div>
			</div>
		</div>
	</div>

	<a class="btn btn-primary" href="<?php echo base_url();?>teams/edit/<?php echo $team['id'];?>"><svg width="1.5em" height="1.5em" viewBox="0 0 16 16" class="bi bi-pen-fill" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
			<path fill-rule="evenodd" d="M13.498.795l.149-.149a1.207 1.207 0 1 1 1.707 1.708l-.149.148a1.5 1.5 0 0 1-.059 2.059L4.854 14.854a.5.5 0 0 1-.233.131l-4 1a.5.5 0 0 1-.606-.606l1-4a.5.5 0 0 1 .131-.232l9.642-9.642a.5.5 0 0 0-.642.056L6.854 4.854a.5.5 0 1 1-.708-.708L9.44.854A1.5 1.5 0 0 1 11.5.796a1.5 1.5 0 0 1 1.998-.001z"/>
		</svg></a>
<?php endif;?>
