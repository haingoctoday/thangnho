<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Booking Controller
 *
 * @property \App\Model\Table\BookingTable $Booking
 */
class BookingController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Network\Response|null
     */
    public function index()
    {
        $booking = $this->paginate($this->Booking);

        $this->set(compact('booking'));
        $this->set('_serialize', ['booking']);
         $this->loadModel("Usersm");
        $data_user = $this->Usersm->find('all')->toArray();
       $user_view = array();
       foreach ($data_user as $key => $value_user) {
                $user_view[$value_user['id']] =  $value_user['email'];
       }
        $this->set('user_view', $user_view);

    }

    /**
     * View method
     *
     * @param string|null $id Booking id.
     * @return \Cake\Network\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $booking = $this->Booking->get($id, [
            'contain' => []
        ]);

        $this->set('booking', $booking);
        $this->set('_serialize', ['booking']);
    }

    /**
     * Add method
     *
     * @return \Cake\Network\Response|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $booking = $this->Booking->newEntity();
        if ($this->request->is('post')) {
            $booking = $this->Booking->patchEntity($booking, $this->request->data);
            if ($this->Booking->save($booking)) {
                $this->Flash->success(__('The {0} has been saved.', 'Booking'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The {0} could not be saved. Please, try again.', 'Booking'));
            }
        }
        $this->set(compact('booking'));
        $this->set('_serialize', ['booking']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Booking id.
     * @return \Cake\Network\Response|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $booking = $this->Booking->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $booking = $this->Booking->patchEntity($booking, $this->request->data);
            if ($this->Booking->save($booking)) {
                $this->Flash->success(__('The {0} has been saved.', 'Booking'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The {0} could not be saved. Please, try again.', 'Booking'));
            }
        }
        $this->set(compact('booking'));
        $this->set('_serialize', ['booking']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Booking id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $booking = $this->Booking->get($id);
        if ($this->Booking->delete($booking)) {
            $this->Flash->success(__('The {0} has been deleted.', 'Booking'));
        } else {
            $this->Flash->error(__('The {0} could not be deleted. Please, try again.', 'Booking'));
        }
        return $this->redirect(['action' => 'index']);
    }
}
