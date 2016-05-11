<div class="container" style="margin-top: 10%;">
	<?php if(isset($pesan)) echo $pesan; ?>
	<?php echo form_open('dummy'); ?>

	<?php echo form_label('Email : '); ?> <?php echo form_error('username'); ?><br />
	<?php echo form_input(array('type' => 'text', 'id' => 'username', 'name' => 'username')); ?><br />

	<?php echo form_label('Password : '); ?> <?php echo form_error('password'); ?><br />
	<?php echo form_input(array('type' => 'password', 'id' => 'password', 'name' => 'password')); ?><br />

	<?php echo form_submit(array('id' => 'submit', 'value' => 'Submit')); ?> 

	<?php echo form_close(); ?>
</div>