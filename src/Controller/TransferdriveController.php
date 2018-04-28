<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Transferdrive Controller
 *
 * @property \App\Model\Table\TransferdriveTable $Transferdrive
 */
class TransferdriveController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Network\Response|null
     */
    public function index()
    {
        $transferdrive = $this->paginate($this->Transferdrive);

        $this->set(compact('transferdrive'));
        $this->set('_serialize', ['transferdrive']);
    }

    /**
     * View method
     *
     * @param string|null $id Transferdrive id.
     * @return \Cake\Network\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $transferdrive = $this->Transferdrive->get($id, [
            'contain' => []
        ]);

        $this->set('transferdrive', $transferdrive);
        $this->set('_serialize', ['transferdrive']);
    }

    /**
     * Add method
     *
     * @return \Cake\Network\Response|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $transferdrive = $this->Transferdrive->newEntity();
        if ($this->request->is('post')) {


                   if (!empty($this->request->data['hinhanh']['name'])) {
            $file = $this->request->data['hinhanh']; //put the data into a var for easy use

            $ext = substr(strtolower(strrchr($file['name'], '.')), 1); //get the extension
            $arr_ext = array('jpg', 'jpeg', 'gif'); //set allowed extensions
            $setNewFileName = time() . "_" . rand(000000, 999999);

            //only process if the extension is valid
            if (in_array($ext, $arr_ext)) {
                //do the actual uploading of the file. First arg is the tmp name, second arg is 
                //where we are putting it
                move_uploaded_file($file['tmp_name'], WWW_ROOT . '/upload/transferdrive/' . $setNewFileName . '.' . $ext);

                //prepare the filename for database entry 
                $imageFileName = $setNewFileName . '.' . $ext;
            }
        }




            $transferdrive = $this->Transferdrive->patchEntity($transferdrive, $this->request->data);


             if (!empty($this->request->data['hinhanh']['name'])) {
            $transferdrive->hinhanh = $imageFileName;
        }
            if ($this->Transferdrive->save($transferdrive)) {
                $this->Flash->success(__('The {0} has been saved.', 'Transferdrive'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The {0} could not be saved. Please, try again.', 'Transferdrive'));
            }
        }
        $this->set(compact('transferdrive'));
        $this->set('_serialize', ['transferdrive']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Transferdrive id.
     * @return \Cake\Network\Response|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $transferdrive = $this->Transferdrive->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $transferdrive = $this->Transferdrive->patchEntity($transferdrive, $this->request->data);
            if ($this->Transferdrive->save($transferdrive)) {
                $this->Flash->success(__('The {0} has been saved.', 'Transferdrive'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The {0} could not be saved. Please, try again.', 'Transferdrive'));
            }
        }
        $this->set(compact('transferdrive'));
        $this->set('_serialize', ['transferdrive']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Transferdrive id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $transferdrive = $this->Transferdrive->get($id);
        if ($this->Transferdrive->delete($transferdrive)) {
            $this->Flash->success(__('The {0} has been deleted.', 'Transferdrive'));
        } else {
            $this->Flash->error(__('The {0} could not be deleted. Please, try again.', 'Transferdrive'));
        }
        return $this->redirect(['action' => 'index']);
    }
}
