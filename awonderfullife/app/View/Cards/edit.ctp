<?php
  $this->start('sidebar');
  echo $this->element('sidebar', array('active' => ''));
  $this->end();
?>
<div class="cards form">
<?php echo $this->Form->create('Card', array('enctype' => 'multipart/form-data', 'class' => 'form-horizontal')); ?>
	<fieldset>
		<legend><?php echo __('Edit Card'); ?></legend>
	<?php
		echo $this->Form->input('idcards');
		echo $this->Form->input('name');
		echo $this->Form->input('deck');
		echo $this->Form->input('seriesno', array('label' => 'Series Number', 'helpBlock' => 'The card\'s number within the series'));
		echo $this->Form->input('acquired', array('type' => 'text', 'class' => 'datepicker', 'data-date' => date('Y-m-d'), 'data-date-format' => 'yyyy-mm-dd', 'helpBlock' => "Date card was acquired"));
		echo $this->Form->input('worth');
		echo $this->Form->input('trading_status', array('type' => 'select', 'options' => $trading_statuses, 'empty' => true));
		//echo $this->Form->input('card', array('type' => 'file'));
	?>
	</fieldset>
<?php echo $this->Form->end(array( 'label' => 'Save', 'class' => 'btn btn-info btn-large')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('Card.idcards')), null, __('Are you sure you want to delete # %s?', $this->Form->value('Card.idcards'))); ?></li>
		<li><?php echo $this->Html->link(__('List Cards'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Decks'), array('controller' => 'decks', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Deck'), array('controller' => 'decks', 'action' => 'add')); ?> </li>
	</ul>
</div>
