<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Hotelcategory Controller
 *
 * @property \App\Model\Table\HotelcategoryTable $Hotelcategory
 */
class HotelcategoryController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Network\Response|null
     */
    public function index()
    {
        $hotelcategory = $this->paginate($this->Hotelcategory);

        $this->set(compact('hotelcategory'));
        $this->set('_serialize', ['hotelcategory']);
    }

    /**
     * View method
     *
     * @param string|null $id Hotelcategory id.
     * @return \Cake\Network\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $hotelcategory = $this->Hotelcategory->get($id, [
            'contain' => []
        ]);

        $this->set('hotelcategory', $hotelcategory);
        $this->set('_serialize', ['hotelcategory']);
    }

    /**
     * Add method
     *
     * @return \Cake\Network\Response|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $hotelcategory = $this->Hotelcategory->newEntity();
        if ($this->request->is('post')) {
            $hotelcategory = $this->Hotelcategory->patchEntity($hotelcategory, $this->request->data);
            if ($this->Hotelcategory->save($hotelcategory)) {
                $this->Flash->success(__('The {0} has been saved.', 'Hotel Category'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The {0} could not be saved. Please, try again.', 'Hotel Category'));
            }
        }
        $this->set(compact('hotelcategory'));
        $this->set('_serialize', ['hotelcategory']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Hotelcategory id.
     * @return \Cake\Network\Response|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $hotelcategory = $this->Hotelcategory->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $hotelcategory = $this->Hotelcategory->patchEntity($hotelcategory, $this->request->data);
            if ($this->Hotelcategory->save($hotelcategory)) {
                $this->Flash->success(__('The {0} has been saved.', 'Hotel Category'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The {0} could not be saved. Please, try again.', 'Hotel Category'));
            }
        }
        $this->set(compact('hotelcategory'));
        $this->set('_serialize', ['hotelcategory']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Hotelcategory id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $hotelcategory = $this->Hotelcategory->get($id);
        if ($this->Hotelcategory->delete($hotelcategory)) {
            $this->Flash->success(__('The {0} has been deleted.', 'Hotel Category'));
        } else {
            $this->Flash->error(__('The {0} could not be deleted. Please, try again.', 'Hotel Category'));
        }
        return $this->redirect(['action' => 'index']);
    }
}
