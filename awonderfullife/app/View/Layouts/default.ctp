<?php
/**
 *
 * PHP 5
 *
 * CakePHP(tm) : Rapid Development Framework (http://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 * @link          http://cakephp.org CakePHP(tm) Project
 * @package       app.View.Layouts
 * @since         CakePHP(tm) v 0.10.0.1076
 * @license       http://www.opensource.org/licenses/mit-license.php MIT License
 */

$cakeDescription = __d('cake_dev', 'A Wonderful Life');
?>
<!DOCTYPE html>
<html>
<head>
	<?php echo $this->Html->charset(); ?>
	<title>
		<?php echo $cakeDescription ?>:
		<?php echo $title_for_layout; ?>
	</title>
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/2.0.3/jquery.min.js"></script>
	<?php
		echo $this->Html->meta('icon');

		echo $this->Html->css('bootstrap.min');
        echo $this->Html->css('bootstrap-responsive.min');
        echo $this->Html->css('bootstrap_extra');
		echo $this->Html->css('bootstrap/css/datepicker');
        echo $this->Html->script('bootstrap');
        echo $this->Html->script('bootstrap-collapse');
        echo $this->Html->script('bootstrap-tab');
		echo $this->Html->script('bootstrap-datepicker');
		echo $this->Html->script('site/site-scripts');
		echo $this->fetch('meta');
		echo $this->fetch('css');
		echo $this->fetch('script');
	?>
</head>
<body>
        <div class="navbar navbar-fixed-top">
          <div class="navbar-inner">
            <div class="container-fluid">
              <button type="button" class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
              </button>
              <?php echo $this->Html->link('A Wonderful Life', '/', array('class' => 'brand')); ?>
              <div class="nav-collapse collapse">
                <ul class="nav">
                  <li class="<? echo (($title_for_layout == "Home") ? 'active' : '')?>"><?php echo $this->Html->link('Main', '/pages/home'); ?></li>
                  <li class="<? echo (($title_for_layout == "Collecting") ? 'active' : '')?>"><?php echo $this->Html->link('Collecting', array('controller' => 'collecting', 'action' => 'index')); ?></li>
                  <li class="<? echo (($title_for_layout == "Keeping") ? 'active' : '')?>"><?php echo $this->Html->link('Keeping', array('controller' => 'keeping', 'action' => 'index')); ?></li>
                  <li class="<? echo (($title_for_layout == "Trading") ? 'active' : '')?>"><?php echo $this->Html->link('Trading', array('controller' => 'trading', 'action' => 'index')); ?></li>
                  <li class="<? echo (($title_for_layout == "Mastered") ? 'active' : '')?>"><?php echo $this->Html->link('Mastered', '/pages/mastered'); ?></li>
                  <li class="<? echo (($title_for_layout == "Logs") ? 'active' : '')?>"><?php echo $this->Html->link('Logs', array('controller' => 'logs', 'action' => 'index')); ?></li>
                  <li class="<? echo (($title_for_layout == "Contact") ? 'active' : '')?>"><?php echo $this->Html->link('Contact', '/pages/contact'); ?></li>
                </ul>
              </div>
            </div>
          </div>
        </div>
	<div class="container-fluid">
		<div class="row-fluid"> <!-- Header -->
            <div class="offset4 span4 offset4">
                <?php echo $this->Session->flash(); ?>
            </div>
		</div>
		<div class="row-fluid"><!-- Main Content -->
            <div class="span2">
              <?php if($this->fetch('sidebar')): ?>
                <? echo $this->fetch('sidebar'); ?>
               <? endif; ?>
            </div>
            <div class="span8">
                <?php echo $this->fetch('content'); ?>
            </div>
		</div>
	</div>
	<?php //echo $this->element('sql_dump'); ?>
  <footer class="footer">
    <div class="container">
      <p> &copy; 2013 </p>
    </div>
  </footer>
</body>
</html>
