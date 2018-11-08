
<table id="dtBasicExample" class="table table-striped table-bordered" cellspacing="0" width="100%">
  <thead>
    <tr>
      <th><?php echo $this->Paginator->sort('id'); ?></th>
      <th><?php echo $this->Paginator->sort('username'); ?></th>
      <th><?php echo $this->Paginator->sort('firstname'); ?></th>
      <th><?php echo $this->Paginator->sort('lastname'); ?></th>
      <th><?php echo $this->Paginator->sort('password'); ?></th>
      <th><?php echo $this->Paginator->sort('birthday'); ?></th>
      <th class="actions"><?php echo __('Actions'); ?></th>
  </tr>
  </thead>
  <tbody>
  <?php foreach ($Players as $find): ?>
  <tr>
    <td><?php echo $find['Player']['p_ID']; ?></td>
    <td><?php echo $find['Player']['p_username']; ?></td>
    <td><?php echo $find['Player']['p_firstname']; ?></td>
    <td><?php echo $find['Player']['p_lastname']; ?></td>
    <td><?php echo $find['Player']['p_password']; ?></td>
    <td><?php echo $find['Player']['p_birthday']; ?></td>
    <td class="actions">
      <?php echo $this->Html->link(__('View'), array('action' => 'view', $post['Post']['id'])); ?>
      <?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $post['Post']['id'])); ?>
      <?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $post['Post']['id']), array(), __('Are you sure you want to delete # %s?', $post['Post']['id'])); ?>
    </td>
  </tr>
<?php endforeach; ?>
  </tbody>
</table>


<script type="text/javascript">
  $(document).ready(function () {
  $('#dtBasicExample').DataTable();
  $('.dataTables_length').addClass('bs-select');
})
</script>