
<div class="col-md-12">

	<div class="md-form">

		<?php 
		
			echo $this->Session->flash('auth');

			echo $this->Form->create('User'); 
		
		?>

		
		<i class="fa fa-user prefix"></i>
	   
	    <?php 
	    	
	    	echo $this->Form->control('username', ['class' => 'form-control', 'type' => 'text', 'id' => 'username']); 
	    ?>

	    <label for="username">Username <font color="red">*</font></label>

	</div>

	<div class="md-form">    

		<i class="fa fa-lock prefix"></i>
	    
	    <?php
	    	
	    	echo $this->Form->control('password', ['class' => 'form-control', 'type' => 'password', 'id' => 'pass']);
	    
	    ?>

	    <label for="pass">Password <font color="red">*</font></label>

		
	</div>



	<?php 
		
		echo $this->Form->button('Login', ['class' => 'btn btn-outline-success waves-effect btn-md']);
		echo $this->Form->end(); 

	?> 

	or, 

	<?php 
		
		echo $this->Html->link(__('Register'), ['action' => 'add']); 

	?>

</div>