<?php
  echo $this->Html->css('bootstrap-wysihtml5-0.0.2');
  echo $this->Html->script('bootstrap-wysihtml5-0.0.2/libs/js/wysihtml5-0.3.0_rc2.min');
  echo $this->Html->script('bootstrap-wysihtml5-0.0.2/bootstrap-wysihtml5-0.0.2');
  echo $this->Html->script('logs/add_scripts');
?>
<?php
  $this->start('sidebar');
  echo $this->element('sidebar', array('active' => 'logs_add'));
  $this->end();
?>
<div class="logs form">
<?php echo $this->Form->create('Log', array('class' => 'form-horizontal')); ?>
	<fieldset>
		<legend><?php echo __('Add Log'); ?></legend>
	<?php
	    echo $this->Form->input('date', array('type' => 'text', 'class' => 'datepicker', 'data-date' => date('Y-m-d'), 'data-date-format' => 'yyyy-mm-dd'));
		echo $this->Form->input('text', array( 'type' => 'textarea', 'id' => 'log_rich_text_area', 'label' => "Log Entry", 'style' => 'width: 90%;', 'placeholder' => 'Enter text ...'));
	?>
	</fieldset>
<?php echo $this->Form->end(array('label' => 'Submit', 'class' => 'btn btn-info btn-large')); ?>
</div>