<h2><?php echo $this->lang->line('create_title') ?></h2>

<?php echo validation_errors(); ?>

<?php echo form_open_multipart('posts/create'); ?>
<div class="form-group">
	<label><?php echo $this->lang->line('news_title') ?></label>
	<input type="text" class="form-control" name="title" placeholder="<?php echo $this->lang->line('placeholder_title') ?>">
</div>
<div class="form-group">
	<label><?php echo $this->lang->line('news_text') ?></label>
	<textarea id="editor1" class="form-control" name="body" placeholder="<?php echo $this->lang->line('placeholder_text') ?>"></textarea>
</div>


<button type="submit" class="btn btn-success"><?php echo $this->lang->line('submit') ?></button>
</form>

