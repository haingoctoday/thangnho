<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Newtransfer Controller
 *
 * @property \App\Model\Table\NewtransferTable $Newtransfer
 */
class NewtransferController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Network\Response|null
     */
    public function index()
    {
        $newtransfer = $this->paginate($this->Newtransfer);

        $this->set(compact('newtransfer'));
        $this->set('_serialize', ['newtransfer']);
    }

    /**
     * View method
     *
     * @param string|null $id Newtransfer id.
     * @return \Cake\Network\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $newtransfer = $this->Newtransfer->get($id, [
            'contain' => []
        ]);

        $this->set('newtransfer', $newtransfer);
        $this->set('_serialize', ['newtransfer']);
    }

    /**
     * Add method
     *
     * @return \Cake\Network\Response|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $newtransfer = $this->Newtransfer->newEntity();
        if ($this->request->is('post')) {
            $newtransfer = $this->Newtransfer->patchEntity($newtransfer, $this->request->data);
            if ($this->Newtransfer->save($newtransfer)) {
                $this->Flash->success(__('The {0} has been saved.', 'Transfer'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The {0} could not be saved. Please, try again.', 'Transfer'));
            }
        }
        $this->set(compact('newtransfer'));
        $this->set('_serialize', ['newtransfer']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Newtransfer id.
     * @return \Cake\Network\Response|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $newtransfer = $this->Newtransfer->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $newtransfer = $this->Newtransfer->patchEntity($newtransfer, $this->request->data);
            if ($this->Newtransfer->save($newtransfer)) {
                $this->Flash->success(__('The {0} has been saved.', 'Transfer'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The {0} could not be saved. Please, try again.', 'Transfer'));
            }
        }
        $this->set(compact('newtransfer'));
        $this->set('_serialize', ['newtransfer']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Newtransfer id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $newtransfer = $this->Newtransfer->get($id);
        if ($this->Newtransfer->delete($newtransfer)) {
            $this->Flash->success(__('The {0} has been deleted.', 'Transfer'));
        } else {
            $this->Flash->error(__('The {0} could not be deleted. Please, try again.', 'Transfer'));
        }
        return $this->redirect(['action' => 'index']);
    }

    public function addtransfer($id = null)
    {

        $transferanddrive = $this->Newtransfer->get($id, [
            'contain' => []
        ]);

        $this->loadModel("Transferdrive");
        $transferdrive = $this->Transferdrive->find("all");
        $transferdrive_view = array();
        foreach ($transferdrive as $key => $valuetransferdrive) {
          $transferdrive_view[$valuetransferdrive['id']] =  $valuetransferdrive['name'];
        }
     //   debug($transferanddrive['driver']);
        $datalist_drive = json_decode($transferanddrive['driver'],TRUE);
             $this->set('datalist_drive', $datalist_drive);
      //  if($transferanddrive['driver'])

      $this->set('transferdrive_view', $transferdrive_view);

         if ($this->request->is(['patch', 'post', 'put'])) {



                $diachi = $this->request->data['diachi'];
                $giatien = $this->request->data['price'];
                $array_data = array_combine($diachi,$giatien);
            
                $json_data_insert = json_encode($array_data);
                $transferanddrive = $this->Newtransfer->patchEntity($transferanddrive, $this->request->data);

                $transferanddrive->driver = $json_data_insert;
            //$newtransfer = $this->Newtransfer->patchEntity($newtransfer, $this->request->data);
            if ($this->Newtransfer->save($transferanddrive)) {
                $this->Flash->success(__('The {0} has been saved.', 'Transfer'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The {0} could not be saved. Please, try again.', 'Transfer'));
            }
        }

        $this->set(compact('transferanddrive'));
        $this->set('_serialize', ['transferanddrive']);
    }
}
