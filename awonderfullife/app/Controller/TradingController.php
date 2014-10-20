<?php
App::uses('AppController', 'Controller');
/**
 * Cards Controller
 *
 * @property Card $Card
 */
class TradingController extends AppController {

/**
 * index method
 *
 * @return void
 */

        public $uses = array('Card', 'Deck');

	public function index() {
          $this->set('title_for_layout', 'Trading');
          $this->set('tradingCards', $this->Card->getCardsByTradingStatus('Trading'));
          $this->set('pendingCards', $this->Card->getCardsByTradingStatus('Pending'));
	}
}
