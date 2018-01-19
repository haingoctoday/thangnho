<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Activitiecategory Controller
 *
 * @property \App\Model\Table\ActivitiecategoryTable $Activitiecategory
 */
class ActivitiecategoryController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Network\Response|null
     */
    public function index()
    {
        $activitiecategory = $this->paginate($this->Activitiecategory);

        $this->set(compact('activitiecategory'));
        $this->set('_serialize', ['activitiecategory']);
    }

    /**
     * View method
     *
     * @param string|null $id Activitiecategory id.
     * @return \Cake\Network\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $activitiecategory = $this->Activitiecategory->get($id, [
            'contain' => []
        ]);

        $this->set('activitiecategory', $activitiecategory);
        $this->set('_serialize', ['activitiecategory']);
    }

    /**
     * Add method
     *
     * @return \Cake\Network\Response|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $activitiecategory = $this->Activitiecategory->newEntity();
        if ($this->request->is('post')) {
            $activitiecategory = $this->Activitiecategory->patchEntity($activitiecategory, $this->request->data);
            if ($this->Activitiecategory->save($activitiecategory)) {
                $this->Flash->success(__('The {0} has been saved.', 'Activitiecategory'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The {0} could not be saved. Please, try again.', 'Activitiecategory'));
            }
        }
        $this->set(compact('activitiecategory'));
        $this->set('_serialize', ['activitiecategory']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Activitiecategory id.
     * @return \Cake\Network\Response|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $activitiecategory = $this->Activitiecategory->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $activitiecategory = $this->Activitiecategory->patchEntity($activitiecategory, $this->request->data);
            if ($this->Activitiecategory->save($activitiecategory)) {
                $this->Flash->success(__('The {0} has been saved.', 'Activitiecategory'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The {0} could not be saved. Please, try again.', 'Activitiecategory'));
            }
        }
        $this->set(compact('activitiecategory'));
        $this->set('_serialize', ['activitiecategory']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Activitiecategory id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $activitiecategory = $this->Activitiecategory->get($id);
        if ($this->Activitiecategory->delete($activitiecategory)) {
            $this->Flash->success(__('The {0} has been deleted.', 'Activitiecategory'));
        } else {
            $this->Flash->error(__('The {0} could not be deleted. Please, try again.', 'Activitiecategory'));
        }
        return $this->redirect(['action' => 'index']);
    }
}
