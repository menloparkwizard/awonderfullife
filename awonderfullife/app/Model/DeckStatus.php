<?php
App::uses('AppModel', 'Model');
/**
 * DeckStatus Model
 *
 */
class DeckStatus extends AppModel {

/**
 * Primary key field
 *
 * @var string
 */
	public $primaryKey = 'iddeck_statuses';

/**
 * Display field
 *
 * @var string
 */
	public $displayField = 'status';

        public $hasMany = array( 'Deck' => array( 'className' => 'Deck', 'foreignKey' => 'status' ) );


        public function listStatuses(){
          return $this->find('list');
        }
}
