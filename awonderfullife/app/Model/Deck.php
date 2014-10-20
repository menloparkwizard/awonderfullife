<?php
App::uses('AppModel', 'Model');
/**
 * Deck Model
 *
 */
class Deck extends AppModel {

/**
 * Primary key field
 *
 * @var string
 */
	public $primaryKey = 'iddecks';

/**
 * Display field
 *
 * @var string
 */
	public $displayField = 'name';
        
        public $belongsTo = array( 
                                  'DeckStatus' => array( 'className' => 'DeckStatus', 'foreignKey' => 'status'),
                                  'Badge'      => array( 'className' => 'Badge', 'foreignKey' => 'badge'),
                                 );

        public $hasMany = array( 'Card' => 
                            array(
                                  'className' => 'Card',
                                  'foreignKey' => 'deck',
                                 )
                               );
                               
       public function getDeckList(){
            $options = array('order' => 'Deck.name ASC');
            return $this->find('list', $options);
       }

       public function getDeckByStatus( $status = null ){
         $order = array('order' => 'Deck.name ASC');
         if( $status != null ){
           $options = array('conditions' => array( 'DeckStatus.status' => $status ) );
         } else {
           $options = array();
         }
         $options = array_merge($options, $order);
         return $this->find('all', $options);
       }

}
