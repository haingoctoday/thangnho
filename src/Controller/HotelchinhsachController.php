<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Hotelchinhsach Controller
 *
 * @property \App\Model\Table\HotelchinhsachTable $Hotelchinhsach
 */
class HotelchinhsachController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Network\Response|null
     */
    public function index()
    {
        $hotelchinhsach = $this->paginate($this->Hotelchinhsach);

        $this->set(compact('hotelchinhsach'));
        $this->set('_serialize', ['hotelchinhsach']);
    }

    /**
     * View method
     *
     * @param string|null $id Hotelchinhsach id.
     * @return \Cake\Network\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $hotelchinhsach = $this->Hotelchinhsach->get($id, [
            'contain' => []
        ]);

        $this->set('hotelchinhsach', $hotelchinhsach);
        $this->set('_serialize', ['hotelchinhsach']);
    }

    /**
     * Add method
     *
     * @return \Cake\Network\Response|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $hotelchinhsach = $this->Hotelchinhsach->newEntity();
        if ($this->request->is('post')) {
            $hotelchinhsach = $this->Hotelchinhsach->patchEntity($hotelchinhsach, $this->request->data);
            if ($this->Hotelchinhsach->save($hotelchinhsach)) {
                $this->Flash->success(__('The {0} has been saved.', 'Hotel Policy'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The {0} could not be saved. Please, try again.', 'Hotel Policy'));
            }
        }
        $this->set(compact('hotelchinhsach'));
        $this->set('_serialize', ['hotelchinhsach']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Hotelchinhsach id.
     * @return \Cake\Network\Response|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $hotelchinhsach = $this->Hotelchinhsach->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $hotelchinhsach = $this->Hotelchinhsach->patchEntity($hotelchinhsach, $this->request->data);
            if ($this->Hotelchinhsach->save($hotelchinhsach)) {
                $this->Flash->success(__('The {0} has been saved.', 'Hotel Policy'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The {0} could not be saved. Please, try again.', 'Hotel Policy'));
            }
        }
        $this->set(compact('hotelchinhsach'));
        $this->set('_serialize', ['hotelchinhsach']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Hotelchinhsach id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $hotelchinhsach = $this->Hotelchinhsach->get($id);
        if ($this->Hotelchinhsach->delete($hotelchinhsach)) {
            $this->Flash->success(__('The {0} has been deleted.', 'Hotel Policy'));
        } else {
            $this->Flash->error(__('The {0} could not be deleted. Please, try again.', 'Hotel Policy'));
        }
        return $this->redirect(['action' => 'index']);
    }
}
