<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Agencydetail Controller
 *
 * @property \App\Model\Table\AgencydetailTable $Agencydetail
 */
class AgencydetailController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Network\Response|null
     */
    public function index()
    {
        $agencydetail = $this->paginate($this->Agencydetail);

        $this->set(compact('agencydetail'));
        $this->set('_serialize', ['agencydetail']);
    }

    /**
     * View method
     *
     * @param string|null $id Agencydetail id.
     * @return \Cake\Network\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $agencydetail = $this->Agencydetail->get($id, [
            'contain' => []
        ]);

        $this->set('agencydetail', $agencydetail);
        $this->set('_serialize', ['agencydetail']);
    }

    /**
     * Add method
     *
     * @return \Cake\Network\Response|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $agencydetail = $this->Agencydetail->newEntity();
        if ($this->request->is('post')) {
            $agencydetail = $this->Agencydetail->patchEntity($agencydetail, $this->request->data);
            if ($this->Agencydetail->save($agencydetail)) {
                $this->Flash->success(__('The {0} has been saved.', 'Agencydetail'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The {0} could not be saved. Please, try again.', 'Agencydetail'));
            }
        }
        $this->set(compact('agencydetail'));
        $this->set('_serialize', ['agencydetail']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Agencydetail id.
     * @return \Cake\Network\Response|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $agencydetail = $this->Agencydetail->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $agencydetail = $this->Agencydetail->patchEntity($agencydetail, $this->request->data);
            if ($this->Agencydetail->save($agencydetail)) {
                $this->Flash->success(__('The {0} has been saved.', 'Agencydetail'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The {0} could not be saved. Please, try again.', 'Agencydetail'));
            }
        }
        $this->set(compact('agencydetail'));
        $this->set('_serialize', ['agencydetail']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Agencydetail id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $agencydetail = $this->Agencydetail->get($id);
        if ($this->Agencydetail->delete($agencydetail)) {
            $this->Flash->success(__('The {0} has been deleted.', 'Agencydetail'));
        } else {
            $this->Flash->error(__('The {0} could not be deleted. Please, try again.', 'Agencydetail'));
        }
        return $this->redirect(['action' => 'index']);
    }
}
