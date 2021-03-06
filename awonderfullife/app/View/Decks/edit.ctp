<?php
  $this->start('sidebar');
  echo $this->element('sidebar', array('active' => ''));
  $this->end();
?>
<div class="decks form">
<?php echo $this->Form->create('Deck'); ?>
	<fieldset>
		<legend><?php echo __('Edit Deck'); ?></legend>
	<?php
		echo $this->Form->input('iddecks');
		echo $this->Form->input('name');
		echo $this->Form->input('status');
		echo $this->Form->input('numcards', array('label' => "Number of Cards"));
		echo $this->Form->input('badge');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('Deck.iddecks')), null, __('Are you sure you want to delete # %s?', $this->Form->value('Deck.iddecks'))); ?></li>
		<li><?php echo $this->Html->link(__('List Decks'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Cards'), array('controller' => 'cards', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Card'), array('controller' => 'cards', 'action' => 'add')); ?> </li>
	</ul>
</div>
