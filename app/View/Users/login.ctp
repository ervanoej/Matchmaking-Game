<center>

	<?php

			echo $this->Session->flash('auth');

	?>

<!-- <div class="container"> -->

	<div class="col-md-6">

		<?php 
			
				// echo $this->Session->flash('auth');

				echo $this->Form->create('User', ['class' => 'text-center border border-light p-5']); 
			
			?>

	   <p class="h4 mb-4">Sign in</p>

	   <div class="md-form">

			<?php 
			

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
			
			echo $this->Form->button('Login', ['class' => 'btn btn-info btn-block my-4 waves-effect']);
		 
			echo $this->Form->end(); 

		?> 

	</div>
<!-- </div> -->