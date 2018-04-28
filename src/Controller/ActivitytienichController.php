<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Activitytienich Controller
 *
 * @property \App\Model\Table\ActivitytienichTable $Activitytienich
 */
class ActivitytienichController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Network\Response|null
     */
    public function index()
    {
        $activitytienich = $this->paginate($this->Activitytienich);

        $this->set(compact('activitytienich'));
        $this->set('_serialize', ['activitytienich']);
    }

    /**
     * View method
     *
     * @param string|null $id Activitytienich id.
     * @return \Cake\Network\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $activitytienich = $this->Activitytienich->get($id, [
            'contain' => []
        ]);

        $this->set('activitytienich', $activitytienich);
        $this->set('_serialize', ['activitytienich']);
    }

    /**
     * Add method
     *
     * @return \Cake\Network\Response|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $activitytienich = $this->Activitytienich->newEntity();
        if ($this->request->is('post')) {
            $activitytienich = $this->Activitytienich->patchEntity($activitytienich, $this->request->data);
            if ($this->Activitytienich->save($activitytienich)) {
                $this->Flash->success(__('The {0} has been saved.', 'Activitytienich'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The {0} could not be saved. Please, try again.', 'Activitytienich'));
            }
        }
        $this->set(compact('activitytienich'));
        $this->set('_serialize', ['activitytienich']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Activitytienich id.
     * @return \Cake\Network\Response|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $activitytienich = $this->Activitytienich->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $activitytienich = $this->Activitytienich->patchEntity($activitytienich, $this->request->data);
            if ($this->Activitytienich->save($activitytienich)) {
                $this->Flash->success(__('The {0} has been saved.', 'Activitytienich'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The {0} could not be saved. Please, try again.', 'Activitytienich'));
            }
        }
        $this->set(compact('activitytienich'));
        $this->set('_serialize', ['activitytienich']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Activitytienich id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $activitytienich = $this->Activitytienich->get($id);
        if ($this->Activitytienich->delete($activitytienich)) {
            $this->Flash->success(__('The {0} has been deleted.', 'Activitytienich'));
        } else {
            $this->Flash->error(__('The {0} could not be deleted. Please, try again.', 'Activitytienich'));
        }
        return $this->redirect(['action' => 'index']);
    }
}
