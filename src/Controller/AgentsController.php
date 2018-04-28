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
        $this->Auth->allow(['hotelSearch','testsearch']);
    }
    public function index()
    {
         $this->viewBuilder()->layout('agentslayout');
     

         $this->loadModel("Newhotel");
         $hotel_hot = $this->Newhotel->find('all',array('limit'=>6));
          $this->set('hotel_hot', $hotel_hot);

          $this->loadModel("Slideagent");
         $slide = $this->Slideagent->find('all',array('limit'=>6));
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

       $this->set('title', 'Agent');
        $this->set('view_name', 'hotel');
  

  }

  public function hotelSearchResult(){
      //$this->viewBuilder()->layout('agents');
        $this->viewBuilder()->layout('agentslayout');
        
         $this->loadModel("Newhotel");
         $hotel_hot = $this->Newhotel->find('all',array('limit'=>3));
          $this->set('hotel_hot', $hotel_hot);
        //$users = $this->paginate($this->Users);
      $users = array();

       $this->set('title', 'Agent');
       $this->set('view_name', 'hotelSearchResult');

  }
  public function hotelSearchResult1(){
      //$this->viewBuilder()->layout('agents');
        $this->viewBuilder()->layout('agentslayout');
        
         $this->loadModel("Newhotel");
         $hotel_hot = $this->Newhotel->find('all',array('limit'=>3));
          $this->set('hotel_hot', $hotel_hot);
        //$users = $this->paginate($this->Users);
      $users = array();

       $this->set('title', 'Agent');
       $this->set('view_name', 'hotelSearchResult1');

  }

  public function tours()
    {
         $this->viewBuilder()->layout('agentslayout');
     

         $this->loadModel("Newactivity");
         $hotel_hot = $this->Newactivity->find('all',array('limit'=>3))->where(['loai =' => 'tour']);
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
             $this->set('view_name', 'tours');
    }

  public function toursresult()
    {
         $this->viewBuilder()->layout('agentslayout');


        // debug($hotel_hot);
        $users = array();
        $this->set(compact('users'));

        $this->set('_serialize', ['users']);
          $this->set('title', 'Agent Tours');
             $this->set('view_name', 'toursresult');
    }

  public function toursbooknow()
    {
         $this->viewBuilder()->layout('agentslayout');


        // debug($hotel_hot);
        $users = array();
        $this->set(compact('users'));

        $this->set('_serialize', ['users']);
          $this->set('title', 'Agent Tours');
             $this->set('view_name', 'tours');
    }

  public function activities()
    {
        $this->viewBuilder()->layout('agentslayout');
     

         $this->loadModel("Newactivity");
         $hotel_hot = $this->Newactivity->find('all',array('limit'=>3))->where(['loai =' => 'activity']);
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
          $this->set('title', 'Agent Activities');
             $this->set('view_name', 'activities');
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
// debug($array_array);
// debug($hotel_view);
echo json_encode($array_array);
die();

echo json_encode(array(
    array(
        "name"          => "Ducks",
        "img"           => "ducks",
        "city"          => "Anaheim",
        "id"            => "ANA",
        "conference"    => "Western",
        "division"      => "Pacific"
    ),
    array(
        "name"          => "Thrashers",
        "img"           => "thrashers",
        "city"          => "Atlanta",
        "id"            => "ATL",
        "conference"    => "Eastern",
        "division"      => "Southeast"
    ),
    array(
        "name"          => "Bruins",
        "img"           => "bruins",
        "city"          => "Boston",
        "id"            => "BOS",
        "conference"    => "Eastern",
        "division"      => "Northeast"
    ),
    array(
        "name"          => "Sabres",
        "img"           => "sabres",
        "city"          => "Buffalo",
        "id"            => "BUF",
        "conference"    => "Eastern",
        "division"      => "Northeast"
    ),
    array(
        "name"          => "Flames",
        "img"           => "flames",
        "city"          => "Calgary",
        "id"            => "CGY",
        "conference"    => "Western",
        "division"      => "Northwest"
    ),
    array(
        "name"          => "Hurricanes",
        "img"           => "hurricanes",
        "city"          => "Carolina",
        "id"            => "CAR",
        "conference"    => "Eastern",
        "division"      => "Southeast"
    ),
    array(
        "name"          => "Blackhawks",
        "img"           => "blackhawks",
        "city"          => "Chicago",
        "id"            => "CHI",
        "conference"    => "Western",
        "division"      => "Central"
    ),
    array(
        "name"          => "Avalanche",
        "img"           => "avalanche",
        "city"          => "Colorado",
        "id"            => "COL",
        "conference"    => "Western",
        "division"      => "Northwest"
    ),
    array(
        "name"          => "Bluejackets",
        "img"           => "bluejackets",
        "city"          => "Columbus",
        "id"            => "CBJ",
        "conference"    => "Western",
        "division"      => "Central"
    ),
    array(
        "name"          => "Stars",
        "img"           => "stars",
        "city"          => "Dallas",
        "id"            => "DAL",
        "conference"    => "Western",
        "division"      => "Pacific"
    ),
    array(
        "name"          => "Red Wings",
        "img"           => "redwings",
        "city"          => "Detroit",
        "id"            => "DET",
        "conference"    => "Western",
        "division"      => "Central"
    ),
    array(
        "name"          => "Oilers",
        "img"           => "oilers",
        "city"          => "Edmonton",
        "id"            => "EDM",
        "conference"    => "Western",
        "division"      => "Northwest"
    ),
    array(
        "name"          => "Panthers",
        "img"           => "panthers",
        "city"          => "Florida",
        "id"            => "FLA",
        "conference"    => "Eastern",
        "division"      => "Southeast"
    ),
    array(
        "name"          => "Kings",
        "img"           => "kings",
        "city"          => "Los Angeles",
        "id"            => "LAK",
        "conference"    => "Western",
        "division"      => "Pacific"
    ),
    array(
        "name"          => "Wild",
        "img"           => "wild",
        "city"          => "Minnesota",
        "id"            => "MIN",
        "conference"    => "Western",
        "division"      => "Northwest"
    ),
    array(
        "name"          => "Canadiens",
        "img"           => "canadiens",
        "city"          => "Montreal",
        "id"            => "MTL",
        "conference"    => "Eastern",
        "division"      => "Northeast"
    ),
    array(
        "name"          => "Predators",
        "img"           => "predators",
        "city"          => "Nashville",
        "id"            => "NSH",
        "conference"    => "Western",
        "division"      => "Central"
    ),
    array(
        "name"          => "Devils",
        "img"           => "devils",
        "city"          => "New Jersey",
        "id"            => "NJD",
        "conference"    => "Eastern",
        "division"      => "Atlantic"
    ),
    array(
        "name"          => "Islanders",
        "img"           => "islanders",
        "city"          => "New York",
        "id"            => "NYI",
        "conference"    => "Eastern",
        "division"      => "Atlantic"
    ),
    array(
        "name"          => "Rangers",
        "img"           => "rangers",
        "city"          => "New York",
        "id"            => "NYR",
        "conference"    => "Eastern",
        "division"      => "Atlantic"
    ),
    array(
        "name"          => "Senators",
        "img"           => "senators",
        "city"          => "Ottawa",
        "id"            => "OTT",
        "conference"    => "Eastern",
        "division"      => "Northeast"
    ),
    array(
        "name"          => "Flyers",
        "img"           => "flyers",
        "city"          => "Philadelphia",
        "id"            => "PHI",
        "conference"    => "Eastern",
        "division"      => "Atlantic"
    ),
    array(
        "name"          => "Coyotes",
        "img"           => "coyotes",
        "city"          => "Phoenix",
        "id"            => "PHX",
        "conference"    => "Western",
        "division"      => "Pacific"
    ),
    array(
        "name"          => "Penguins",
        "img"           => "penguins",
        "city"          => "Pittsburgh",
        "id"            => "PIT",
        "conference"    => "Eastern",
        "division"      => "Atlantic"
    ),
    array(
        "name"          => "Sharks",
        "img"           => "sharks",
        "city"          => "San Jose",
        "id"            => "SJS",
        "conference"    => "Western",
        "division"      => "Pacific"
    ),
    array(
        "name"          => "Blues",
        "img"           => "blues",
        "city"          => "St. Louis",
        "id"            => "STL",
        "conference"    => "Western",
        "division"      => "Central"
    ),
    array(
        "name"          => "Lightning",
        "img"           => "lightning",
        "city"          => "Tampa Bay",
        "id"            => "TBL",
        "conference"    => "Eastern",
        "division"      => "Southeast"
    ),
    array(
        "name"          => "Maple Leafs",
        "img"           => "mapleleafs",
        "city"          => "Toronto",
        "id"            => "TOR",
        "conference"    => "Eastern",
        "division"      => "Northeast"
    ),
    array(
        "name"          => "Canucks",
        "img"           => "canucks",
        "city"          => "Vancouver",
        "id"            => "VAN",
        "conference"    => "Western",
        "division"      => "Northwest"
    ),
    array(
        "name"          => "Capitals",
        "img"           => "capitals",
        "city"          => "Washington",
        "id"            => "WSH",
        "conference"    => "Eastern",
        "division"      => "Southeast"
    ),
    array(
        "name"          => "Jets",
        "img"           => "jets",
        "city"          => "Winnipeg",
        "id"            => "WPG",
        "conference"    => "Eastern",
        "division"      => "Southeast"
    )
));
  }
}
