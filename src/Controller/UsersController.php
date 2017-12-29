<?php
namespace App\Controller;

use App\Controller\AppController;
use Cake\I18n\Time;
use Cake\Network\Session;
use Cake\Auth\DefaultPasswordHasher; //include this line
use Cake\Network\Email\Email;
use Cake\Event\Event;

/**
 * Usersm Controller
 *
 * @property \App\Model\Table\UsersmTable $Usersm
 */
class UsersController extends AppController
{

     public function beforeFilter(Event $event)
    {
        parent::beforeFilter($event);
        // Allow users to register and logout.
        // You should not add the "login" action to allow list. Doing so would
        // cause problems with normal functioning of AuthComponent.
        $this->Auth->allow(['add', 'logout']);
    }
    /**
     * Index method
     *
     * @return \Cake\Network\Response|null
     */
     public function logout()
    {
        return $this->redirect($this->Auth->logout());
    }

    public function index()
    {
        $usersm = $this->paginate($this->Usersm);

        $this->set(compact('usersm'));
        $this->set('_serialize', ['usersm']);
    }

    /**
     * View method
     *
     * @param string|null $id Usersm id.
     * @return \Cake\Network\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $usersm = $this->Usersm->get($id, [
            'contain' => []
        ]);

        $this->set('usersm', $usersm);
        $this->set('_serialize', ['usersm']);
    }

    /**
     * Add method
     *
     * @return \Cake\Network\Response|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $usersm = $this->Users->newEntity();
        if ($this->request->is('post')) {
            $usersm = $this->Users->patchEntity($usersm, $this->request->data);
         //    $user = $this->Users->patchEntity($user, $this->request->getData());
            if ($this->Users->save($usersm)) {
                $this->Flash->success(__('The {0} has been saved.', 'Usersm'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The {0} could not be saved. Please, try again.', 'Usersm'));
            }
        }
        $this->set(compact('usersm'));
        $this->set('_serialize', ['usersm']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Usersm id.
     * @return \Cake\Network\Response|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $usersm = $this->Usersm->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $usersm = $this->Usersm->patchEntity($usersm, $this->request->data);
            if ($this->Usersm->save($usersm)) {
                $this->Flash->success(__('The {0} has been saved.', 'Usersm'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The {0} could not be saved. Please, try again.', 'Usersm'));
            }
        }
        $this->set(compact('usersm'));
        $this->set('_serialize', ['usersm']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Usersm id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $usersm = $this->Usersm->get($id);
        if ($this->Usersm->delete($usersm)) {
            $this->Flash->success(__('The {0} has been deleted.', 'Usersm'));
        } else {
            $this->Flash->error(__('The {0} could not be deleted. Please, try again.', 'Usersm'));
        }
        return $this->redirect(['action' => 'index']);
    }
     public function login()
    {
        
       if ($this->request->is('post')) {
            $user = $this->Auth->identify();
            if ($user) {
                $this->Auth->setUser($user);
                return $this->redirect($this->Auth->redirectUrl());
            }
            $this->Flash->error(__('Invalid username or password, try again'));
        }
    }
}
