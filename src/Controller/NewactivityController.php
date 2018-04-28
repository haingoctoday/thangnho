<?php
namespace App\Controller;

use App\Controller\AppController;
use Cake\Event\Event;
use Cake\Network\Session;
use Cake\I18n\Time; 
/**
 * Newactivity Controller
 *
 * @property \App\Model\Table\NewactivityTable $Newactivity
 */
class NewactivityController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Network\Response|null
     */

        public function beforeFilter(Event $event)
    {
        //$this->viewBuilder()->layout('agents');
        parent::beforeFilter($event);
        $this->Auth->allow(['activitybooking','index','bookingok','activitisresult']);
    }


    public function index()
    {
          $dataa = $this->Newactivity->find('all')->where(['loai' => 'activity']);
        $newactivity = $this->paginate($dataa);

        $this->set(compact('newactivity'));
        $this->set('_serialize', ['newactivity']);
    }




public function indextour()
    {

        $dataa = $this->Newactivity->find('all')->where(['loai' => 'tour']);
        //$this->set('newactivity', $this->paginate($dataa));



        $newactivity = $this->paginate($dataa);

        $this->set(compact('newactivity'));
        $this->set('_serialize', ['newactivity']);
    }

    public function activitybooking()
    {
 $this->viewBuilder()->layout('agentslayout');
        //$dataa = $this->Newactivity->find('all')->where(['loai' => 'tour']);
        //$this->set('newactivity', $this->paginate($dataa));



      //  $newactivity = $this->paginate($dataa);

        $this->set(compact('newactivity'));
        $this->set('_serialize', ['newactivity']);
    }
public function bookingok()
    {
 $this->viewBuilder()->layout('agentslayout');
        //$dataa = $this->Newactivity->find('all')->where(['loai' => 'tour']);
        //$this->set('newactivity', $this->paginate($dataa));



      //  $newactivity = $this->paginate($dataa);

        $this->set(compact('newactivity'));
        $this->set('_serialize', ['newactivity']);
    }
    public function activitisresult()
    {
 $this->viewBuilder()->layout('agentslayout');
        //$dataa = $this->Newactivity->find('all')->where(['loai' => 'tour']);
        //$this->set('newactivity', $this->paginate($dataa));



      //  $newactivity = $this->paginate($dataa);

        $this->set(compact('newactivity'));
        $this->set('_serialize', ['newactivity']);
    }

    /**
     * View method
     *
     * @param string|null $id Newactivity id.
     * @return \Cake\Network\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $newactivity = $this->Newactivity->get($id, [
            'contain' => []
        ]);

        $this->set('newactivity', $newactivity);
        $this->set('_serialize', ['newactivity']);
    }

    /**
     * Add method
     **
     * @return \Cake\Network\Response|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {

        $this->loadModel("Hoteldiachi");
        $diachi = $this->Hoteldiachi->find("all");
        $diachi_view = array();
        foreach ($diachi as $key => $valuediachi) {
          $diachi_view[$valuediachi['diachi']] =  $valuediachi['diachi'];
      }
      $this->set('diachi_view', $diachi_view);

        $this->loadModel("Activitiecategory");
         $Activitiecategory = $this->Activitiecategory->find("all");
        $category_view = array();
        foreach ($Activitiecategory as $key => $valueHotelcategory) {
          $category_view[$valueHotelcategory['namecategory']] =  $valueHotelcategory['namecategory'];
      }
      $this->set('category_view', $category_view);



        $newactivity = $this->Newactivity->newEntity();
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
                move_uploaded_file($file['tmp_name'], WWW_ROOT . '/upload/activity/' . $setNewFileName . '.' . $ext);

                //prepare the filename for database entry 
                $imageFileName = $setNewFileName . '.' . $ext;
            }
        }



            $newactivity = $this->Newactivity->patchEntity($newactivity, $this->request->data);

             if (!empty($this->request->data['hinhanh']['name'])) {
            $newactivity->hinhanh = $imageFileName;
        }

            if ($this->Newactivity->save($newactivity)) {
                $this->Flash->success(__('The {0} has been saved.', 'Newactivity'));
                if($this->request->data['loai'] == 'tour'){
                  return $this->redirect(['action' => 'indextour']);
                }else{
                  return $this->redirect(['action' => 'index']); 
                }
               
            } else {
                $this->Flash->error(__('The {0} could not be saved. Please, try again.', 'Newactivity'));
            }
        }
        $this->set(compact('newactivity'));
        $this->set('_serialize', ['newactivity']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Newactivity id.
     * @return \Cake\Network\Response|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $newactivity = $this->Newactivity->get($id, [
            'contain' => []
        ]);
         $this->loadModel("Hoteldiachi");
        $diachi = $this->Hoteldiachi->find("all");
        $diachi_view = array();
        foreach ($diachi as $key => $valuediachi) {
          $diachi_view[$valuediachi['diachi']] =  $valuediachi['diachi'];
      }
      $this->set('diachi_view', $diachi_view);

        $this->loadModel("Activitiecategory");
         $Activitiecategory = $this->Activitiecategory->find("all");
        $category_view = array();
        foreach ($Activitiecategory as $key => $valueHotelcategory) {
          $category_view[$valueHotelcategory['namecategory']] =  $valueHotelcategory['namecategory'];
      }
      $this->set('category_view', $category_view);
        $image_old =  ($newactivity->hinhanh);
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
                move_uploaded_file($file['tmp_name'], WWW_ROOT . '/upload/activity/' . $setNewFileName . '.' . $ext);

                //prepare the filename for database entry 
                $imageFileName = $setNewFileName . '.' . $ext;
            }
        }


            $newactivity = $this->Newactivity->patchEntity($newactivity, $this->request->data);
             if (!empty($this->request->data['hinhanh']['name'])) {
            $newactivity->hinhanh = $imageFileName;
        }else{
           $newactivity->hinhanh = $image_old;
       }

            if ($this->Newactivity->save($newactivity)) {
                $this->Flash->success(__('The {0} has been saved.', 'Newactivity'));
                if($this->request->data['loai'] == 'tour'){
                  return $this->redirect(['action' => 'indextour']);
                }else{
                  return $this->redirect(['action' => 'index']); 
                }
            } else {
                $this->Flash->error(__('The {0} could not be saved. Please, try again.', 'Newactivity'));
            }
        }
        $this->set(compact('newactivity'));
        $this->set('_serialize', ['newactivity']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Newactivity id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $newactivity = $this->Newactivity->get($id);
        if ($this->Newactivity->delete($newactivity)) {
            $this->Flash->success(__('The {0} has been deleted.', 'Newactivity'));
        } else {
            $this->Flash->error(__('The {0} could not be deleted. Please, try again.', 'Newactivity'));
        }
        return $this->redirect(['action' => 'index']);
    }


    
       public function inclusions($id = null)
    {
       $this->loadModel("Activitytienich");
       $newactivity = $this->Newactivity->get($id, [
        'contain' => []
        ]);
                //list all tien ich
           $listtienich =  $this->Activitytienich->find("all");
           $tienich_view = array();
           foreach ($listtienich as $key => $valuelisttienich) {
              $tienich_view[$valuelisttienich['id']] =  $valuelisttienich['nametienich'];
          }
          $this->set('tienich_view', $tienich_view);
              //list all tien ich old
         $tienich_view_old =  $this->Newactivity->find()->where(['id'=>$id])->toArray();;
         $this->set('tienich_view_old', isset($tienich_view_old[0]['inclusions'])? explode(",",$tienich_view_old[0]['inclusions']) : array());
          if ($this->request->is(['patch', 'post', 'put'])) {
       
          
            $data_tienich =  implode(",", $this->request->data['serviceslist']);
            $newactivity->inclusions = $data_tienich;
            
            if ($this->Newactivity->save($newactivity)) {
                $this->Flash->success(__('The {0} has been saved.', 'Services Hotel'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The {0} could not be saved. Please, try again.', 'Services Hotel'));
            }
        }
        $this->set(compact('newactivity'));
        $this->set('_serialize', ['newactivity']);
    }
       public function exclusions($id = null)
    {
       $this->loadModel("Activitytienich");
       $newactivity = $this->Newactivity->get($id, [
        'contain' => []
        ]);
                //list all tien ich
           $listtienich =  $this->Activitytienich->find("all");
           $tienich_view = array();
           foreach ($listtienich as $key => $valuelisttienich) {
              $tienich_view[$valuelisttienich['id']] =  $valuelisttienich['nametienich'];
          }
          $this->set('tienich_view', $tienich_view);
              //list all tien ich old
         $tienich_view_old =  $this->Newactivity->find()->where(['id'=>$id])->toArray();;
         $this->set('tienich_view_old', isset($tienich_view_old[0]['exclusions'])? explode(",",$tienich_view_old[0]['exclusions']) : array());
          if ($this->request->is(['patch', 'post', 'put'])) {
       
          
            $data_tienich =  implode(",", $this->request->data['serviceslist']);
            $newactivity->exclusions = $data_tienich;
            
            if ($this->Newactivity->save($newactivity)) {
                $this->Flash->success(__('The {0} has been saved.', 'Services Hotel'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The {0} could not be saved. Please, try again.', 'Services Hotel'));
            }
        }
        $this->set(compact('newactivity'));
        $this->set('_serialize', ['newactivity']);
    }

}
