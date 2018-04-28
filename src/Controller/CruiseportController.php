<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Cruiseport Controller
 *
 * @property \App\Model\Table\CruiseportTable $Cruiseport
 */
class CruiseportController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Network\Response|null
     */
    public function index()
    {
        $cruiseport = $this->paginate($this->Cruiseport);

        $this->set(compact('cruiseport'));
        $this->set('_serialize', ['cruiseport']);
    }

    /**
     * View method
     *
     * @param string|null $id Cruiseport id.
     * @return \Cake\Network\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $cruiseport = $this->Cruiseport->get($id, [
            'contain' => []
        ]);

        $this->set('cruiseport', $cruiseport);
        $this->set('_serialize', ['cruiseport']);
    }

    /**
     * Add method
     *
     * @return \Cake\Network\Response|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $cruiseport = $this->Cruiseport->newEntity();
        if ($this->request->is('post')) {
            $cruiseport = $this->Cruiseport->patchEntity($cruiseport, $this->request->data);
            if ($this->Cruiseport->save($cruiseport)) {
                $this->Flash->success(__('The {0} has been saved.', 'Cruiseport'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The {0} could not be saved. Please, try again.', 'Cruiseport'));
            }
        }
        $this->set(compact('cruiseport'));
        $this->set('_serialize', ['cruiseport']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Cruiseport id.
     * @return \Cake\Network\Response|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $cruiseport = $this->Cruiseport->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $cruiseport = $this->Cruiseport->patchEntity($cruiseport, $this->request->data);
            if ($this->Cruiseport->save($cruiseport)) {
                $this->Flash->success(__('The {0} has been saved.', 'Cruiseport'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The {0} could not be saved. Please, try again.', 'Cruiseport'));
            }
        }
        $this->set(compact('cruiseport'));
        $this->set('_serialize', ['cruiseport']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Cruiseport id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $cruiseport = $this->Cruiseport->get($id);
        if ($this->Cruiseport->delete($cruiseport)) {
            $this->Flash->success(__('The {0} has been deleted.', 'Cruiseport'));
        } else {
            $this->Flash->error(__('The {0} could not be deleted. Please, try again.', 'Cruiseport'));
        }
        return $this->redirect(['action' => 'index']);
    }
}
