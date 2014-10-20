<div class="cards view">
<h2><?php  echo __('Card'); ?></h2>
	<dl>
		<dt><?php echo __('Idcards'); ?></dt>
		<dd>
			<?php echo h($card['Card']['idcards']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Name'); ?></dt>
		<dd>
			<?php echo h($card['Card']['name']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Deck'); ?></dt>
		<dd>
			<?php echo h($card['Card']['deck']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Seriesno'); ?></dt>
		<dd>
			<?php echo h($card['Card']['seriesno']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Acquired'); ?></dt>
		<dd>
			<?php echo h($card['Card']['acquired']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Worth'); ?></dt>
		<dd>
			<?php echo h($card['Card']['worth']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Trading'); ?></dt>
		<dd>
			<?php echo h($card['Card']['trading']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Card'), array('action' => 'edit', $card['Card']['idcards'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Card'), array('action' => 'delete', $card['Card']['idcards']), null, __('Are you sure you want to delete # %s?', $card['Card']['idcards'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Cards'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Card'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Decks'), array('controller' => 'decks', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Deck'), array('controller' => 'decks', 'action' => 'add')); ?> </li>
	</ul>
</div>
	<div class="related">
		<h3><?php echo __('Related Decks'); ?></h3>
	<?php if (!empty($card['Deck'])): ?>
		<dl>
			<dt><?php echo __('Iddecks'); ?></dt>
		<dd>
	<?php echo $card['Deck']['iddecks']; ?>
&nbsp;</dd>
		<dt><?php echo __('Name'); ?></dt>
		<dd>
	<?php echo $card['Deck']['name']; ?>
&nbsp;</dd>
		<dt><?php echo __('Status'); ?></dt>
		<dd>
	<?php echo $card['Deck']['status']; ?>
&nbsp;</dd>
		<dt><?php echo __('Numcards'); ?></dt>
		<dd>
	<?php echo $card['Deck']['numcards']; ?>
&nbsp;</dd>
		<dt><?php echo __('Badge'); ?></dt>
		<dd>
	<?php echo $card['Deck']['badge']; ?>
&nbsp;</dd>
		</dl>
	<?php endif; ?>
		<div class="actions">
			<ul>
				<li><?php echo $this->Html->link(__('Edit Deck'), array('controller' => 'decks', 'action' => 'edit', $card['Deck']['iddecks'])); ?></li>
			</ul>
		</div>
	</div>
	