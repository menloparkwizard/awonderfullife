<div class="well sidebar-nav">
    <ul class="nav nav-list">
        <li class="nav-header">Decks</li>
        <li class="<?php echo (($active == 'decks_list') ? 'active' : ''); ?>"><?php echo $this->Html->link('List Decks', array('controller' => 'decks', 'action' => 'index'));?></li>
        <li class="<?php echo (($active == 'decks_add') ? 'active' : ''); ?>"><?php echo $this->Html->link('Add Decks', array('controller' => 'decks', 'action' => 'add'));?></li>
        <li class="nav-header">Cards</li>
        <li class="<?php echo (($active == 'cards_list') ? 'active' : ''); ?>"><?php echo $this->Html->link('List Cards', array('controller' => 'cards', 'action' => 'index'));?></li>
        <li class="<?php echo (($active == 'cards_add') ? 'active' : ''); ?>"><?php echo $this->Html->link('Add Card', array('controller' => 'cards', 'action' => 'add'));?><li>
        <li class="nav-header">Logs</li>
        <li class="<?php echo (($active == 'logs_manage') ? 'active' : ''); ?>"><?php echo $this->Html->link('Manage Logs', array('controller' => 'logs', 'action' => 'manage'));?></li>
        <li class="<?php echo (($active == 'logs_add') ? 'active' : ''); ?>"><?php echo $this->Html->link('Add Log', array('controller' => 'logs', 'action' => 'add'));?></li>
    </ul>
</div>