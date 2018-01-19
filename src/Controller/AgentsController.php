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
        $this->Auth->allow(['index','hotelSearch','testsearch']);
    }
    public function index()
    {
         $this->viewBuilder()->layout('agentslayout');
     

         $this->loadModel("Newhotel");
         $hotel_hot = $this->Newhotel->find('all',array('limit'=>6));
          $this->set('hotel_hot', $hotel_hot);

          $this->loadModel("Slideagent");
         $slide = $this->Slideagent->find('all',array('limit'=>3));
          $this->set('slide', $slide);


        // debug($hotel_hot);
        $users = array();
        $this->set(compact('users'));




        $this->set('_serialize', ['users']);
          $this->set('title', 'Agent');
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

  }


  public function activities()
    {
         $this->viewBuilder()->layout('agentslayout');
     

         $this->loadModel("Newhotel");
         $hotel_hot = $this->Newhotel->find('all',array('limit'=>3));
          $this->set('hotel_hot', $hotel_hot);

          $this->loadModel("Hoteldiachi");
         $top_localtion = $this->Hoteldiachi->find('all',array('limit'=>3))->where(['top =' => 1]);
          $this->set('top_localtion', $top_localtion);


        // debug($hotel_hot);
        $users = array();
        $this->set(compact('users'));




        $this->set('_serialize', ['users']);
          $this->set('title', 'Agent');
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
    }



  public function testsearch(){
    header('Content-Type: application/json');
  $this->loadModel("Hoteldiachi");
        $diachi = $this->Hoteldiachi->find("all");
        $diachi_view = array();
        foreach ($diachi as $key => $valuediachi) {
          $diachi_view[] =  $valuediachi['diachi'];
      }


echo json_encode(array(
    "status" => true,
    "error"  => null,
    "data"   => array(
        "beer"   => array(
            "Address"   => $diachi_view,
            
            "City" => array(
                "Belhaven Black Scottish Stout", "Guinness Draught Bottle", "Guinness Extra Stout", "Guinness Pub Draught", "Murphys Irish Stout",
                "Muskoka Chocolate Cranberry", "Sleeman Fine Porter"
            ),
            "Haha" => array(
                "Boxer Watermelon", "Bud Light Lime Lime-a-rita", "Bud Light Lime Mang-o-rita", "Bud Light Lime Straw-ber-rita", "Colt 45",
                "DJ Trotters Flirty Daiquiri", "DJ Trotters Lolita", "Four Loko Black Cherry", "Four Loko Fruit Punch", "Four Loko Grape", "Four Loko Lemonade",
                "Four Loko Peach", "Four Loko Watermelon", "Kensington Watermelon Wheat", "Mad Jack", "Mickeys", "Mojo Fruit Punch", "Mojo Shot Blue Lagoon",
                "Mojo Shot Melon Ball", "Mojo Shot Sourberry", "Mojo Strawberry & Kiwi", "Mons Abbey Blonde", "Mons Abbey Witte", "Olde English 800",
                "Pepito Sangria", "Poppers Cran Ice", "Poppers Hard Ice", "Poppers Orange Smoothie", "Poppers Pink", "Poppers Ricco Sangria", "Poppers Wild Ice",
                "Seagram Iced Lemon Tea", "Seagram Lemon Lime", "Seagram Orange Mango", "Seagram Wildberry", "Seagram Wildberry Extra 6.9", "Twisted Tea", "Wellington Iron Duke"
            )
        )
    )
));
die();
  }
}
