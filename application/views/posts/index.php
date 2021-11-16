<h2><?php echo $this->lang->line('title') ?></h2>

<p><a class="btn btn-success" href="<?php echo site_url('/posts/create');?>"><?php echo $this->lang->line('create_news') ?></a></p>

<?php foreach($posts as $post) : ?>
	<?php foreach($users as $user) : ?>
		<?php if($user['id'] == $post['user_id']): ?>

            <div class="card">
                <div class="card-body">
                    <h5 class="card-title"><?php echo $post['title']; ?></h5>
                    <p class="card-text">  <?php echo $post['body']; ?></p>
                    <hr>

                    <div class="container">
                        <div class="row align-items-start">
                            <div class="col">
                                <a class="btn btn-primary" href="<?php echo site_url('/posts/'.$post['id']);?>"><?php echo $this->lang->line('more') ?></a>
                            </div>
                            <div class="col">
                                <a><?php echo $this->lang->line('creator_name') ?><?php echo $user['name']; ?></a>
                            </div>
                            <div class="col">
                                <a><?php echo $this->lang->line('created_date') ?><?php echo $post['created_at']; ?></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <br>


		<?php endif; ?>
	<?php endforeach; ?>
<?php endforeach; ?>
<hr>

<div class="pagination-links">
	<?php echo $this->pagination->create_links(); ?>
</div>
