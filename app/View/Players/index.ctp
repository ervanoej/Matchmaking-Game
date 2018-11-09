<?php

// include 'Header.ctp';

?>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('New User'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('Posts list'), array('controller' => 'Posts', 'action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('Logout'), array('action' => 'logout')); ?></li>
	</ul>
</div>


<div class="users index">
	<h2><?php echo __('Users'); ?></h2>
	<table id="dtBasicExample" class="table table-striped table-bordered" cellspacing="0" width="100%"s>
	<thead>
	<tr>
			<th><center><?php echo $this->Paginator->sort('id'); ?></th>
			<th><center><?php echo $this->Paginator->sort('username'); ?></th>
			<th><center><?php echo $this->Paginator->sort('password'); ?></th>
			<th><center><?php echo $this->Paginator->sort('email'); ?></th>
			<th><center><?php echo $this->Paginator->sort('phone'); ?></th>
			<th><center><?php echo $this->Paginator->sort('role'); ?></th>
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
		<td><center><?php echo $player['Player']['phone']; ?>&nbsp;</td>
		<td><center><?php echo $player['Player']['role']; ?>&nbsp;</td>

		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $user['User']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $user['User']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('class' => 'btn btn-info', 'action' => 'delete', $user['User']['id']), array(), __('Are you sure you want to delete # %s?', $user['User']['id'])); ?>
		</td>
	</tr>
<?php endforeach; ?>
	</tbody>
	</table>
	<p>
	<?php
	echo $this->Paginator->counter(array(
	'format' => __('Page {:page} of {:pages}, showing {:current} records out of {:count} total, starting on record {:start}, ending on {:end}')
	));
	?>	</p>

	<div class="paging">
	<?php
		echo $this->Paginator->prev('< ' . __('previous'), array(), null, array('class' => 'prev disabled'));
		echo $this->Paginator->numbers(array('separator' => ''));
		echo $this->Paginator->next(__('next') . ' >', array(), null, array('class' => 'next disabled'));
	?>
	</div>
</div>


<script type="text/javascript">
  $(document).ready(function () {
  $('#dtBasicExample').DataTable();
})
</script>


<?php

// include 'Footer.ctp';

?>