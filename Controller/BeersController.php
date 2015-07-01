<?php
App::uses('AppController', 'Controller');
class BeersController extends AppController {
	public $layout = 'BootstrapCake.bootstrap';

	public $components = array('Paginator', 'Session');


	public function admin_index() {
		$this->Beer->recursive = 0;
		$this->set('beers', $this->Paginator->paginate());
	}

	public function admin_reorder() {
		if ($this->request->is('post')) {
			$this->Beer->saveMany($this->request->data);
			exit();
		}
		$this->set('beers', $this->Beer->find('all'));
	}

	public function admin_view($id = null) {
		if (!$this->Beer->exists($id)) {
			throw new NotFoundException(__('Invalid beer'));
		}
		$options = array('conditions' => array('Beer.' . $this->Beer->primaryKey => $id));
		$this->set('beer', $this->Beer->find('first', $options));
	}

	public function admin_add() {
		if ($this->request->is('post')) {
			$this->Beer->create();
			if ($this->Beer->save($this->request->data)) {
				$this->Session->setFlash(__('The beer has been saved.'), 'default', array('class' => 'alert alert-success'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The beer could not be saved. Please, try again.'), 'default', array('class' => 'alert alert-danger'));
			}
		}
	}

	public function admin_edit($id = null) {
		if (!$this->Beer->exists($id)) {
			throw new NotFoundException(__('Invalid beer'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Beer->save($this->request->data)) {
				$this->Session->setFlash(__('The beer has been saved.'), 'default', array('class' => 'alert alert-success'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The beer could not be saved. Please, try again.'), 'default', array('class' => 'alert alert-danger'));
			}
		} else {
			$options = array('conditions' => array('Beer.' . $this->Beer->primaryKey => $id));
			$this->request->data = $this->Beer->find('first', $options);
		}
	}

	public function admin_delete($id = null) {
		$this->Beer->id = $id;
		if (!$this->Beer->exists()) {
			throw new NotFoundException(__('Invalid beer'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->Beer->delete()) {
			$this->Session->setFlash(__('The beer has been deleted.'), 'default', array('class' => 'alert alert-success'));
		} else {
			$this->Session->setFlash(__('The beer could not be deleted. Please, try again.'), 'default', array('class' => 'alert alert-danger'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
