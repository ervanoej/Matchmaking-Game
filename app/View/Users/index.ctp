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
	        <a class="nav-link waves-effect" href="http://localhost/Matchmaking-Game/users/add">New Admin</a>
	      </li>
	      <li class="nav-item">
	        <a class="nav-link waves-effect" href="#">Pricing</a>
	      </li>

	      <!-- Dropdown -->
	      
	      <li class="nav-item dropdown">
	        <a class="nav-link dropdown-toggle" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Ini Dropdown</a>
	        <ul class="dropdown-menu dropdown-primary" aria-labelledby="navbarDropdownMenuLink">
	          <a class="dropdown-item waves-effect" href="#">Hal 1</a>
	          <a class="dropdown-item waves-effect" href="#">Hal 2</a>
	          <a class="dropdown-item waves-effect" href="#">Hal 3</a>
	        </ul>
	      </li>

	    </ul>

	    <div class="md-form my-0">
      	  <?php echo $this->form->postlink('log Out', '/users/logout', ['class' => 'btn btn-danger waves-effect btn-md my-0'], __('Are you sure want to log out ? ')); ?>
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

<h2><i class="fa fa-user"> Admin datalist</i></h2>

<div class="table-responsive">
	<table id="dtBasicExample" class="table table-striped" cellspacing="0" width="100%">
		<thead>
			<tr>
					<th><center><?php echo $this->Paginator->sort('No'); ?></th>
					<th><center><?php echo $this->Paginator->sort('id'); ?></th>
					<th><center><?php echo $this->Paginator->sort('username'); ?></th>
					<!-- <th><center><?php echo $this->Paginator->sort('password'); ?></th> -->
					<th><center><?php echo $this->Paginator->sort('email'); ?></th>
					<th><center><?php echo $this->Paginator->sort('phone'); ?></th>
					<th><center><?php echo $this->Paginator->sort('role'); ?></th>
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
						
						<?php echo $this->Form->postLink( 'Delete', 'delete/'. $user['User']['id'] , array('class'=>'btn btn-danger waves-effect btn-sm'), __('Are you sure you want to delete # %s?', $user['User']['id'])); ?>
					
					</td>
				</tr>
			<?php endforeach; ?>
		</tbody>
	</table>
</div>


</div>

<!-- /CONTENT -->

<script type="text/javascript">
  $(document).ready(function () {
  $('#dtBasicExample').DataTable();
  $('.dataTables_length').addClass('bs-select');
});
</script>



<?php

include 'Footer.ctp';

?>