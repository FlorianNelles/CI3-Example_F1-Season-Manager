<h2><?php echo $this->lang->line('title') ?></h2>

<p><a class="btn btn-success" href="<?php echo site_url('/posts/create');?>"><?php echo $this->lang->line('create_news') ?></a></p>

<?php foreach($posts as $post) : ?>
	<?php foreach($users as $user) : ?>
		<?php if($user['id'] == $post['user_id']): ?>
			<hr>
			<h3><?php echo $post['title']; ?></h3>

			<small class="post-date"><?php echo $this->lang->line('creator_name') ?>
					<?php echo $user['name']; ?>
				<br>
				<?php echo $this->lang->line('created_date') ?><?php echo $post['created_at']; ?></small>

			<?php echo $post['body']; ?>
			<br><br>
			<p><a class="btn btn-primary" href="<?php echo site_url('/posts/'.$post['id']);?>"><?php echo $this->lang->line('more') ?></a></p>

		<?php endif; ?>
	<?php endforeach; ?>
<?php endforeach; ?>
<hr>

<div class="pagination-links">
	<?php echo $this->pagination->create_links(); ?>
</div>
