<?php
App::uses('AppController', 'Controller');
/**
 * Decks Controller
 *
 * @property Deck $Deck
 */
class DecksController extends AppController {

       public $uses = array('Deck', 'DeckStatus');

/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->Deck->recursive = 0;
		$this->set('decks', $this->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Deck->exists($id)) {
			throw new NotFoundException(__('Invalid deck'));
		}
		$options = array('conditions' => array('Deck.' . $this->Deck->primaryKey => $id));
		$this->set('deck', $this->Deck->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Deck->create();
			if ($this->Deck->save($this->request->data)) {
				$this->Session->setFlash(__('The deck has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The deck could not be saved. Please, try again.'));
			}
		} else {
                  $this->set('statuses', $this->DeckStatus->listStatuses() );
                }
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->Deck->exists($id)) {
			throw new NotFoundException(__('Invalid deck'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->Deck->save($this->request->data)) {
				$this->Session->setFlash(__('The deck has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The deck could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Deck.' . $this->Deck->primaryKey => $id));
			$this->request->data = $this->Deck->find('first', $options);
                        $this->set('statuses', $this->DeckStatus->listStatuses() );
		}
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->Deck->id = $id;
		if (!$this->Deck->exists()) {
			throw new NotFoundException(__('Invalid deck'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->Deck->delete()) {
			$this->Session->setFlash(__('Deck deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Deck was not deleted'));
		$this->redirect(array('action' => 'index'));
	}
}
