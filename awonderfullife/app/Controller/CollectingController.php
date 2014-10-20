<?php
App::uses('AppController', 'Controller');
/**
 * Cards Controller
 *
 * @property Card $Card
 */
class CollectingController extends AppController {

/**
 * index method
 *
 * @return void
 */

        public $uses = array('Card', 'Deck');

	public function index() {
          $this->set('title_for_layout', 'Collecting');
          $this->set('cards', $this->Deck->getDeckByStatus('Collecting'));
	}
}
