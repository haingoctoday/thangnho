<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Slideagent Controller
 *
 * @property \App\Model\Table\SlideagentTable $Slideagent
 */
class SlideagentController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Network\Response|null
     */
    public function index()
    {
        $slideagent = $this->paginate($this->Slideagent);

        $this->set(compact('slideagent'));
        $this->set('_serialize', ['slideagent']);
    }

    /**
     * View method
     *
     * @param string|null $id Slideagent id.
     * @return \Cake\Network\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $slideagent = $this->Slideagent->get($id, [
            'contain' => []
        ]);

        $this->set('slideagent', $slideagent);
        $this->set('_serialize', ['slideagent']);
    }

    /**
     * Add method
     *
     * @return \Cake\Network\Response|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $slideagent = $this->Slideagent->newEntity();
        if ($this->request->is('post')) {

             if (!empty($this->request->data)) {
            if (!empty($this->request->data['hinhanh']['name'])) {
            $file = $this->request->data['hinhanh']; //put the data into a var for easy use

            $ext = substr(strtolower(strrchr($file['name'], '.')), 1); //get the extension
            $arr_ext = array('jpg', 'jpeg', 'gif','png'); //set allowed extensions
            $setNewFileName = time() . "_" . rand(000000, 999999);

            //only process if the extension is valid
            if (in_array($ext, $arr_ext)) {
                //do the actual uploading of the file. First arg is the tmp name, second arg is 
                //where we are putting it
                move_uploaded_file($file['tmp_name'], WWW_ROOT . '/upload/slide/' . $setNewFileName . '.' . $ext);

                //prepare the filename for database entry 
                $imageFileName = $setNewFileName . '.' . $ext;
            }
        }



            $slideagent = $this->Slideagent->patchEntity($slideagent, $this->request->data);

            if (!empty($this->request->data['hinhanh']['name'])) {
            $slideagent->hinhanh = $imageFileName;
        }

            if ($this->Slideagent->save($slideagent)) {
                $this->Flash->success(__('The {0} has been saved.', 'Slideagent'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The {0} could not be saved. Please, try again.', 'Slideagent'));
            }
        }
    }
        $this->set(compact('slideagent'));
        $this->set('_serialize', ['slideagent']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Slideagent id.
     * @return \Cake\Network\Response|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $slideagent = $this->Slideagent->get($id, [
            'contain' => []
        ]);
         $image_old =  ($slideagent->hinhanh);
        if ($this->request->is(['patch', 'post', 'put'])) {

                    if (!empty($this->request->data)) {
            if (!empty($this->request->data['hinhanh']['name'])) {
            $file = $this->request->data['hinhanh']; //put the data into a var for easy use

            $ext = substr(strtolower(strrchr($file['name'], '.')), 1); //get the extension
            $arr_ext = array('jpg', 'jpeg', 'gif'); //set allowed extensions
            $setNewFileName = time() . "_" . rand(000000, 999999);

            //only process if the extension is valid
            if (in_array($ext, $arr_ext)) {
                //do the actual uploading of the file. First arg is the tmp name, second arg is 
                //where we are putting it
                move_uploaded_file($file['tmp_name'], WWW_ROOT . '/upload/slide/' . $setNewFileName . '.' . $ext);

                //prepare the filename for database entry 
                $imageFileName = $setNewFileName . '.' . $ext;
            }
        }


            $slideagent = $this->Slideagent->patchEntity($slideagent, $this->request->data);

             if (!empty($this->request->data['hinhanh']['name'])) {
            $slideagent->hinhanh = $imageFileName;
        }else{
           $slideagent->hinhanh = $image_old;
       }


            if ($this->Slideagent->save($slideagent)) {
                $this->Flash->success(__('The {0} has been saved.', 'Slideagent'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The {0} could not be saved. Please, try again.', 'Slideagent'));
            }
        }
    }
        $this->set(compact('slideagent'));
        $this->set('_serialize', ['slideagent']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Slideagent id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $slideagent = $this->Slideagent->get($id);
        if ($this->Slideagent->delete($slideagent)) {
            $this->Flash->success(__('The {0} has been deleted.', 'Slideagent'));
        } else {
            $this->Flash->error(__('The {0} could not be deleted. Please, try again.', 'Slideagent'));
        }
        return $this->redirect(['action' => 'index']);
    }
}
