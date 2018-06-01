<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Userreview Controller
 *
 * @property \App\Model\Table\UserreviewTable $Userreview
 */
class UserreviewController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Network\Response|null
     */
    public function index()
    {
        $userreview = $this->paginate($this->Userreview);

        $this->set(compact('userreview'));
        $this->set('_serialize', ['userreview']);
    }

    /**
     * View method
     *
     * @param string|null $id Userreview id.
     * @return \Cake\Network\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $userreview = $this->Userreview->get($id, [
            'contain' => []
        ]);

        $this->set('userreview', $userreview);
        $this->set('_serialize', ['userreview']);
    }

    /**
     * Add method
     *
     * @return \Cake\Network\Response|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $userreview = $this->Userreview->newEntity();
        if ($this->request->is('post')) {
            $userreview = $this->Userreview->patchEntity($userreview, $this->request->data);
            if ($this->Userreview->save($userreview)) {
                $this->Flash->success(__('The {0} has been saved.', 'Userreview'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The {0} could not be saved. Please, try again.', 'Userreview'));
            }
        }
        $this->set(compact('userreview'));
        $this->set('_serialize', ['userreview']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Userreview id.
     * @return \Cake\Network\Response|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $userreview = $this->Userreview->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $userreview = $this->Userreview->patchEntity($userreview, $this->request->data);
            if ($this->Userreview->save($userreview)) {
                $this->Flash->success(__('The {0} has been saved.', 'Userreview'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The {0} could not be saved. Please, try again.', 'Userreview'));
            }
        }
        $this->set(compact('userreview'));
        $this->set('_serialize', ['userreview']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Userreview id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $userreview = $this->Userreview->get($id);
        if ($this->Userreview->delete($userreview)) {
            $this->Flash->success(__('The {0} has been deleted.', 'Userreview'));
        } else {
            $this->Flash->error(__('The {0} could not be deleted. Please, try again.', 'Userreview'));
        }
        return $this->redirect(['action' => 'index']);
    }
}
