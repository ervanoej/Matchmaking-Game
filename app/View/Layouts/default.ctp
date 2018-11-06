<!DOCTYPE html>

<html>

<head>

	<?php echo $this->Html->charset(); ?>

	<title>

		<?php echo "Matchmaking" ?>

	</title>

</head>

<body style="background-color: #003300 ">

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

<?php

		echo $this->Html->script('bootstrap.min');
		echo $this->Html->script('jquery-3.3.1.min');
		echo $this->Html->script('mdb.min');
		echo $this->Html->script('popper.min');

		echo $this->Html->css('cake.generic');
		echo $this->Html->css('bootstrap.min');
		echo $this->Html->css('mdb.min');
		echo $this->Html->css('style');

		echo $this->fetch('css');
		echo $this->fetch('script');

?>
	
	<style type="text/css">
	
		.btn{

			border-radius: 15px;

		}

	</style>

	<div id="container">
	
		<div id="header" style="color: white">
	
			<h1 style="background-color: #003300"><font size="4">Dashboard Admin</font></h1>
	
			<?php if(!isset($_SESSION['username'])){
	
					// $this->referer();
	
					echo "Not login";

				  }
	
				  else {
	
				  	echo $_SESSION['username'];
	
				  }
				   
			?>
	
		</div>
	
		<div id="content">

			<?php echo $this->Flash->render(); ?>

			<?php echo $this->fetch('content'); ?>

		</div>
	
		<div id="footer">
	
			<p>
	
				<?php echo "Matchmaking v1.0"; ?>
	
			</p>
	
		</div>
	
	</div>

<!-- 	<?php echo $this->element('sql_dump'); ?> -->

</body>

</html>
