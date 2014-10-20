<?php
App::uses('AppModel', 'Model');

define('CARD_TMP', TMP . '/cardtmp');
define('UPLOAD_DIR', WWW_ROOT . '/img/cards');
/**
 * Card Model
 *
 */
class Card extends AppModel {

/**
 * Primary key field
 *
 * @var string
 */
	public $primaryKey = 'idcards';

/**
 * Display field
 *
 * @var string
 */
	public $displayField = 'name';
/**
 * Belongs To Relationships
 *
 * @var string
 */
        public $belongsTo = array(
            'Deck' => array( 'className' => 'Deck', 'foreignKey' => 'deck'),
            'TradingStatus' => array( 'className' => 'TradingStatus', 'foreignKey' => 'trading_status'),
        );

        public $actsAs = array(
                               'Uploader.Attachment' => array(
                                   'card' => array(
                                       'uploadDir' => UPLOAD_DIR,
                                       'finalPath' => 'cards/',
                                       'nameCallback' => 'formatCardName',
                                       )
                                ));
        public function formatCardName($name, $file){
          return sprintf('%s-%s', $name, date('Y-m-d H:i:s'));
        }
        
        public function getCardsByTradingStatus( $status ){
          $options = array(
            'conditions' => array('TradingStatus.status' => $status),
            'order'     => array('Card.name ASC'),
          );
          return $this->find('all', $options);
        }
}
