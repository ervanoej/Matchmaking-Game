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
	<table cellpadding="0" cellspacing="0">
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
	<?php foreach ($users as $user): ?>
	<tr>
		<td><center><?php echo $user['User']['id']; ?>&nbsp;</td>
		<td><center><?php echo $user['User']['username']; ?>&nbsp;</td>
		<td><center><?php echo $user['User']['password']; ?>&nbsp;</td>
		<td><center><?php echo $user['User']['email']; ?>&nbsp;</td>
		<td><center><?php echo $user['User']['phone']; ?>&nbsp;</td>
		<td><center><?php echo $user['User']['role']; ?>&nbsp;</td>

		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $user['User']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $user['User']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $user['User']['id']), array(), __('Are you sure you want to delete # %s?', $user['User']['id'])); ?>
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
