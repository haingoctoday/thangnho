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
              if (!empty($this->request->data['hinhanh']['name'])) {
            $file = $this->request->data['hinhanh']; //put the data into a var for easy use

            $ext = substr(strtolower(strrchr($file['name'], '.')), 1); //get the extension
            $arr_ext = array('jpg', 'jpeg', 'gif','png'); //set allowed extensions
            $setNewFileName = time() . "_" . rand(000000, 999999);

            //only process if the extension is valid
            if (in_array($ext, $arr_ext)) {
                //do the actual uploading of the file. First arg is the tmp name, second arg is 
                //where we are putting it
                move_uploaded_file($file['tmp_name'], WWW_ROOT . '/upload/localtion/' . $setNewFileName . '.' . $ext);

                //prepare the filename for database entry 
                $imageFileName = $setNewFileName . '.' . $ext;
            }
        }

            $hoteldiachi = $this->Hoteldiachi->patchEntity($hoteldiachi, $this->request->data);

             if (!empty($this->request->data['hinhanh']['name'])) {
            $hoteldiachi->hinhanh = $imageFileName;
        }
            if ($this->Hoteldiachi->save($hoteldiachi)) {
                $this->Flash->success(__('The {0} has been saved.', 'Location'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The {0} could not be saved. Please, try again.', 'Location'));
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
         $image_old =  ($hoteldiachi->hinhanh);
        if ($this->request->is(['patch', 'post', 'put'])) {
              if (!empty($this->request->data['hinhanh']['name'])) {
            $file = $this->request->data['hinhanh']; //put the data into a var for easy use

            $ext = substr(strtolower(strrchr($file['name'], '.')), 1); //get the extension
            $arr_ext = array('jpg', 'jpeg', 'gif'); //set allowed extensions
            $setNewFileName = time() . "_" . rand(000000, 999999);

            //only process if the extension is valid
            if (in_array($ext, $arr_ext)) {
                //do the actual uploading of the file. First arg is the tmp name, second arg is 
                //where we are putting it
                move_uploaded_file($file['tmp_name'], WWW_ROOT . '/upload/localtion/' . $setNewFileName . '.' . $ext);

                //prepare the filename for database entry 
                $imageFileName = $setNewFileName . '.' . $ext;
            }
        }


            $hoteldiachi = $this->Hoteldiachi->patchEntity($hoteldiachi, $this->request->data);


        if (!empty($this->request->data['hinhanh']['name'])) {
            $hoteldiachi->hinhanh = $imageFileName;
        }else{
           $hoteldiachi->hinhanh = $image_old;
       }

       
            if ($this->Hoteldiachi->save($hoteldiachi)) {
                $this->Flash->success(__('The {0} has been saved.', 'Location'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The {0} could not be saved. Please, try again.', 'Location'));
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
            $this->Flash->success(__('The {0} has been deleted.', 'Location'));
        } else {
            $this->Flash->error(__('The {0} could not be deleted. Please, try again.', 'Location'));
        }
        return $this->redirect(['action' => 'index']);
    }
}
