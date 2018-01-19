<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Custome Controller
 *
 * @property \App\Model\Table\CustomeTable $Custome
 */
class CustomeController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Network\Response|null
     */
    public function index()
    {
        $custome = $this->paginate($this->Custome);

        $this->set(compact('custome'));
        $this->set('_serialize', ['custome']);
    }

    /**
     * View method
     *
     * @param string|null $id Custome id.
     * @return \Cake\Network\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $custome = $this->Custome->get($id, [
            'contain' => []
        ]);

        $this->set('custome', $custome);
        $this->set('_serialize', ['custome']);
    }

    /**
     * Add method
     *
     * @return \Cake\Network\Response|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $custome = $this->Custome->newEntity();
        if ($this->request->is('post')) {
            $custome = $this->Custome->patchEntity($custome, $this->request->data);
            if ($this->Custome->save($custome)) {
                $this->Flash->success(__('The {0} has been saved.', 'Custome'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The {0} could not be saved. Please, try again.', 'Custome'));
            }
        }
        $this->set(compact('custome'));
        $this->set('_serialize', ['custome']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Custome id.
     * @return \Cake\Network\Response|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $custome = $this->Custome->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $custome = $this->Custome->patchEntity($custome, $this->request->data);
            if ($this->Custome->save($custome)) {
                $this->Flash->success(__('The {0} has been saved.', 'Custome'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The {0} could not be saved. Please, try again.', 'Custome'));
            }
        }
        $this->set(compact('custome'));
        $this->set('_serialize', ['custome']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Custome id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $custome = $this->Custome->get($id);
        if ($this->Custome->delete($custome)) {
            $this->Flash->success(__('The {0} has been deleted.', 'Custome'));
        } else {
            $this->Flash->error(__('The {0} could not be deleted. Please, try again.', 'Custome'));
        }
        return $this->redirect(['action' => 'index']);
    }
}
