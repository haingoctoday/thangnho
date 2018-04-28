<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Agentstour Controller
 *
 * @property \App\Model\Table\AgentstourTable $Agentstour
 */
class AgentstourController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Network\Response|null
     */
    public function index()
    {
        $agentstour = $this->paginate($this->Agentstour);

        $this->set(compact('agentstour'));
        $this->set('_serialize', ['agentstour']);
    }

public function indexagents()
    {

        // $dataa = $this->Agentstour->find('all')->where(['loai' => 'tour']);
        $agentstour = $this->paginate($this->Agentstour);

        // $agentstour = $this->paginate($dataa);

        $this->set(compact('agentstour'));
        $this->set('_serialize', ['agentstour']);
    }

    /**
     * View method
     *
     * @param string|null $id Agentstour id.
     * @return \Cake\Network\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $agentstour = $this->Agentstour->get($id, [
            'contain' => []
        ]);

        $this->set('agentstour', $agentstour);
        $this->set('_serialize', ['agentstour']);
    }

    /**
     * Add method
     *
     * @return \Cake\Network\Response|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $agentstour = $this->Agentstour->newEntity();
        if ($this->request->is('post')) {
            $agentstour = $this->Agentstour->patchEntity($agentstour, $this->request->data);
            if ($this->Agentstour->save($agentstour)) {
                $this->Flash->success(__('The {0} has been saved.', 'Agentstour'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The {0} could not be saved. Please, try again.', 'Agentstour'));
            }
        }
        $this->set(compact('agentstour'));
        $this->set('_serialize', ['agentstour']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Agentstour id.
     * @return \Cake\Network\Response|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $agentstour = $this->Agentstour->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $agentstour = $this->Agentstour->patchEntity($agentstour, $this->request->data);
            if ($this->Agentstour->save($agentstour)) {
                $this->Flash->success(__('The {0} has been saved.', 'Agentstour'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The {0} could not be saved. Please, try again.', 'Agentstour'));
            }
        }
        $this->set(compact('agentstour'));
        $this->set('_serialize', ['agentstour']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Agentstour id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $agentstour = $this->Agentstour->get($id);
        if ($this->Agentstour->delete($agentstour)) {
            $this->Flash->success(__('The {0} has been deleted.', 'Agentstour'));
        } else {
            $this->Flash->error(__('The {0} could not be deleted. Please, try again.', 'Agentstour'));
        }
        return $this->redirect(['action' => 'index']);
    }
}
