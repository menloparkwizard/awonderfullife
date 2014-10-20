<?php
App::uses('AppController', 'Controller');
/**
 * Cards Controller
 *
 * @property Card $Card
 */
class KeepingController extends AppController {

/**
 * index method
 *
 * @return void
 */

        public $uses = array('Card', 'Deck');

	public function index() {
          $this->set('cards', $this->Deck->getDeckByStatus('Keeping'));
	}
}
