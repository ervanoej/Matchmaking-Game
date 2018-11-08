<!DOCTYPE html>

<html>

<head>

	<?php echo $this->Html->charset(); ?>

	<title>

		<?php echo "Matchmaking" ?>

	</title>

</head>

<body>

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.19/css/dataTables.bootstrap4.min.css">


<?php


		// echo $this->Html->css('cake.generic');
		echo $this->Html->css('bootstrap.min');
		echo $this->Html->css('mdb.min');
		echo $this->Html->css('mdb.lite.min');
		echo $this->Html->css('style');
		echo $this->Html->css('datatables.min');


		echo $this->Html->script('bootstrap.min');
		echo $this->Html->script('jquery-3.3.1.min');
		echo $this->Html->script('mdb.min');
		echo $this->Html->script('popper.min');
		echo $this->Html->script('datatables.min');

		echo $this->fetch('css');
		echo $this->fetch('script');

?>

<style type="text/css">

	.btn{

		border-radius: 10px;

	}

</style>
	
	<?php echo $this->Flash->render(); ?>

	<?php echo $this->fetch('content'); ?>

</body>



</html>
