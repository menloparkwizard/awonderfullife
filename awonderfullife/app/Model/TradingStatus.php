<?php
App::uses('AppModel', 'Model');
/**
 * TradingStatus Model
 *
 */
class TradingStatus extends AppModel {

/**
 * Primary key field
 *
 * @var string
 */
	public $primaryKey = 'idtrading_statuses';

/**
 * Display field
 *
 * @var string
 */
	public $displayField = 'status';
    
        public $hasMany = array( 'Card' => array( 'className' => 'Card', 'foreignKey' => 'trading_status' ) );


        public function listStatuses(){
          return $this->find('list');
        }

}
