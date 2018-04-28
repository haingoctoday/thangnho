<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Cruisedrive Controller
 *
 * @property \App\Model\Table\CruisedriveTable $Cruisedrive
 */
class CruisedriveController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Network\Response|null
     */
    public function index()
    {
        $cruisedrive = $this->paginate($this->Cruisedrive);

        $this->set(compact('cruisedrive'));
        $this->set('_serialize', ['cruisedrive']);
    }

    /**
     * View method
     *
     * @param string|null $id Cruisedrive id.
     * @return \Cake\Network\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $cruisedrive = $this->Cruisedrive->get($id, [
            'contain' => []
        ]);

        $this->set('cruisedrive', $cruisedrive);
        $this->set('_serialize', ['cruisedrive']);
    }

    /**
     * Add method
     *
     * @return \Cake\Network\Response|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $cruisedrive = $this->Cruisedrive->newEntity();
        if ($this->request->is('post')) {

               if (!empty($this->request->data['hinhanh']['name'])) {
            $file = $this->request->data['hinhanh']; //put the data into a var for easy use

            $ext = substr(strtolower(strrchr($file['name'], '.')), 1); //get the extension
            $arr_ext = array('jpg', 'jpeg', 'gif','png'); //set allowed extensions
            $setNewFileName = time() . "_" . rand(000000, 999999);

            //only process if the extension is valid
            if (in_array($ext, $arr_ext)) {
                //do the actual uploading of the file. First arg is the tmp name, second arg is 
                //where we are putting it
                move_uploaded_file($file['tmp_name'], WWW_ROOT . '/upload/cruisedrive/' . $setNewFileName . '.' . $ext);

                //prepare the filename for database entry 
                $imageFileName = $setNewFileName . '.' . $ext;
            }
        }



            $cruisedrive = $this->Cruisedrive->patchEntity($cruisedrive, $this->request->data);


        if (!empty($this->request->data['hinhanh']['name'])) {
            $cruisedrive->hinhanh = $imageFileName;
        }


            if ($this->Cruisedrive->save($cruisedrive)) {
                $this->Flash->success(__('The {0} has been saved.', 'Cruisedrive'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The {0} could not be saved. Please, try again.', 'Cruisedrive'));
            }
        }
        $this->set(compact('cruisedrive'));
        $this->set('_serialize', ['cruisedrive']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Cruisedrive id.
     * @return \Cake\Network\Response|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $cruisedrive = $this->Cruisedrive->get($id, [
            'contain' => []
        ]);
         $image_old =  ($cruisedrive->hinhanh);
        if ($this->request->is(['patch', 'post', 'put'])) {

            if (!empty($this->request->data['hinhanh']['name'])) {
            $file = $this->request->data['hinhanh']; //put the data into a var for easy use

            $ext = substr(strtolower(strrchr($file['name'], '.')), 1); //get the extension
            $arr_ext = array('jpg', 'jpeg', 'gif','png'); //set allowed extensions
            $setNewFileName = time() . "_" . rand(000000, 999999);

            //only process if the extension is valid
            if (in_array($ext, $arr_ext)) {
                //do the actual uploading of the file. First arg is the tmp name, second arg is 
                //where we are putting it
                move_uploaded_file($file['tmp_name'], WWW_ROOT . '/upload/cruisedrive/' . $setNewFileName . '.' . $ext);

                //prepare the filename for database entry 
                $imageFileName = $setNewFileName . '.' . $ext;
            }
        }



            $cruisedrive = $this->Cruisedrive->patchEntity($cruisedrive, $this->request->data);
            if (!empty($this->request->data['hinhanh']['name'])) {
            $cruisedrive->hinhanh = $imageFileName;
        }else{
           $cruisedrive->hinhanh = $image_old;
       }
       
            if ($this->Cruisedrive->save($cruisedrive)) {
                $this->Flash->success(__('The {0} has been saved.', 'Cruisedrive'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The {0} could not be saved. Please, try again.', 'Cruisedrive'));
            }
        }
        $this->set(compact('cruisedrive'));
        $this->set('_serialize', ['cruisedrive']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Cruisedrive id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $cruisedrive = $this->Cruisedrive->get($id);
        if ($this->Cruisedrive->delete($cruisedrive)) {
            $this->Flash->success(__('The {0} has been deleted.', 'Cruisedrive'));
        } else {
            $this->Flash->error(__('The {0} could not be deleted. Please, try again.', 'Cruisedrive'));
        }
        return $this->redirect(['action' => 'index']);
    }
}
