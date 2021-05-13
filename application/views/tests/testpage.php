<h4>{test_title}</h4>
<br>
<h5>{encryption_test_title}</h5>
<?php echo form_open('tests/index');?>
<div class="input-group mb-3">
        <input type="text" name="message" class="form-control" placeholder={placeholder} value={message}>
    <div class="input-group-append">
        <button class="btn btn-outline-success" type="submit" id="message">{encrypt_button}</button>
    </div>
</div>
<?php echo form_close(); ?>

<div class="row">
    <div class="col-sm-6">
        <div class="card">
            <div class="card-header">
                {encrypt_title}
            </div>
            <div class="card-body">
                <p class="card-text">{encrypt_message}</p>
            </div>
        </div>
    </div>
    <div class="col-sm-6">
        <div class="card">
            <div class="card-header">
                {decrypt_title}
            </div>
            <div class="card-body">
                <p class="card-text">{decrypt_message}</p>
            </div>
        </div>
    </div>
</div>
<br>
<?php echo $table; ?>