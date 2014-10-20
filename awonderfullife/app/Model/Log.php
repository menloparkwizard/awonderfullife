<?php
App::uses('AppModel', 'Model');
/**
 * Log Model
 *
 */
class Log extends AppModel {

/**
 * Primary key field
 *
 * @var string
 */
	public $primaryKey = 'idlogs';

/**
 * Display field
 *
 * @var string
 */
	public $displayField = 'text';
    
	public function getOrderedLogs(){
	  $options = array(
		'order' => array('Log.date DESC'),
	  );
	  return $this->find('all', $options);
	}
}
