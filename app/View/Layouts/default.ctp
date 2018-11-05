<!DOCTYPE html>
<html>
<head>
	<?php echo $this->Html->charset(); ?>
	<title>
		<?php echo "Matchmaking" ?>
	</title>
	<?php
		echo $this->Html->meta('icon');
		echo $this->Html->css('cake.generic');
		echo $this->fetch('meta');
		echo $this->fetch('css');
		echo $this->fetch('script');
	?>
</head>
<body style="background-color: #003300 ">
	<div id="container">
		<div id="header">
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
