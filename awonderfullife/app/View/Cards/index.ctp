<?php
  $this->start('sidebar');
  echo $this->element('sidebar', array('active' => 'cards_list'));
  $this->end();
?>

<div class="cards index">
	<h2><?php echo __('Cards'); ?></h2>
	<table class="table table-condensed table-hover">
	  <thead>
            <tr>
                <th><?php echo $this->Paginator->sort('seriesno', 'Series Number'); ?></th>	
                <th><?php echo $this->Paginator->sort('deck'); ?></th>
                <th><?php echo $this->Paginator->sort('name'); ?></th>
                <th><?php echo $this->Paginator->sort('acquired'); ?></th>
                <th><?php echo $this->Paginator->sort('worth'); ?></th>
                <th><?php echo $this->Paginator->sort('trading_status'); ?></th>
                <th class="actions"><?php echo __('Actions'); ?></th>
            </tr>
	  </thead>
      <tbody>
        <?php foreach ($cards as $card): ?>
            <tr>
                <td><?php echo h($card['Card']['seriesno']); ?>&nbsp;</td>	
                <td><?php echo h($card['Deck']['name']); ?>&nbsp;</td>
                <td><?php echo h($card['Card']['name']); ?>&nbsp;</td>
                <td><?php echo h($card['Card']['acquired']); ?>&nbsp;</td>
                <td><?php echo h($card['Card']['worth']); ?>&nbsp;</td>
                <td><?php echo h($card['TradingStatus']['status']); ?>&nbsp;</td>
                <td class="actions">
                    <?php echo $this->Html->link(__('View'), array('action' => 'view', $card['Card']['idcards']), array('class' => 'btn btn-mini btn-success')); ?>
                    <?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $card['Card']['idcards']), array('class' => 'btn btn-mini btn-warning')); ?>
                    <?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $card['Card']['idcards']), array('class' => 'btn btn-mini btn-danger'), __('Are you sure you want to delete # %s?', $card['Card']['idcards'])); ?>
                </td>
            </tr>
        <?php endforeach; ?>
      </tbody>
	</table>
	<p>
    <div>
	<?php
        echo $this->Paginator->pagination();
		/*echo $this->Paginator->prev('< ' . __('previous'), array(), null, array('class' => 'prev disabled'));
		echo $this->Paginator->numbers(array('separator' => ''));
		echo $this->Paginator->next(__('next') . ' >', array(), null, array('class' => 'next disabled')); */
	?>
	</div>
</div>