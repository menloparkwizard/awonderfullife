<?php
  $this->start('sidebar');
  echo $this->element('sidebar', array('active' => 'logs_manage'));
  $this->end();
?>
<div class="logs index">
	<h2>Activity Logs</h2>
	<table class="table">
	  <?php foreach($logs as $logIdx => $log): ?>
	  <tr>
	    <td width="15%"><? echo date('d F, Y', strtotime($log['Log']['date'])); ?></td>
		<td><? echo $log['Log']['text']; ?></td>
		<td><?php echo $this->Html->link('<i class="icon-pencil"></i>', array('action' => 'edit', $log['Log']['idlogs']), array('escape' => false, 'alt' => 'Edit')); ?></td>
		<td><?php echo $this->Form->postLink('<i class="icon-remove"></i>', array('action' => 'delete', $log['Log']['idlogs']), array('escape' => false, 'alt' => 'Delete'), "Are you sure?"); ?></td>
	  </tr>
	  <?php endforeach;?>
	</table>
	<br><br>
	<?php echo $this->Html->link('Add Log Entry', array('action' => 'add'), array('class' => 'btn btn-info btn-large')); ?>
</div>
