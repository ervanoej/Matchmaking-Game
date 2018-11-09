<?php

App::uses('AppController', 'Controller');

class UsersController extends AppController {

	var $helpers = array('Html', 'Form');
	
	var $name = 'Users';


	public $components = array('Paginator');


    public function beforeFilter() {
        parent::beforeFilter();
        $this->Auth->allow('add', 'logout');
    }

// USER/ADMIN 	START
	public function index() {
		if (!isset($_SESSION['logCheck'])) {
			$this->redirect(['action' => 'login']);
		}
		$this->User->recursive = 0;
		$this->set('users', $this->Paginator->paginate());
	}


	public function view($id = null) {
		if (!$this->User->exists($id)) {
			throw new NotFoundException(__('Invalid user'));
		}
		$options = array('conditions' => array('User.' . $this->User->primaryKey => $id));
		$this->set('user', $this->User->find('first', $options));
	}


	public function add() {
		if ($this->request->is('post')) {
			$this->User->create();
			if ($this->User->save($this->request->data)) {
				$this->Session->setFlash(__('The user has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The user could not be saved. Please, try again.'));
			}
		}
	}


	public function edit($id = null) {
		if (!$this->User->exists($id)) {
			throw new NotFoundException(__('Invalid user'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->User->save($this->request->data)) {
				$this->Session->setFlash(__('The user has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The user could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('User.' . $this->User->primaryKey => $id));
			$this->request->data = $this->User->find('first', $options);
		}
	}


	public function delete($id = null) {
		$this->User->id = $id;
		if (!$this->User->exists()) {
			throw new NotFoundException(__('Invalid user'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->User->delete()) {
			$this->Session->setFlash(__('The user has been deleted.'));
		} else {
			$this->Session->setFlash(__('The user could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}

    public function login() {
        if ($this->request->is('post')) {
            if ($this->Auth->login()) {
            	$_SESSION['logCheck'] = 'login';
                return $this->redirect($this->Auth->redirect(['action' => 'index']));
            }
            $this->Session->setFlash(__('Invalid username or password, try again'));
        }
    }

    public function logout() {
        Session_destroy();
        return $this->redirect($this->Auth->logout($this->Auth->redirect(['controller' => 'Users', 'action' => 'login'])));
    }

//USER/ADMIN 	END

//PLAYER 	START

  //   public function playerdatalist() {
  //   	$this->player->recursive = 0;
		// $this->set('Player', $this->Paginator->paginate());
  //   }

//PLAYER 	END
}
