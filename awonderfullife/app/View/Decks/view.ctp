<div class="decks view">
<h2><?php  echo __('Deck'); ?></h2>
	<dl>
		<dt><?php echo __('Iddecks'); ?></dt>
		<dd>
			<?php echo h($deck['Deck']['iddecks']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Name'); ?></dt>
		<dd>
			<?php echo h($deck['Deck']['name']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Status'); ?></dt>
		<dd>
			<?php echo h($deck['Deck']['status']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Numcards'); ?></dt>
		<dd>
			<?php echo h($deck['Deck']['numcards']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Badge'); ?></dt>
		<dd>
			<?php echo h($deck['Deck']['badge']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Deck'), array('action' => 'edit', $deck['Deck']['iddecks'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Deck'), array('action' => 'delete', $deck['Deck']['iddecks']), null, __('Are you sure you want to delete # %s?', $deck['Deck']['iddecks'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Decks'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Deck'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Cards'), array('controller' => 'cards', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Card'), array('controller' => 'cards', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php echo __('Related Cards'); ?></h3>
	<?php if (!empty($deck['Card'])): ?>
	<table class="table" >
	<tr>
		<th><?php echo __('Idcards'); ?></th>
		<th><?php echo __('Name'); ?></th>
		<th><?php echo __('Deck'); ?></th>
		<th><?php echo __('Seriesno'); ?></th>
		<th><?php echo __('Acquired'); ?></th>
		<th><?php echo __('Worth'); ?></th>
		<th><?php echo __('Trading'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($deck['Card'] as $card): ?>
		<tr>
			<td><?php echo $card['idcards']; ?></td>
			<td><?php echo $card['name']; ?></td>
			<td><?php echo $card['deck']; ?></td>
			<td><?php echo $card['seriesno']; ?></td>
			<td><?php echo $card['acquired']; ?></td>
			<td><?php echo $card['worth']; ?></td>
			<td><?php echo $card['trading']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'cards', 'action' => 'view', $card['idcards'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'cards', 'action' => 'edit', $card['idcards'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'cards', 'action' => 'delete', $card['idcards']), null, __('Are you sure you want to delete # %s?', $card['idcards'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Card'), array('controller' => 'cards', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
