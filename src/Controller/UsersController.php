<?php
namespace App\Controller;

use App\Controller\AppController;
use Cake\I18n\Time;
use Cake\Network\Session;
use Cake\Auth\DefaultPasswordHasher; //include this line
use Cake\Network\Email\Email;
use Cake\Event\Event;
use Cake\Routing\Router;
use Cake\Utility\Security;
/**
 * Usersm Controller
 *
 * @property \App\Model\Table\UsersmTable $Usersm
 */
class UsersController extends AppController
{

     public function beforeFilter(Event $event)
    {
        parent::beforeFilter($event);
        // Allow users to register and logout.
        // You should not add the "login" action to allow list. Doing so would
        // cause problems with normal functioning of AuthComponent.
        $this->Auth->allow(['add', 'logout','registration','thankyou','fotgotpass','fotgotpassinbox','fotgotpassinboxok','resetpass']);
    }
    /**
     * Index method
     *
     * @return \Cake\Network\Response|null
     */
     public function logout()
    {
        return $this->redirect($this->Auth->logout());
    }

    public function index()
    {
        $users = $this->paginate($this->Users);

        $this->set(compact('users'));
        $this->set('_serialize', ['users']);
    }

     public function registration()
    {
           $this->viewBuilder()->layout('login_reg');
        $this->loadModel("Agencydetail");

           $agencydetail = $this->Agencydetail->newEntity();
       if ($this->request->is(['patch', 'post', 'put'])) {

            $agencydetail = $this->Agencydetail->patchEntity($agencydetail, $this->request->data);
            if ($this->Agencydetail->save($agencydetail)) {
                //$this->Flash->success(__('The {0} has been saved.', 'Agencydetail'));
              
              //redirect to page thank

                return $this->redirect(['action' => 'thankyou']);
            } else {
                $this->Flash->error(__('The {0} could not be saved. Please, try again.', 'Agencydetail'));
            }
        }
        $this->set(compact('agencydetail'));
        $this->set('_serialize', ['agencydetail']);
          $this->set('title', 'Sign-up');
    }

    public function thankyou()
    {
        $this->viewBuilder()->layout('login_no_f');
        $users = $this->paginate($this->Users);

        $this->set(compact('users'));
        $this->set('_serialize', ['users']);
         $this->set('title', 'Thank You Registration');
    }

    public function fotgotpass()
    {
      $this->viewBuilder()->layout('login_no_f');
      $users = $this->paginate($this->Users);

      $this->set(compact('users'));
      $this->set('_serialize', ['users']);

      if ($this->request->is('post')) {


        $query = $this->Users->find('all', [
          'conditions' => ['email' => $this->request->data['email']]
        ]);
        $row = $query->first();

        if($row){
         $link =  Router::url([ 
          'controller' => 'Users','action' => 'fotgotpassinboxok',
          'comid' => 1,
          'comslug' =>$this->request->data['email'],
          'sevid'=>2,
          'sevslug'=>'test',

        ]);


         $email = new Email();
         try {
          $email->from(['twt@gmail.com' => 'Reset Password'])
          ->to($this->request->data['email'])
          ->subject('Reset Password')
          ->send('http://localhost:89'.$link);

        } catch (Exception $e) {

          echo 'Exception : ',  $e->getMessage(), "\n";

        }
        return $this->redirect(['action' => 'fotgotpassinbox']);

        }else{
         $this->Flash->error('Email not exists !!!!');
                    // return $this->redirect(['action' => 'fotgotpassinbox']);
       }
     }
   }

     public function fotgotpassinbox()
    {
        $this->viewBuilder()->layout('login_no_f');
        $users = $this->paginate($this->Users);

        $this->set(compact('users'));
        $this->set('_serialize', ['users']);
         $this->set('title', 'Forgot Password');
    }
     public function fotgotpassinboxok()
    {
        $this->viewBuilder()->layout('login_no_f');
    $key = 'wt1U5MACWJFTXGenFoZoiLwQGrLgdbHA';
    $result = base64_encode($this->request->query['comslug'].$key);
     
        $this->set('url_send',$result);
        $users = $this->paginate($this->Users);

        $this->set(compact('users'));
        $this->set('_serialize', ['users']);
         $this->set('title', 'Forgot Password');
    }
    public function resetpass($cipher = null)
    {
       
        $key = 'wt1U5MACWJFTXGenFoZoiLwQGrLgdbHA';
                $result = base64_decode($cipher);
        $result  = str_replace($key,"",$result);
     

        $this->viewBuilder()->layout('login_no_f');

         $query = $this->Users->find('all', [
                'conditions' => ['email' => $result]
            ]);
          $row = $query->first();
         
         $user = $this->Users->get($row['id']);

      
          if(!empty($this->request->data))
        {
             $hasher = new DefaultPasswordHasher();
        $password_new =  $hasher->hash($this->request->data['password1']);
        $password_new1 =  $hasher->hash($this->request->data['password2']);
     
            $user = $this->Users->patchEntity($user, [
               //     'old_password'      => $this->request->data['old_password'],
                    'password'          => $password_new,
                    'password1'      => $password_new,
                    'password2'  => $password_new1,
                ]);
            
            if($this->Users->save($user))
            {
                $this->Flash->success('Password has been change !');
                //Email code
                $this->redirect(['action'=>'login']);
            }
            else
            {
                $this->Flash->error('Opps! Please try again !!');
            }
            
        }
        $this->set('title', 'Reset Password');
         $this->set('users',$user);

    }



    /**
     * View method
     *
     * @param string|null $id Usersm id.
     * @return \Cake\Network\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $users = $this->Users->get($id, [
            'contain' => []
        ]);

        $this->set('users', $users);
        $this->set('_serialize', ['users']);
    }

    /**
     * Add method
     *
     * @return \Cake\Network\Response|void Redirects on successful add, renders view otherwise.
     */
    public function add($email = null)
    {

        if($email){
            $email  =  $email ;
        }else{
            $email = "";
        }
        $this->set('email_u', $email);
        $users = $this->Users->newEntity();
        if ($this->request->is('post')) {
            $users = $this->Users->patchEntity($users, $this->request->data);
         //    $user = $this->Users->patchEntity($user, $this->request->getData());
            if ($this->Users->save($users)) {
                $this->Flash->success(__('The {0} has been saved.', 'Users'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The {0} could not be saved. Please, try again.', 'Users'));
            }
        }
        $this->set(compact('users'));
        $this->set('_serialize', ['users']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Usersm id.
     * @return \Cake\Network\Response|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $users = $this->Users->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $usersm = $this->Users->patchEntity($users, $this->request->data);
            if ($this->Users->save($users)) {
                $this->Flash->success(__('The {0} has been saved.', 'Users'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The {0} could not be saved. Please, try again.', 'Users'));
            }
        }
        $this->set(compact('users'));
        $this->set('_serialize', ['users']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Usersm id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $users = $this->Users->get($id);
        if ($this->Usersm->delete($users)) {
            $this->Flash->success(__('The {0} has been deleted.', 'Users'));
        } else {
            $this->Flash->error(__('The {0} could not be deleted. Please, try again.', 'Users'));
        }
        return $this->redirect(['action' => 'index']);
    }
     public function login()
    {
        

             $this->viewBuilder()->layout('login_new');
       if ($this->request->is('post')) {
            $user = $this->Auth->identify();
            if ($user) {
                $this->Auth->setUser($user);
                if($user['phanloai'] == 'admin'){
                    return $this->redirect($this->Auth->redirectUrl());
                }
               if($user['phanloai'] == 'user'){
                    return $this->redirect(['controller'=>'Agents','action' => 'index']);

               }

                
            }
            $this->Flash->error(__('Invalid username or password, try again'));
             $this->set('title', 'Login ');
        }
    }

    public function prolife()
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

    public function mybooking()
    {
         $this->viewBuilder()->layout('agentslayout');
     

     
        $users = array();
        $this->set(compact('users'));




        $this->set('_serialize', ['users']);
          $this->set('title', 'My Booking');
    }

     public function agencydetail()
    {
         $this->viewBuilder()->layout('agentslayout');
     

     
        $users = array();
        $this->set(compact('users'));




        $this->set('_serialize', ['users']);
          $this->set('title', 'Agency Detail');
    }


        public function manageusers()
    {
         $this->viewBuilder()->layout('agentslayout');
     

     
        $users = array();
        $this->set(compact('users'));




        $this->set('_serialize', ['users']);
          $this->set('title', 'Agency Users');
    }

        public function editpassword()
    {
         $this->viewBuilder()->layout('agentslayout');
     

     
        $users = array();
        $this->set(compact('users'));




        $this->set('_serialize', ['users']);
          $this->set('title', 'Agency Edit Password');
    }
    
    
    
}
