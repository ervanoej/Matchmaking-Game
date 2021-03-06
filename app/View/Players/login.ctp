
<!-- Players login form -->
	<?php

			echo $this->Session->flash('auth');

	?>
<!-- -->
<div class="card">

  <h5 class="card-header info-color white-text text-center py-4">
    <strong>Sign in</strong>
  </h5>

  <!--Card content-->
  <div class="card-body px-lg-5 pt-0">

    <!-- Form -->
    <form class="text-center" style="color: #757575;">

      <!-- Username -->
      <div class="md-form">
      	<?php     	
			echo $this->Form->control('username', ['class' => 'form-control', 'type' => 'text', 'id' => 'materialLoginFormEmail']); 
		?>
        <label for="materialLoginFormEmail">Username</label>
      </div>

      <!-- Password -->
      <div class="md-form">
        <?php     	
			echo $this->Form->control('password', ['class' => 'form-control', 'type' => 'password', 'id' => 'materialLoginFormPassword']); 
		?>
        <label for="materialLoginFormPassword">Password</label>
      </div>

      <div class="d-flex justify-content-around">
        <div>
          <!-- Remember me -->
          <div class="form-check">
            <input type="checkbox" class="form-check-input" id="materialLoginFormRemember">
            <label class="form-check-label" for="materialLoginFormRemember">Remember me</label>
          </div>
        </div>
        <div>
          <!-- Forgot password -->
          <a href="">Forgot password?</a>
        </div>
      </div>

      <!-- Sign in button -->
      <?php 
			
			echo $this->Form->button('Login', ['class' => 'btn btn-outline-info btn-rounded btn-block my-4 waves-effect z-depth-0', 'type' => 'submit']);
			echo $this->Form->end(); 

	?> 
      <!-- Register -->
      <p>Not a member?
        <a href="add">Register</a>
      </p>

    </form>
    <!-- Form -->

  </div>

</div>
<!-- Material form login -->
