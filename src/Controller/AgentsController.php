<?php
namespace App\Controller;

use App\Controller\AppController;
use Cake\Event\Event;
use Cake\Network\Session;
use Cake\I18n\Time;
/**
 * Users Controller
 *
 * @property \App\Model\Table\UsersTable $Users
 */
class AgentsController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Network\Response|null
     */
    //   public function initialize()
    // {
    //       $this->viewBuilder()->layout('agents');
    //     // $this->Auth->allow(['index']);
        
    //    // $this->set('theme', Configure::read('Theme'));
    // }
       public function beforeFilter(Event $event)
    {
        $this->viewBuilder()->layout('agents');
        parent::beforeFilter($event);
       $this->Auth->allow(['hotelSearch','testsearch','ApiSearchHotel']);
    }
    public function index()
    {
         $this->viewBuilder()->layout('agentslayout');
     

         $this->loadModel("Newhotel");
         $hotel_hot = $this->Newhotel->find('all',array('limit'=>6))->where(['hot =' => '1']);
          $this->set('hotel_hot', $hotel_hot);

          $this->loadModel("Slideagent");
         $slide = $this->Slideagent->find('all',array('limit'=>3))->toArray();
          $this->set('slide', $slide);


        // debug($hotel_hot);
        $users = array();
        $this->set(compact('users'));




        $this->set('_serialize', ['users']);
          $this->set('title', 'Agent');
             $this->set('view_name', '');
    }

    /**
     * View method
     *
     * @param string|null $id User id.
     * @return \Cake\Network\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $user = $this->Users->get($id, [
            'contain' => []
        ]);

        $this->set('user', $user);
        $this->set('_serialize', ['user']);
    }

    /**
     * Add method
     *
     * @return \Cake\Network\Response|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $user = $this->Users->newEntity();
        if ($this->request->is('post')) {
            $user = $this->Users->patchEntity($user, $this->request->data);
            if ($this->Users->save($user)) {
                $this->Flash->success(__('The {0} has been saved.', 'User'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The {0} could not be saved. Please, try again.', 'User'));
            }
        }
        $this->set(compact('user'));
        $this->set('_serialize', ['user']);
    }

    /**
     * Edit method
     *
     * @param string|null $id User id.
     * @return \Cake\Network\Response|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $user = $this->Users->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $user = $this->Users->patchEntity($user, $this->request->data);
            if ($this->Users->save($user)) {
                $this->Flash->success(__('The {0} has been saved.', 'User'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The {0} could not be saved. Please, try again.', 'User'));
            }
        }
        $this->set(compact('user'));
        $this->set('_serialize', ['user']);
    }

    /**
     * Delete method
     *
     * @param string|null $id User id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $user = $this->Users->get($id);
        if ($this->Users->delete($user)) {
            $this->Flash->success(__('The {0} has been deleted.', 'User'));
        } else {
            $this->Flash->error(__('The {0} could not be deleted. Please, try again.', 'User'));
        }
        return $this->redirect(['action' => 'index']);
    }

    public function hotelSearch(){
      //$this->viewBuilder()->layout('agents');
        $this->viewBuilder()->layout('agentslayout');
        
         $this->loadModel("Newhotel");
         $hotel_hot = $this->Newhotel->find('all',array('limit'=>3));
          $this->set('hotel_hot', $hotel_hot);
        //$users = $this->paginate($this->Users);
      $users = array();

       $this->set('title', 'Accommodation Hotel Search');
        $this->set('view_name', 'hotel');
  

  }

  
  public function hotelSearchResult(){
      //$this->viewBuilder()->layout('agents');
        $this->viewBuilder()->layout('agentslayout');
          $session = $this->request->session();
      //    $this->loadModel("Newhotel");
      //    $hotel_hot = $this->Newhotel->find('all',array('limit'=>3));
      //     $this->set('hotel_hot', $hotel_hot);
      //   //$users = $this->paginate($this->Users);
      // $users = array();
      $search_old = $session->read('hotel.search');

       $this->loadModel("Newhotel");
        $query = $this->Newhotel->find('all', [
          'conditions' => array(
              'OR' => array(
                'diachi LIKE' => '%'.$search_old['search_name'].'%',
                'namehotel LIKE' => '%'.$search_old['search_name'].'%',
              )
          ) //['diachi LIKE' => '%'.$search_old['search_name'].'%']
      ]);

        //debug($query->toArray());
        $this->set('list_hotels', $query->toArray());
       $this->set('title', 'Agent');
       $this->set('view_name', 'hotel');

  }

  public function tours()
    {
         $this->viewBuilder()->layout('agentslayout');
     

         $this->loadModel("Newactivity");
         $hotel_hot = $this->Newactivity->find('all',array('limit'=>3))->where(['loai =' => 'tour'])->where(['hot =' => '1']);
          $this->set('hotel_hot', $hotel_hot);

          $this->loadModel("Hoteldiachi");
         $top_localtion = $this->Hoteldiachi->find('all',array('limit'=>3))->where(['top =' => 1]);
          $this->set('top_localtion', $top_localtion);


        // debug($hotel_hot);
        $users = array();
        $this->set(compact('users'));


        $this->loadModel('Agentstour');
        $agentstype = $this->Agentstour->find('all');
        $this->set('agentstype',$agentstype);



        $this->set('_serialize', ['users']);
          $this->set('title', 'Agent Tours');
             $this->set('view_name', 'tour');
    }

  public function toursresult()
    {
         $this->viewBuilder()->layout('agentslayout');
         $this->loadModel('Agentstour');
        $agentstype = $this->Agentstour->find('all');
        $this->set('agentstype',$agentstype);
 $session = $this->request->session();
  $search_old = $session->read('activity.search');
   // $search_old = $session->read('hotel.search');
        // debug($hotel_hot);
   $this->loadModel("Newactivity");
        $query = $this->Newactivity->find('all', [
          'conditions' => array(
              'OR' => array(
                'destinations LIKE' => '%'.$search_old['textSearch'].'%',
                'name LIKE' => '%'.$search_old['textSearch'].'%',
                'types' => '%'.$search_old['typeSearch'].'%',
              )//, 'types' => '%'.$search_old['typeSearch'].'%',
             ,'loai'=>'activity',


          ) //['diachi LIKE' => '%'.$search_old['search_name'].'%']
      ]);

        //debug($query->toArray());
        $this->set('list_hotels', $query->toArray());
        //$users = array();
       // $this->set(compact('users'));

        //$this->set('_serialize', ['users']);
          $this->set('title', 'Agent Tours');
             $this->set('view_name', 'toursresult');
    }


  public function toursbooknow()
    {
  $hotel_name = $this->request->query('agent');
     $id =  $this->request->query('stt');


      $this->set('idactivity',$id );
         $this->loadModel('Agentstour');
        $agentstype = $this->Agentstour->find('all');
        $this->set('agentstype',$agentstype);

         $this->viewBuilder()->layout('agentslayout');


          $session = $this->request->session();



          $this->loadModel("Itinerary");
           $tienich_view_old =  $this->Itinerary->find('all')->where(['id_activity'=>$id])->toArray();
     $datalist_drive = array(' ');
     if(isset($tienich_view_old[0])){
      $datalist_drive = json_decode($tienich_view_old[0]['mota'],TRUE);
     }
     
      $this->set('datalist_drive', $datalist_drive);

  // if(!($session->read('hotel.search'))){
  //   $this->set('check_book','no');
  //  }else{
  //    $this->set('check_book','yes');
  //  }
        
      //$this->loadModel("Hotelandtienich");
      $this->loadModel("Newactivity");

   


 $newactivity = $this->Newactivity->get($id, [
        'contain' => []
    ]);

$this->loadModel("Userreview");
 $Userreview =  $this->Userreview->find('all')->where(['id_activity'=>$id])->toArray();
//debug($newactivity);
 $this->set('Userreview_list', $Userreview);

        // debug($hotel_hot);
      //  $users = array();
        $this->set(compact('newactivity'));

        $this->set('_serialize', ['newactivity']);
          $this->set('title', 'Agent Tours');
             $this->set('view_name', $newactivity->loai);
    }

  public function activities()
    {
        $this->viewBuilder()->layout('agentslayout');
    

         $this->loadModel("Newactivity");
         $hotel_hot = $this->Newactivity->find('all',array('limit'=>3,'order' => ['id' => 'DESC']))->where(['loai =' => 'activity'])->where(['hot =' => '1']);
          $this->set('hotel_hot', $hotel_hot);

          $this->loadModel("Hoteldiachi");
         $top_localtion = $this->Hoteldiachi->find('all',array('limit'=>3))->where(['top =' => 1]);
          $this->set('top_localtion', $top_localtion);


        // debug($hotel_hot);
        $users = array();
        $this->set(compact('users'));


        $this->loadModel('Agentstour');
        $agentstype = $this->Agentstour->find('all');
        $this->set('agentstype',$agentstype);
        //  $agentstype_abc = array();
        // foreach ($agentstype as $destination){ 
        //    if($destination->type_tour == '1') {
        //     // <div class="item-tour-des"><?php echo $destination->name
        //      $agentstype_abc[$destination['name']] =  $destination['name'];
        //   }
        // }
        // $this->set('agentstype_abc',$agentstype_abc);


        $this->set('_serialize', ['users']);
          $this->set('title', 'Agent Activities');
             $this->set('view_name', 'activities');
    }

      public function shore()
    {
        $this->viewBuilder()->layout('agentslayout');
     

         $this->loadModel("Newactivity");
         $hotel_hot = $this->Newactivity->find('all',array('limit'=>3))->where(['loai =' => 'shore'])->where(['hot =' => '1']);
          $this->set('hotel_hot', $hotel_hot);

          $this->loadModel("Hoteldiachi");
         $top_localtion = $this->Hoteldiachi->find('all',array('limit'=>3))->where(['top =' => 1]);
          $this->set('top_localtion', $top_localtion);


        // debug($hotel_hot);
        $users = array();
        $this->set(compact('users'));


        $this->loadModel('Agentstour');
        $agentstype = $this->Agentstour->find('all');
        $this->set('agentstype',$agentstype);



        $this->set('_serialize', ['users']);
          $this->set('title', 'Shore Excursions');
             $this->set('view_name', 'shore');
    }

      public function shoreresult()
    {
         $this->viewBuilder()->layout('agentslayout');


        // debug($hotel_hot);
        $users = array();
        $this->set(compact('users'));

        $this->set('_serialize', ['users']);
          $this->set('title', 'Agent Tours');
             $this->set('view_name', 'toursresult');
    }

  public function shorebooknow()
    {
         $this->viewBuilder()->layout('agentslayout');


        // debug($hotel_hot);
        $users = array();
        $this->set(compact('users'));

        $this->set('_serialize', ['users']);
          $this->set('title', 'Agent Tours');
             $this->set('view_name', 'tour');
    }

public function transfer()
    {
         $this->viewBuilder()->layout('agentslayout');
     

         $this->loadModel("Transferdrive");
         $transfer_hot = $this->Transferdrive->find('all',array('limit'=>3));
          $this->set('transfer_hot', $transfer_hot);

          $this->loadModel("Hoteldiachi");
         $top_localtion = $this->Hoteldiachi->find('all',array('limit'=>3))->where(['top =' => 1]);
          $this->set('top_localtion', $top_localtion);


        // debug($hotel_hot);
        $users = array();
        $this->set(compact('users'));




        $this->set('_serialize', ['users']);
          $this->set('title', 'Agent');
          $this->set('view_name', 'transfer');
    }
//ferries?sub_categ_name=mediterranean
public function ferries()
    {
         $this->viewBuilder()->layout('agentslayout');
     

         $this->loadModel("Cruisedrive");
         $transfer_hot = $this->Cruisedrive->find('all',array('limit'=>3));
          $this->set('transfer_hot', $transfer_hot);

          $this->loadModel("Hoteldiachi");
         $top_localtion = $this->Hoteldiachi->find('all',array('limit'=>3))->where(['top =' => 1]);
          $this->set('top_localtion', $top_localtion);


        // debug($hotel_hot);
        $users = array();
        $this->set(compact('users'));




        $this->set('_serialize', ['users']);
          $this->set('title', 'Agent');
          $this->set('view_name', 'ferries');
    }

public function cruise()
    {
         $this->viewBuilder()->layout('agentslayout');
     

         $this->loadModel("Cruisedrive");
         $transfer_hot = $this->Cruisedrive->find('all',array('limit'=>3));
          $this->set('transfer_hot', $transfer_hot);

          $this->loadModel("Hoteldiachi");
         $top_localtion = $this->Hoteldiachi->find('all',array('limit'=>3))->where(['top =' => 1]);
          $this->set('top_localtion', $top_localtion);


        // debug($hotel_hot);
        $users = array();
        $this->set(compact('users'));




        $this->set('_serialize', ['users']);
          $this->set('title', 'Agent');
          $this->set('view_name', 'cruise');
    }

  public function testsearch(){
    header('Content-Type: application/json');
  $this->loadModel("Hoteldiachi");
  $this->loadModel("Newhotel");
        $diachi = $this->Hoteldiachi->find("all");
        $diachi_view = array();
        foreach ($diachi as $key => $valuediachi) {
          $diachi_view[] =  array('hinhanh' => '/upload/localtion/'.$valuediachi['hinhanh'],'name' =>$valuediachi['diachi'],'phanloai'=>'diachi');
      }
       $hotel = $this->Newhotel->find("all");
        $hotel_view = array();
        foreach ($hotel as $key => $valuehotel) {
          $hotel_view[] =  array('hinhanh' => '/upload/hotel/'.$valuehotel['hinhanh'],'name' =>$valuehotel['namehotel'],'phanloai'=>'hotel');
      }
$array_array = array_merge($diachi_view,$hotel_view);
echo json_encode($array_array);
die();


  }
        public function ApiSearchHotel()
        {
          $session = $this->request->session();
          $data_logo = $this->request->data['data'];
          $session->write('hotel.search', $data_logo);
          $session->write('hotel.status', '1');
          $data_result = array('status'=>'ok');
          echo json_encode($data_result);
          die();
        }
         public function ApiSearchActivity()
        {
          $session = $this->request->session();
          $data_logo = $this->request->data['data'];
          $session->write('activity.search', $data_logo);
          $session->write('activity.status', '1');
          $data_result = array('status'=>'ok');
          echo json_encode($data_result);
          die();
        }

     public function viewbooking($id_order = null)
    {
      $data_request = array();
     
      $this->loadModel("Booking");
      $data_order_view =  $this->Booking->find()->where(['id_order'=>$id_order])->toArray();
     //  debug($data_order);
       $this->set('id_order', $id_order);
      $data_order = $data_order_view[0]['data_order'];
     
      $data_ex_room = json_decode($data_order,TRUE);
    
      $this->set('data_user_room', $data_ex_room['user']);
       $this->set('data_ex_room', $data_ex_room['data_ex_room']);
       $this->set('data_price_sum', [$data_order_view[0]['sumprice']]);
        $this->set('view_name', 'hotel');
        $this->viewBuilder()->layout('agentslayout');
        $this->set('newhotel', []);
        $this->set('_serialize', ['newhotel']);
        $this->set('title', 'Booking '.$id_order);
    }

}
