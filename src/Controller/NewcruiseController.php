<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Newcruise Controller
 *
 * @property \App\Model\Table\NewcruiseTable $Newcruise
 */
class NewcruiseController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Network\Response|null
     */
    public function index()
    {
        $newcruise = $this->paginate($this->Newcruise);

        $this->set(compact('newcruise'));
        $this->set('_serialize', ['newcruise']);
    }

    /**
     * View method
     *
     * @param string|null $id Newcruise id.
     * @return \Cake\Network\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $newcruise = $this->Newcruise->get($id, [
            'contain' => []
        ]);

        $this->set('newcruise', $newcruise);
        $this->set('_serialize', ['newcruise']);
    }

    /**
     * Add method
     *
     * @return \Cake\Network\Response|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {

         $this->loadModel("Cruiseport");
        $diachi = $this->Cruiseport->find("all");
        $diachi_view = array();
        foreach ($diachi as $key => $valuediachi) {
          $diachi_view[$valuediachi['portname']] =  $valuediachi['portname'];
      }
      $this->set('diachi_view', $diachi_view);


        $newcruise = $this->Newcruise->newEntity();
        if ($this->request->is('post')) {
            $newcruise = $this->Newcruise->patchEntity($newcruise, $this->request->data);
            if ($this->Newcruise->save($newcruise)) {
                $this->Flash->success(__('The {0} has been saved.', 'Newcruise'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The {0} could not be saved. Please, try again.', 'Newcruise'));
            }
        }
        $this->set(compact('newcruise'));
        $this->set('_serialize', ['newcruise']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Newcruise id.
     * @return \Cake\Network\Response|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $newcruise = $this->Newcruise->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $newcruise = $this->Newcruise->patchEntity($newcruise, $this->request->data);
            if ($this->Newcruise->save($newcruise)) {
                $this->Flash->success(__('The {0} has been saved.', 'Newcruise'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The {0} could not be saved. Please, try again.', 'Newcruise'));
            }
        }
        $this->set(compact('newcruise'));
        $this->set('_serialize', ['newcruise']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Newcruise id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $newcruise = $this->Newcruise->get($id);
        if ($this->Newcruise->delete($newcruise)) {
            $this->Flash->success(__('The {0} has been deleted.', 'Newcruise'));
        } else {
            $this->Flash->error(__('The {0} could not be deleted. Please, try again.', 'Newcruise'));
        }
        return $this->redirect(['action' => 'index']);
    }
}
