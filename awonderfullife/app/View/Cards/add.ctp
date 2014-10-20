<?php
  $this->start('sidebar');
  echo $this->element('sidebar', array('active' => 'cards_add'));
  $this->end();
?>
<div class="cards form">
<?php echo $this->Form->create('Card', array('enctype' => 'multipart/form-data', 'class' => 'form-horizontal')); ?>
	<fieldset>
		<legend><?php echo __('Add Card'); ?></legend>
	<?php
		echo $this->Form->input('name');
		echo $this->Form->input('deck');
		echo $this->Form->input('seriesno', array('label' => 'Series Number', 'helpBlock' => 'The card\'s number within the series'));
		echo $this->Form->input('acquired', array('type' => 'text', 'class' => 'datepicker', 'data-date' => date('Y-m-d'), 'data-date-format' => 'yyyy-mm-dd', 'helpBlock' => "Date card was acquired"));
		echo $this->Form->input('worth');
		echo $this->Form->input('trading_status', array('type' => 'select', 'options' => $trading_statuses, 'empty' => true));
		echo $this->Form->input('card', array('type' => 'file'));
	?>
	</fieldset>
    <br>
<?php echo $this->Form->end(array( 'label' => 'Add Card', 'class' => 'btn btn-info btn-large')); ?>
</div>