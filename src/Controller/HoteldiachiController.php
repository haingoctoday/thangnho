<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Hoteldiachi Controller
 *
 * @property \App\Model\Table\HoteldiachiTable $Hoteldiachi
 */
class HoteldiachiController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Network\Response|null
     */
    public function index()
    {
        $hoteldiachi = $this->paginate($this->Hoteldiachi);

        $this->set(compact('hoteldiachi'));
        $this->set('_serialize', ['hoteldiachi']);
    }

    /**
     * View method
     *
     * @param string|null $id Hoteldiachi id.
     * @return \Cake\Network\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $hoteldiachi = $this->Hoteldiachi->get($id, [
            'contain' => []
        ]);

        $this->set('hoteldiachi', $hoteldiachi);
        $this->set('_serialize', ['hoteldiachi']);
    }

    /**
     * Add method
     *
     * @return \Cake\Network\Response|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $hoteldiachi = $this->Hoteldiachi->newEntity();
        if ($this->request->is('post')) {
            $hoteldiachi = $this->Hoteldiachi->patchEntity($hoteldiachi, $this->request->data);
            if ($this->Hoteldiachi->save($hoteldiachi)) {
                $this->Flash->success(__('The {0} has been saved.', 'Hoteldiachi'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The {0} could not be saved. Please, try again.', 'Hoteldiachi'));
            }
        }
        $this->set(compact('hoteldiachi'));
        $this->set('_serialize', ['hoteldiachi']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Hoteldiachi id.
     * @return \Cake\Network\Response|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $hoteldiachi = $this->Hoteldiachi->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $hoteldiachi = $this->Hoteldiachi->patchEntity($hoteldiachi, $this->request->data);
            if ($this->Hoteldiachi->save($hoteldiachi)) {
                $this->Flash->success(__('The {0} has been saved.', 'Hoteldiachi'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The {0} could not be saved. Please, try again.', 'Hoteldiachi'));
            }
        }
        $this->set(compact('hoteldiachi'));
        $this->set('_serialize', ['hoteldiachi']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Hoteldiachi id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $hoteldiachi = $this->Hoteldiachi->get($id);
        if ($this->Hoteldiachi->delete($hoteldiachi)) {
            $this->Flash->success(__('The {0} has been deleted.', 'Hoteldiachi'));
        } else {
            $this->Flash->error(__('The {0} could not be deleted. Please, try again.', 'Hoteldiachi'));
        }
        return $this->redirect(['action' => 'index']);
    }
}
