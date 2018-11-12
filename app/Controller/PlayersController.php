<?php

App::uses('AppController', 'Controller');

class PlayersController extends AppController {

	var $helpers = array('Html', 'Form');
	
	var $name = 'Players';


	public $components = array('Paginator');


    public function beforeFilter() {
        parent::beforeFilter();
        $this->Auth->allow('add', 'logout');
    }

// USER/ADMIN 	START
	public function index() {

		// if ($_SESSION['logCheckPlayer'] != 'player') {
		// 	return $this->redirect('/players/login');
		// }

		$this->Player->recursive = 0;
		$this->set('Players', $this->Paginator->paginate());
	}



	public function view($id = null) {
		if (!$this->Player->exists($id)) {
			throw new NotFoundException(__('Invalid user'));
		}
		$options = array('conditions' => array('Players.' . $this->Player->primaryKey => $id));
		$this->set('players', $this->Player->find('first', $options));
	}



	public function add() {
		if ($this->request->is('post')) {
			$this->Player->create();
			if ($this->Player->save($this->request->data)) {

				// $this->Session->setFlash(__('The PLAYER has been saved.'));
				return $this->redirect(array('controller'=>'Players','action' => 'index'));
			} else {
				$this->Session->setFlash(__("The admin couldn't be saved. Please, try again and make sure your input was correct."));
				return $this->redirect(array('controller'=>'Players','action' => 'index'));
			}
		}
	}

	  public function login() {
        if ($this->request->is('POST')) {
            if ($this->Auth->login()) {
            	$_SESSION['logCheckPlayer'] = 'player';
                return $this->redirect($this->Auth->redirect(['action' => 'index']));
            }
            else {
            	// $this->Session->setFlash(__('Invalid username or password, try again'));
            	return $this->redirect($this->Auth->redirect(['controller' => 'players','action' => 'login']));
            }
            

        }
    }

     public function logout() {
        Session_destroy();
        return $this->redirect($this->Auth->redirect(['controller' => 'Players', 'action' => 'index']));
    }


	// public function home() {

	// }


	// public function view($id = null) {
	// 	if (!$this->User->exists($id)) {
	// 		throw new NotFoundException(__('Invalid user'));
	// 	}
	// 	$options = array('conditions' => array('User.' . $this->User->primaryKey => $id));
	// 	$this->set('user', $this->User->find('first', $options));
	// }


	// public function add() {
	// 	if ($this->request->is('post')) {
	// 		$this->User->create();
	// 		if ($this->User->save($this->request->data)) {
	// 			$this->Session->setFlash(__('The user has been saved.'));
	// 			return $this->redirect(array('action' => 'index'));
	// 		} else {
	// 			$this->Session->setFlash(__('The user could not be saved. Please, try again.'));
	// 		}
	// 	}
	// }


	// public function edit($id = null) {
	// 	if (!$this->User->exists($id)) {
	// 		throw new NotFoundException(__('Invalid user'));
	// 	}
	// 	if ($this->request->is(array('post', 'put'))) {
	// 		if ($this->User->save($this->request->data)) {
	// 			$this->Session->setFlash(__('The user has been saved.'));
	// 			return $this->redirect(array('action' => 'index'));
	// 		} else {
	// 			$this->Session->setFlash(__('The user could not be saved. Please, try again.'));
	// 		}
	// 	} else {
	// 		$options = array('conditions' => array('User.' . $this->User->primaryKey => $id));
	// 		$this->request->data = $this->User->find('first', $options);
	// 	}
	// }


	// public function delete($id = null) {
	// 	$this->User->id = $id;
	// 	if (!$this->User->exists()) {
	// 		throw new NotFoundException(__('Invalid user'));
	// 	}
	// 	$this->request->allowMethod('post', 'delete');
	// 	if ($this->User->delete()) {
	// 		$this->Session->setFlash(__('The user has been deleted.'));
	// 	} else {
	// 		$this->Session->setFlash(__('The user could not be deleted. Please, try again.'));
	// 	}
	// 	return $this->redirect(array('action' => 'index'));
	// }

 //    public function login() {
 //        if ($this->request->is('post')) {
 //            if ($this->Auth->login()) {
 //            	$_SESSION['username'] = "WELCOME TO DASHBOARD";
 //                return $this->redirect($this->Auth->redirect(array('controller' => 'Posts', 'action' => 'index')));
 //            }
 //            $this->Session->setFlash(__('Invalid username or password, try again'));
 //        }
 //    }

 //    public function logout() {
 //        Session_destroy();
 //        return $this->redirect($this->Auth->logout($this->Auth->redirect(array('controller' => 'Posts', 'action' => 'visitors'))));
 //    }


//USER/ADMIN 	END

//PLAYER 	START


  //   public function playerdatalist() {
  //   	$this->Player->recursive = 0;
		// $this->set('Players', $this->Paginator->paginate());
  //   }

//PLAYER 	END
}
