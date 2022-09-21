<?php
App::uses('AppController', 'Controller');
/**
 * Platillos Controller
 *
 * @property Platillo $Platillo
 * @property PaginatorComponent $Paginator
 */
class PlatillosController extends AppController {

/**
 * Components
 *
 * @var array
 */
	public $components = array('Session', 'RequestHandler');

	public $paginate = array(
        'limit' => 8,
        'order' => array(
            'Platillo.id' => 'asc'
        )
    );

/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->paginate['Platillo']['limit'] = 8;
		$this->paginate['Platillo']['order'] = array('Platillo.id' => 'asc');
		$this->set('platillos', $this->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Platillo->exists($id)) {
			throw new NotFoundException(__('Invalid platillo'));
		}
		$options = array('conditions' => array('Platillo.' . $this->Platillo->primaryKey => $id));
		$this->set('platillo', $this->Platillo->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Platillo->create();
			if ($this->Platillo->save($this->request->data)) {
				$this->Flash->success('The platillo has been saved.','default',array('class'=>'alert alert-success'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Flash->error('The platillo could not be saved. Please, try again.','default',array('class'=>'alert alert-danger'));
			}
		}
		$categoriaPlatillos = $this->Platillo->CategoriaPlatillo->find('list');
		$cocineros = $this->Platillo->Cocinero->find('list');
		$this->set(compact('categoriaPlatillos', 'cocineros'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->Platillo->exists($id)) {
			throw new NotFoundException(__('Invalid platillo'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Platillo->save($this->request->data)) {
				$this->Flash->success(__('The platillo has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Flash->error(__('The platillo could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Platillo.' . $this->Platillo->primaryKey => $id));
			$this->request->data = $this->Platillo->find('first', $options);
		}
		$categoriaPlatillos = $this->Platillo->CategoriaPlatillo->find('list');
		$cocineros = $this->Platillo->Cocinero->find('list');
		$this->set(compact('categoriaPlatillos', 'cocineros'));
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		if (!$this->Platillo->exists($id)) {
			throw new NotFoundException(__('Invalid platillo'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->Platillo->delete($id)) {
			$this->Flash->success(__('The platillo has been deleted.'));
		} else {
			$this->Flash->error(__('The platillo could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
