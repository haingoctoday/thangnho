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
        $dataa = $this->Newactivity->find('all',['order' => ['id' => 'DESC']])->where(['loai' => 'activity']);

        $this->loadModel("Hoteldiachi");
        $diachi = $this->Hoteldiachi->find("all");
        $diachi_view = array();
        $diachi_view['0'] =  "Select Place";
        foreach ($diachi as $key => $valuediachi) {
          $diachi_view[$valuediachi['diachi']] =  $valuediachi['diachi'];
        }
        $this->set('diachi_view', $diachi_view);
        if ($this->request->is('post')) {
          $var_search = $this->request->data['search'];
          $var_diachi = $this->request->data['diachi'];
          if($var_search != ''){
            $dataa = $this->Newactivity->find()->where([ 
             ['loai' => 'activity'],
              ['OR' => array(['name LIKE' =>'%'.$var_search.'%'], ['diachi LIKE' =>'%'.($var_diachi == '0')? $var_diachi : $var_search.'%'])]
            ]);
            if($var_diachi != '0'){
              $dataa = $this->Newactivity->find()->where([ 
               ['loai' => 'activity'],
                ['AND' => array(['name LIKE' =>'%'.$var_search.'%'], ['diachi LIKE' =>'%'.($var_diachi == '0')? $var_diachi : $var_search.'%'])]
              ]);
            }
          }else{
            if($var_diachi != '0'){
               $dataa = $this->Newactivity->find()->where([ 
               ['loai' => 'activity'],
                 ['diachi LIKE' =>'%'.$var_diachi.'%']
              ]);
            }
          }  


          


        }
        $newactivity = $this->paginate($dataa);

        $this->set(compact('newactivity'));
        $this->set('_serialize', ['newactivity']);
    }


public function indexshore()
    {
        $dataa = $this->Newactivity->find('all',['order' => ['id' => 'DESC']])->where(['loai' => 'shore']);
        $this->loadModel("Hoteldiachi");
        $diachi = $this->Hoteldiachi->find("all");
        $diachi_view = array();
        $diachi_view['0'] =  "Select Place";
        foreach ($diachi as $key => $valuediachi) {
          $diachi_view[$valuediachi['diachi']] =  $valuediachi['diachi'];
        }
        $this->set('diachi_view', $diachi_view);
        if ($this->request->is('post')) {
          $var_search = $this->request->data['search'];
          $var_diachi = $this->request->data['diachi'];
          if($var_search != ''){
            $dataa = $this->Newactivity->find('all',['order' => ['id' => 'DESC']])->where([ 
             ['loai' => 'shore'],
              ['OR' => array(['name LIKE' =>'%'.$var_search.'%'], ['diachi LIKE' =>'%'.($var_diachi == '0')? $var_diachi : $var_search.'%'])]
            ]);
            if($var_diachi != '0'){
              $dataa = $this->Newactivity->find('all',['order' => ['id' => 'DESC']])->where([ 
               ['loai' => 'shore'],
                ['AND' => array(['name LIKE' =>'%'.$var_search.'%'], ['diachi LIKE' =>'%'.($var_diachi == '0')? $var_diachi : $var_search.'%'])]
              ]);
            }
          }else{
            if($var_diachi != '0'){
               $dataa = $this->Newactivity->find('all',['order' => ['id' => 'DESC']])->where([ 
               ['loai' => 'shore'],
                 ['diachi LIKE' =>'%'.$var_diachi.'%']
              ]);
            }
          }  
        }
        $newactivity = $this->paginate($dataa);
        $this->set(compact('newactivity'));
        $this->set('_serialize', ['newactivity']);
    }

public function indextour()
    {

        $dataa = $this->Newactivity->find('all',['order' => ['id' => 'DESC']])->where(['loai' => 'tour']);
         $this->loadModel("Hoteldiachi");
        $diachi = $this->Hoteldiachi->find("all");
        $diachi_view = array();
        $diachi_view['0'] =  "Select Place";
        foreach ($diachi as $key => $valuediachi) {
          $diachi_view[$valuediachi['diachi']] =  $valuediachi['diachi'];
        }
        $this->set('diachi_view', $diachi_view);
        if ($this->request->is('post')) {
          $var_search = $this->request->data['search'];
          $var_diachi = $this->request->data['diachi'];
          if($var_search != ''){
            $dataa = $this->Newactivity->find('all',['order' => ['id' => 'DESC']])->where([ 
             ['loai' => 'tour'],
              ['OR' => array(['name LIKE' =>'%'.$var_search.'%'], ['diachi LIKE' =>'%'.($var_diachi == '0')? $var_diachi : $var_search.'%'])]
            ]);
            if($var_diachi != '0'){
              $dataa = $this->Newactivity->find('all',['order' => ['id' => 'DESC']])->where([ 
               ['loai' => 'tour'],
                ['AND' => array(['name LIKE' =>'%'.$var_search.'%'], ['diachi LIKE' =>'%'.($var_diachi == '0')? $var_diachi : $var_search.'%'])]
              ]);
            }
          }else{
            if($var_diachi != '0'){
               $dataa = $this->Newactivity->find('all',['order' => ['id' => 'DESC']])->where([ 
               ['loai' => 'tour'],
                 ['diachi LIKE' =>'%'.$var_diachi.'%']
              ]);
            }
          }  
        }
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
       if ($this->request->is('post')) {
        //  debug($this->request->data);

//  $data = [
//   'date_pick' => '06/15/2018',
//   'price' => '145',
//   'tygia' => '1.29',
//   'adult' => '4',
//   'child' => '2',
//   'id_activity' => '9'
// ];
        if($this->request->data['adult'] == ""){
          $this->request->data['adult'] = '1';
        }
        // if($this->request->data['adult'] == ""){
        //   $this->request->data['adult'] = '1';
        // }
        $data  = $this->request->data;

 $dataa = $this->Newactivity->find()->where(['id' => $data['id_activity']])->toArray();

$this->set('data_post',$data);
$this->set('data_post_save',base64_encode(json_encode($data)));
$this->set('data_activity',$dataa);
        }
        $this->set(compact('newactivity'));
        $this->set('_serialize', ['newactivity']);
        $this->set('view_name', 'toursresult');
        $this->set('title', 'Agent Booking');
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

        $this->loadModel('Agentstour');
        $agentstype = $this->Agentstour->find('all');
        $agentstype_Destinations = array();
        $agentstype_Types = array();
        foreach ($agentstype as $destination){ 
          if($destination->type_tour == '1') {
            // <div class="item-tour-des"><?php echo $destination->name
             $agentstype_Destinations[$destination['name']] =  $destination['name'];
          }
          if($destination->type_tour == '3') {
            // <div class="item-tour-des"><?php echo $destination->name
             $agentstype_Types[$destination['name']] =  $destination['name'];
          }
        }
        $this->set('agentstype_Destinations',$agentstype_Destinations);
        $this->set('agentstype_Types',$agentstype_Types);


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
                  if($this->request->data['loai'] == 'shore'){
                    return $this->redirect(['action' => 'indexshore']);
                  }else{
                    return $this->redirect(['action' => 'index']); 
                  }
                 // return $this->redirect(['action' => 'index']); 
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
      $this->loadModel('Agentstour');
        $agentstype = $this->Agentstour->find('all');
        $agentstype_Destinations = array();
        $agentstype_Types = array();
        foreach ($agentstype as $destination){ 
          if($destination->type_tour == '1') {
            // <div class="item-tour-des"><?php echo $destination->name
             $agentstype_Destinations[$destination['name']] =  $destination['name'];
          }
          if($destination->type_tour == '3') {
            // <div class="item-tour-des"><?php echo $destination->name
             $agentstype_Types[$destination['name']] =  $destination['name'];
          }
        }
        $this->set('agentstype_Destinations',$agentstype_Destinations);
        $this->set('agentstype_Types',$agentstype_Types);
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
                  if($this->request->data['loai'] == 'shore'){
                    return $this->redirect(['action' => 'indexshore']);
                  }else{
                    return $this->redirect(['action' => 'index']); 
                  }
                 // return $this->redirect(['action' => 'index']); 
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
    public function addItinerary($id = null)
    {
      $this->loadModel("Itinerary");
      $itinerary = $this->Itinerary->newEntity();
     $tienich_view_old =  $this->Itinerary->find('all')->where(['id_activity'=>$id])->toArray();
     $datalist_drive = array(' ');
     if(isset($tienich_view_old[0])){
      $datalist_drive = json_decode($tienich_view_old[0]['mota'],TRUE);
     }
      $newactivity = $this->Newactivity->get($id, [
            'contain' => []
        ]);
      $this->set('datalist_drive', $datalist_drive);
      $this->set('loai', $newactivity->loai);
         if ($this->request->is(['patch', 'post', 'put'])) {
                $name = $this->request->data['name'];
                $mota = $this->request->data['mota'];
                $array_data = array_combine($name,$mota);
                $json_data_insert = json_encode($array_data);
                if(empty($tienich_view_old)){
                  $itinerary = $this->Itinerary->newEntity(); 
                  $itinerary->id_activity = $id; 
                  $itinerary->mota = $json_data_insert;  
                  $this->Itinerary->save($itinerary);
                  $this->Flash->success(__('Has been saved.'));
                }else{
                  $itinerary = $this->Itinerary->get($tienich_view_old[0]['id']); // Return article with id 12
                  $itinerary->mota = $json_data_insert;  
                  $this->Itinerary->save($itinerary);
                  $this->Flash->success(__('Has been saved.'));
                }
                if($this->request->data['loai'] == 'tour'){
                  return $this->redirect(['action' => 'indextour']);
                }else{
                  if($this->request->data['loai'] == 'shore'){
                    return $this->redirect(['action' => 'indexshore']);
                  }else{
                    return $this->redirect(['action' => 'index']); 
                  }
                }
        }

        $this->set(compact('itinerary'));
        $this->set('_serialize', ['itinerary']);
    }

public function addReviews($id = null)
    {
      $this->loadModel("Userreview");
       $Userreview = $this->Userreview->newEntity();
     // $tienich_view_old =  $this->Itinerary->find('all')->where(['id_activity'=>$id])->toArray();
     // $datalist_drive = array(' ');
     // if(isset($tienich_view_old[0])){
     //  $datalist_drive = json_decode($tienich_view_old[0]['mota'],TRUE);
     // }

      $newactivity = $this->Newactivity->get($id, [
            'contain' => []
        ]);
      $this->set('newactivity', $newactivity);
     //  $this->set('loai', $newactivity->loai);
      if ($this->request->is(['patch', 'post', 'put'])) {
      

        if($this->request->data['id_activity_c'] != ""){
      
          if($this->request->data['delete_room'] != ""){
       

             $user = $this->Userreview->get($this->request->data['id_activity_c']);
            $this->Userreview->delete($user);

          }else{
          
            $newhotel = $this->Userreview->get($this->request->data['id_activity_c'], [
                'contain' => []
            ]);
             $newhotel = $this->Userreview->patchEntity($newhotel, $this->request->data);
             $this->Userreview->save($newhotel);
          }
        }else{
        
          $newhotel = $this->Userreview->patchEntity($Userreview, $this->request->data);
          $this->Userreview->save($newhotel);
        }
         $this->Flash->success(__('Has been saved.'));

      }
      $query = $this->Userreview->find('all',['order' => ['id' => 'DESC']])->where(['id_activity'=>$id]);
      $this->set('list_room_of_hotel',$query);
        $this->set(compact('Userreview'));
        $this->set('_serialize', ['Userreview']);
    }


}
