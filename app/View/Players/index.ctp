<!-- HEADER -->
<div id="header">
	
	<!--Navbar-->
	<nav class="navbar navbar-expand-lg navbar-dark primary-color">

	  <!-- Navbar brand -->
	  <a class="navbar-brand" href="#">Admin</a>

	  <!-- Collapse button -->
	  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#basicExampleNav"
	    aria-controls="basicExampleNav" aria-expanded="false" aria-label="Toggle navigation">
	    <span class="navbar-toggler-icon"></span>
	  </button>

	  <!-- Collapsible content -->
	  <div class="collapse navbar-collapse" id="basicExampleNav">

	    <!-- Links -->
	    <ul class="navbar-nav mr-auto">
	      <li class="nav-item active">
	        <a class="nav-link waves-effect" href="http://localhost/Matchmaking-Game/players">Home
	          <span class="sr-only">(current)</span>
	        </a>
	      </li>
	      
	      
	      <!-- Dropdown -->
	      
	      <li class="nav-item dropdown">
	        <a class="nav-link dropdown-toggle waves-effect" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Ini Dropdown</a>
	        <ul class="dropdown-menu dropdown-primary" aria-labelledby="navbarDropdownMenuLink">
	          <a class="dropdown-item waves-effect" href="#">Hal 1</a>
	          <a class="dropdown-item waves-effect" href="#">Hal 2</a>
	          <a class="dropdown-item waves-effect" href="#">Hal 3</a>
	        </ul>
	      </li>

	    </ul>

      <?php echo $_SESSION['logCheck']; 
            echo $_SESSION['logCheckPlayer'];
       ?>

	    <div class="md-form my-0">
      	  <?php
	      	  
            if (!isset($_SESSION['logCheckPlayer'])) {
	      	  	?> <a href="" class="btn btn-default btn-rounded my-3" data-toggle="modal" data-target="#modalLRForm">LogIn/Register</a>
    	
    	  <?php
	    
	      	  }
	      	  
	      	  else {

	      	  	echo $this->form->postlink('log Out', '/Players/logout', ['class' => 'btn btn-danger waves-effect btn-md my-0'], __('Are you sure want to log out ? ')); 
	      	  }
      	
      	  ?>
      
      </div>
	    <!-- Links -->
	  </div>
	  <!-- Collapsible content -->

	</nav>
	<!--/.Navbar-->

</div>

<!-- /HEADER -->
 <div class="container-fluid">
<div class="users index">
	<p>

<blockquote class="blockquote bq-info animated fadeIn">
  <p class="bq-title"><i class="fa fa-user"> Players datalist</i></p>
  <p>All registered player will appeared on this datatables
  </p>
</blockquote>
  <h2></h2>
	<table id="dtBasicExample" class="table table-striped table-bordered" cellspacing="0" width="100%"s>
	<thead>
	<tr>
			<th><center><?php echo ('id'); ?></th>
			<th><center><?php echo ('username'); ?></th>
			<th><center><?php echo ('password'); ?></th>
			<th><center><?php echo ('name'); ?></th>
			<th><center><?php echo ('birthday'); ?></th>
			<!-- <th><center><?php echo $this->Paginator->sort('role'); ?></th> -->
			<th class="actions"><center><?php echo 'Actions'; ?></th>
	</tr>
	</thead>
	<tbody>
	<?php foreach ($Players as $player): ?>
	<tr>
		<td><center><?php echo $player['Player']['p_ID']; ?>&nbsp;</td>
		<td><center><?php echo $player['Player']['p_username']; ?>&nbsp;</td>
		<td><center><?php echo $player['Player']['p_password']; ?>&nbsp;</td>
		<td><center><?php echo $player['Player']['p_firstname'].$player['Player']['p_lastname']; ?>&nbsp;</td>
		<td><center><?php echo $player['Player']['p_birthday']; ?>&nbsp;</td>
	<!-- 	<td><center><?php echo $player['Player']['role']; ?>&nbsp;</td> -->

		<td class="actions"><center>
			<?php echo $this->Html->link( 'Edit', array('action' => 'edit', $player['Player']['p_ID']), ['class' => 'btn btn-primary waves-effect btn-sm'] ); ?>
			<?php echo $this->Form->postLink( 'Delete', array('class' => 'btn btn-info', 'action' => 'delete', $player['Player']['p_ID']), array('class' => 'btn btn-danger waves-effect btn-sm'), __('Are you sure you want to delete # %s?', $player['Player']['p_ID'])); ?>
		</td>
	</tr>
<?php endforeach; ?>
	</tbody>
	</table>

</div>
</div>

<script type="text/javascript">
  $(document).ready(function () {
  $('#dtBasicExample').DataTable();
})
</script>



<div class="container-fluid">
<p>
  <?php print_r($_SESSION); ?>

</div>



<!--Modal: Login / Register Form-->
<div class="modal fade" id="modalLRForm" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog cascading-modal" role="document">
    <!--Content-->
    <div class="modal-content">

      <!--Modal cascading tabs-->
      <div class="modal-c-tabs">

        <!-- Nav tabs -->
        <ul class="nav nav-tabs md-tabs tabs-2 light-blue darken-3" role="tablist">
          <li class="nav-item">
            <a class="nav-link active" data-toggle="tab" href="#panel7" role="tab"><i class="fa fa-user mr-1"></i>
              Login</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" data-toggle="tab" href="#panel8" role="tab"><i class="fa fa-user-plus mr-1"></i>
              Register</a>
          </li>
        </ul>

        <!-- Tab panels -->
        <div class="tab-content">
          <!--Panel 7-->
          <div class="tab-pane fade in show active" id="panel7" role="tabpanel">

            <!--Body-->
            <div class="modal-body mb-1">
              <div class="md-form form-sm mb-5">

                  <?php 
      
                    echo $this->fetch('login'); 
                    echo $this->Form->create('Player', ['url' => ['controller' => 'Players', 'action' => 'login']]); 
                  
                  ?>

                <i class="fa fa-envelope prefix"></i>
                 <?php 
          
                    echo $this->Form->control('p_username', ['class' => 'form-control', 'type' => 'text', 'id' => 'username']); 
                  ?>

                  <label for="username">Username<!--  <font color="red">*</font> --></label>
              </div>

              <div class="md-form form-sm mb-4">
                <i class="fa fa-lock prefix"></i>
        
                <?php
                  
                  echo $this->Form->control('password', ['class' => 'form-control', 'type' => 'password', 'id' => 'pass']);
                
                ?>

                <label for="pass">Password<!--  <font color="red">*</font> --></label>
              </div>
              <div class="text-center mt-2">
                 <?php 
      
                    echo $this->Form->button('Login', ['class' => 'btn btn-info btn-block my-4 waves-effect']);
                   
                    echo $this->Form->end(); 

                  ?> 
              </div>
            </div>
            <!--Footer-->
            <div class="modal-footer">
              <div class="options text-center text-md-right mt-1">
                <p>Not a member? <a href="#" class="blue-text">Sign Up</a></p>
                <p>Forgot <a href="#" class="blue-text">Password?</a></p>
              </div>
              <button type="button" class="btn btn-outline-info waves-effect ml-auto" data-dismiss="modal">Close</button>
            </div>

          </div>
          <!--/.Panel 7-->

          <!--Panel 8-->
          <div class="tab-pane fade" id="panel8" role="tabpanel">

            <!--Body-->

            <?php 
            	echo $this->fetch('add'); 
            	echo $this->Form->create('Player', [
            		'url' => ['controller' => 'Players', 'action' => 'add']
            	]);

            ?>

            <div class="modal-body">
              <div class="md-form form-sm mb-5">
                 <i class="fa fa-user prefix"></i>
                <?php echo $this->Form->control('p_username', ['class' => 'form-control', 'type' => 'text', 'id' => 'usernameReg']); ?>
                <label for="usernameReg">Username</label>
              </div>

              <div class="md-form form-sm mb-5">
                <i class="fa fa-user prefix"></i>
                <?php echo $this->Form->control('p_firstname', ['class' => 'form-control', 'type' => 'text', 'id' => 'firstnameReg']); ?>
                <label for="firstnameReg">First Name</label>
              </div>

              <div class="md-form form-sm mb-4">
                 <i class="fa fa-user prefix"></i>
                <?php echo $this->Form->control('p_lastname', ['class' => 'form-control', 'type' => 'text', 'id' => 'lastnameReg']); ?>
                <label for="lastnameReg">Last Name</label>
              </div>

              <div class="md-form form-sm mb-4">
                <i class="fa fa-lock prefix"></i>
                <?php echo $this->Form->control('p_password', ['class' => 'form-control', 'type' => 'text', 'id' => 'passReg']); ?>
                <label for="passReg">Password</label>
              </div>

              <div class="md-form form-sm mb-4">
                <i class="fa fa-lock prefix"></i>     
                <?php echo $this->Form->control('p_birthday', ['class' => 'form-control', 'type' => 'date', 'id' => 'birthReg', 'placeholder' => 'birthday']); ?>
                <label for="birthReg"></label>
              </div>

              <div class="text-center form-sm mt-2">
				
        <?php 
        
          echo $this->Form->button('  Register', ['type' => 'submit', 'class' => 'btn btn-primary fa fa-send ml-2']);
        
          $this->Form->end();
        ?>
        
              </div>

            </div>

            <?php  ?>
            <!--Footer-->
            <div class="modal-footer">
              <div class="options text-right">
                <p class="pt-1">Already have an account? <a href="#" class="blue-text">Log In</a></p>
              </div>
              <button type="button" class="btn btn-outline-info waves-effect ml-auto" data-dismiss="modal">Close</button>
            </div>
          </div>
          <!--/.Panel 8-->
        </div>

      </div>
    </div>
    <!--/.Content-->
  </div>
</div>
<!--Modal: Login / Register Form-->