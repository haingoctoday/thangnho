<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Hoteltienich Controller
 *
 * @property \App\Model\Table\HoteltienichTable $Hoteltienich
 */
class HoteltienichController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Network\Response|null
     */
    public function index()
    {
        $hoteltienich = $this->paginate($this->Hoteltienich);

        $this->set(compact('hoteltienich'));
        $this->set('_serialize', ['hoteltienich']);
    }

    /**
     * View method
     *
     * @param string|null $id Hoteltienich id.
     * @return \Cake\Network\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $hoteltienich = $this->Hoteltienich->get($id, [
            'contain' => []
        ]);

        $this->set('hoteltienich', $hoteltienich);
        $this->set('_serialize', ['hoteltienich']);
    }

    /**
     * Add method
     *
     * @return \Cake\Network\Response|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $hoteltienich = $this->Hoteltienich->newEntity();
        if ($this->request->is('post')) {
            $hoteltienich = $this->Hoteltienich->patchEntity($hoteltienich, $this->request->data);
            if ($this->Hoteltienich->save($hoteltienich)) {
                $this->Flash->success(__('The {0} has been saved.', 'Services Hotel'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The {0} could not be saved. Please, try again.', 'Services Hotel'));
            }
        }
        $this->set(compact('hoteltienich'));
        $this->set('_serialize', ['hoteltienich']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Hoteltienich id.
     * @return \Cake\Network\Response|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $hoteltienich = $this->Hoteltienich->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $hoteltienich = $this->Hoteltienich->patchEntity($hoteltienich, $this->request->data);
            if ($this->Hoteltienich->save($hoteltienich)) {
                $this->Flash->success(__('The {0} has been saved.', 'Services Hotel'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The {0} could not be saved. Please, try again.', 'Services Hotel'));
            }
        }
        $this->set(compact('hoteltienich'));
        $this->set('_serialize', ['hoteltienich']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Hoteltienich id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $hoteltienich = $this->Hoteltienich->get($id);
        if ($this->Hoteltienich->delete($hoteltienich)) {
            $this->Flash->success(__('The {0} has been deleted.', 'Services Hotel'));
        } else {
            $this->Flash->error(__('The {0} could not be deleted. Please, try again.', 'Services Hotel'));
        }
        return $this->redirect(['action' => 'index']);
    }
}
