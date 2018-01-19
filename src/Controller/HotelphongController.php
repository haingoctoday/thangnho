<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Hotelphong Controller
 *
 * @property \App\Model\Table\HotelphongTable $Hotelphong
 */
class HotelphongController extends AppController
{
     public $paginate = [
        'limit' => 9,
        // 'order' => [
        //     'Articles.title' => 'asc'
        // ]
    ];
    /**
     * Index method
     *
     * @return \Cake\Network\Response|null
     */
    public function index()
    {
        $hotelphong = $this->paginate($this->Hotelphong);

        $this->set(compact('hotelphong'));
        $this->set('_serialize', ['hotelphong']);
    }

    /**
     * View method
     *
     * @param string|null $id Hotelphong id.
     * @return \Cake\Network\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $hotelphong = $this->Hotelphong->get($id, [
            'contain' => []
        ]);

        $this->set('hotelphong', $hotelphong);
        $this->set('_serialize', ['hotelphong']);
    }

    /**
     * Add method
     *
     * @return \Cake\Network\Response|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $hotelphong = $this->Hotelphong->newEntity();
        if ($this->request->is('post')) {
            $hotelphong = $this->Hotelphong->patchEntity($hotelphong, $this->request->data);
            if ($this->Hotelphong->save($hotelphong)) {
                $this->Flash->success(__('The {0} has been saved.', 'Category Room Hotel'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The {0} could not be saved. Please, try again.', 'Category Room Hotel'));
            }
        }
        $this->set(compact('hotelphong'));
        $this->set('_serialize', ['hotelphong']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Hotelphong id.
     * @return \Cake\Network\Response|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $hotelphong = $this->Hotelphong->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $hotelphong = $this->Hotelphong->patchEntity($hotelphong, $this->request->data);
            if ($this->Hotelphong->save($hotelphong)) {
                $this->Flash->success(__('The {0} has been saved.', 'Category Room Hotel'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The {0} could not be saved. Please, try again.', 'Category Room Hotel'));
            }
        }
        $this->set(compact('hotelphong'));
        $this->set('_serialize', ['hotelphong']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Hotelphong id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $hotelphong = $this->Hotelphong->get($id);
        if ($this->Hotelphong->delete($hotelphong)) {
            $this->Flash->success(__('The {0} has been deleted.', 'Category Room Hotel'));
        } else {
            $this->Flash->error(__('The {0} could not be deleted. Please, try again.', 'Category Room Hotel'));
        }
        return $this->redirect(['action' => 'index']);
    }
}
