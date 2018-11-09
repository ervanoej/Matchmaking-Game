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
	        <a class="nav-link waves-effect" href="http://localhost/Matchmaking-Game/users">Home
	          <span class="sr-only">(current)</span>
	        </a>
	      </li>
	      <li class="nav-item">
	        <a class="nav-link waves-effect" href="#" data-toggle="modal" data-target="#modalContactForm">New Admin</a>
	      </li>
	      <li class="nav-item">
	        <a class="nav-link waves-effect" href="#">Pricing</a>
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

	    <div class="md-form my-0">
      	  <?php echo $this->form->postlink('log Out', '/Users/logout', ['class' => 'btn btn-danger waves-effect btn-md my-0'], __('Are you sure want to log out ? ')); ?>
      </div>
	    <!-- Links -->
	  </div>
	  <!-- Collapsible content -->

	</nav>
	<!--/.Navbar-->

</div>

<!-- /HEADER -->

<!-- CONTENT -->

<div class="container-fluid">
	<p>

<blockquote class="blockquote bq-info animated fadeIn">
  <p class="bq-title"><i class="fa fa-user"> Admin datalist</i></p>
  <p>All registered admin will appeared on this datatables
  </p>
</blockquote>

<h2></h2>

<div class="table-responsive">
	<table id="dtBasicExample" class="table table-striped" cellspacing="0" width="100%">
		<thead>
			<tr>
					<th><center><?php echo ('No'); ?></th>
					<th><center><?php echo ('Id'); ?></th>
					<th><center><?php echo ('Username'); ?></th>
					<!-- <th><center><?php echo $this->Paginator->sort('password'); ?></th> -->
					<th><center><?php echo ('E-mail'); ?></th>
					<th><center><?php echo ('Phone'); ?></th>
					<th><center><?php echo ('Role'); ?></th>
					<th class="actions"><center><?php echo 'Actions'; ?></th>
			</tr>
		</thead>
		<tbody>
			<?php 
			$no = 0;
			foreach ($users as $user): 
				$no++;
				?>
				<tr>
					<td><center><?php echo $no; ?></td>
					<td><center><?php echo $user['User']['id']; ?></td>
					<td><center><?php echo $user['User']['username']; ?></td>
					<!-- <td><center><?php echo $user['User']['password']; ?></td> -->
					<td><center><?php echo $user['User']['email']; ?></td>
					<td><center><?php echo $user['User']['phone']; ?></td>
					<td><center><?php echo $user['User']['role']; ?></td>

					<td><center>
						
						<?php echo $this->Html->link( 'Edit', 'edit/'.$user["User"]["id"] ,['class' => 'btn btn-primary waves-effect btn-sm']); ?>
						
						<?php echo $this->Form->postLink( 'Delete', 'delete/'. $user['User']['id'] , array('class'=>'btn btn-danger waves-effect btn-sm'), __('Are you sure you want to delete # %s?')); ?>
					
					</td>
				</tr>
			<?php endforeach; ?>
		</tbody>
	</table>
</div>

</div>

<!-- /CONTENT -->

<div id="footer">
	
	<footer class="page-footer font-small blue">

	  <div class="footer-copyright text-center py-3">© 2018 Copyright:
	    
	    <a href="#"> Matchmaking 1.0</a>

	  
	  </div>

	</footer>

</div>


<!-- MODAL -->


<div class="modal fade" id="modalContactForm" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
<!--Modal: Contact form-->
<div class="modal-dialog cascading-modal" role="document">

    <!--Content-->
    <div class="modal-content">

        <!--Header-->
        <div class="modal-header primary-color white-text">
            <h4 class="title">
                <i class="fa fa-pencil"></i> New Admin form</h4>
            <button type="button" class="close waves-effect waves-light" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">×</span>
            </button>
        </div>
        <!--Body-->
        <div class="modal-body">

        	<?php 

        	// $this->users('add');
        	echo $this->fetch('add');

        	echo $this->Form->create('User', array(
        		'url' => ['controller' => 'users', 'action' => 'add']
        	)); ?>
            <!-- Material input username -->
            <div class="md-form form-sm">
                <i class="fa fa-user prefix"></i>
                <?php echo $this->Form->control('username', ['class' => 'form-control', 'type' => 'text', 'id' => 'usernameReg']); ?>
                <label for="usernameReg">Username</label>
            </div>

            <!-- Material input password -->
            <div class="md-form form-sm">
                <i class="fa fa-lock prefix"></i>
                <?php echo $this->Form->control('password', ['class' => 'form-control', 'type' => 'password', 'id' => 'passwordReg']); ?>
                <label for="passwordReg">Password</label>
            </div>

            <!-- Material input email -->
            <div class="md-form form-sm">
                <i class="fa fa-envelope prefix"></i>
                <?php echo $this->Form->control('email', ['class' => 'form-control', 'type' => 'email', 'id' => 'emailReg', 'pattern' => '[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$']); ?>
                <label for="emailReg">E-mail</label>
            </div>

            <!-- Material textarea message -->
            <div class="md-form form-sm">
                <i class="fa fa-phone prefix"></i>
                <?php echo $this->Form->control('phone', ['class' => 'form-control', 'type' => 'text', 'id' => 'phoneReg']);

                	 echo $this->Form->input('role', array('type'=>'hidden', 'value'=>'admin'));
                 ?>
                <label for="phoneReg">Phone Number</label>
            </div>

            <div class="text-center mt-4 mb-2">
            	<?php echo $this->Form->button('  Register', ['id' => 'submit', 'class' => 'btn btn-primary fa fa-send ml-2']) ?>
                <!-- <button class="btn btn-primary">Send -->
                  <!--   <i class="fa fa-send ml-2 prefix"></i> -->
                    <?php $this->Form->end(); ?>
                <!-- </button> -->
            </div>

        </div>
    </div>
    <!--/.Content-->
</div>
<!--/Modal: Contact form-->
</div>

<!-- /MODAL -->












<!-- 

<div class="users form">

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

</div>

<div>

	<h3><?php echo __('Actions'); ?></h3>
	

	Register your details.

	<p>
	
	<?php
		
		echo $this->Html->link('Cancel', '/users/login', ['class' => 'btn btn-outline-danger waves-effect btn-md']);
	
	?>
</div>
 -->