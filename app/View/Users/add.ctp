<!-- <div class="users form"> -->

<?php echo $this->Form->create('User'); ?>

	<fieldset>

		<legend><?php echo __('Add User'); ?></legend>

	<?php

		echo $this->Form->input('username');

		echo $this->Form->input('password');

        echo $this->Form->input('email');

        echo $this->Form->input('phone');

        echo $this->Form->input('role', array('type'=>'hidden', 'value'=>'admin'));

	?>

	</fieldset>

<?php echo $this->Form->end(__('Submit')); ?>



<div>

	<h3><?php echo __('Actions'); ?></h3>
	

	Register your details.

	<p>
	
	<?php
		
		echo $this->Html->link('Cancel', '/users/login', ['class' => 'btn btn-outline-danger waves-effect btn-md']);
	
	?>
</div>
