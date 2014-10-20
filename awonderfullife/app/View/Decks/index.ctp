<?php
  $this->start('sidebar');
  echo $this->element('sidebar', array('active' => 'decks_list'));
  $this->end();
?>
<div class="decks index">
	<h2><?php echo __('Decks'); ?></h2>
	<table class="table">
        <thead>
	<tr>
			<th><?php echo $this->Paginator->sort('name'); ?></th>
			<th><?php echo $this->Paginator->sort('status'); ?></th>
			<th><?php echo $this->Paginator->sort('numcards', 'Number of Cards'); ?></th>
			<th><?php echo $this->Paginator->sort('badge'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
        </thead>
        <tbody>
	<?php foreach ($decks as $deck): ?>
	<tr>
		<td><?php echo h($deck['Deck']['name']); ?>&nbsp;</td>
		<td><?php echo h($deck['DeckStatus']['status']); ?>&nbsp;</td>
		<td><?php echo h($deck['Deck']['numcards']); ?>&nbsp;</td>
		<td><?php echo h($deck['Deck']['badge']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $deck['Deck']['iddecks']), array('class' => 'btn btn-mini btn-success')); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $deck['Deck']['iddecks']), array('class' => 'btn btn-mini btn-warning')); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $deck['Deck']['iddecks']), array('class' => 'btn btn-mini btn-danger'), __('Are you sure you want to delete # %s?', $deck['Deck']['name'])); ?>
		</td>
	</tr>
<?php endforeach; ?>
        </tbody>
	</table>
	<div class="paging">
        <?php echo $this->Paginator->pagination(); ?>
	</div>
</div>