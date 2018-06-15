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
          $this->set('title', 'Login - Twt');
        // Allow users to register and logout.
        // You should not add the "login" action to allow list. Doing so would
        // cause problems with normal functioning of AuthComponent.
        $this->Auth->allow(['add', 'logout','registration','thankyou','fotgotpass','fotgotpassinbox','fotgotpassinboxok','resetpass','loginadmin','forgotpassadmin','forgotpassinboxadmin','forgotpassinboxokadmin','resetpassadmin']);
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
        $this->set('_serialize', ['users']);  $this->set('title', 'Login - Twt');
    }

     public function registration()
    {
           $this->viewBuilder()->layout('login_no');
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
        $this->set('title', 'Forgot Password');
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
        //  ->send('http://twt.vietlac.info'.$link);
         

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
        $this->loadModel("Usersm");
        $key = 'wt1U5MACWJFTXGenFoZoiLwQGrLgdbHA';
                $result = base64_decode($cipher);
        $result  = str_replace($key,"",$result);
     

        $this->viewBuilder()->layout('login_no_f');

         $query = $this->Users->find('all', [
                'conditions' => ['email' => $result]
            ]);
          $row = $query->first();
         
         $user = $this->Usersm->get($row['id']);

      
          if(!empty($this->request->data))
        {
             //$hasher = new DefaultPasswordHasher();
        $password_new =  $this->request->data['password1'];
        $password_new1 =  $this->request->data['password2'];
      if($password_new == $password_new1){
          $this->request->data['password'] = $password_new;
          $user = $this->Users->patchEntity($user,$this->request->data);
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
      }else{
   $this->Flash->error('Opps! Please try again !!');
      }
            
             
            
            
        }
        $this->set('title', 'Reset Password');
         $this->set('users',$user);

    }

        public function changpass($id)
    { 
        $this->loadModel("Usersm");
      
         $user = $this->Usersm->get($id);

      
        if(!empty($this->request->data)){
        
        $password_new =  $this->request->data['password1'];
        $password_new1 =  $this->request->data['password2'];
          if($password_new == $password_new1){
            $this->request->data['password'] = $password_new;
            $user = $this->Users->patchEntity($user,$this->request->data);
              if($this->Users->save($user)){
                $this->Flash->success('Password has been change !');
                $this->redirect(['action'=>'login']);
              }else{
                $this->Flash->error('Opps! Please try again !!');
              }
          }else{
            $this->Flash->error('Opps! Please try again !!');
        }
            
      }
        $this->set('title', 'Reset Password');
         $this->set('users',$user);

    }
 public function forgotpassadmin()
    {
      $this->viewBuilder()->layout('login_no_f');
      $users = $this->paginate($this->Users);

      $this->set(compact('users'));
      $this->set('_serialize', ['users']);
        $this->set('title', 'Forgot Password');
      if ($this->request->is('post')) {


        $query = $this->Users->find('all', [
          'conditions' => ['email' => $this->request->data['email']]
        ]);
        $row = $query->first();

        if($row){
         $link =  Router::url([ 
          'controller' => 'Users','action' => 'forgotpassinboxokadmin',
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
            //  ->send('http://twt.vietlac.info'.$link);

        } catch (Exception $e) {

          echo 'Exception : ',  $e->getMessage(), "\n";

        }
        return $this->redirect(['action' => 'forgotpassinboxadmin']);

        }else{
         $this->Flash->error('Email not exists !!!!');
                    // return $this->redirect(['action' => 'fotgotpassinbox']);
       }
     }
   }

     public function forgotpassinboxadmin()
    {
        $this->viewBuilder()->layout('login_no_f');
        $users = $this->paginate($this->Users);

        $this->set(compact('users'));
        $this->set('_serialize', ['users']);
         $this->set('title', 'Forgot Password');
    }
     public function forgotpassinboxokadmin()
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
    public function resetpassadmin($cipher = null)
    { 
        $this->loadModel("Usersm");
        $key = 'wt1U5MACWJFTXGenFoZoiLwQGrLgdbHA';
                $result = base64_decode($cipher);
        $result  = str_replace($key,"",$result);
     

        $this->viewBuilder()->layout('login_no_f');

         $query = $this->Users->find('all', [
                'conditions' => ['email' => $result]
            ]);
          $row = $query->first();
         
         $user = $this->Usersm->get($row['id']);

      
          if(!empty($this->request->data))
        {
             //$hasher = new DefaultPasswordHasher();
        $password_new =  $this->request->data['password1'];
        $password_new1 =  $this->request->data['password2'];
      if($password_new == $password_new1){
          $this->request->data['password'] = $password_new;
          $user = $this->Users->patchEntity($user,$this->request->data);
         
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
      }else{
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
           // $hasher = new DefaultPasswordHasher();
          //  $password_new =  $hasher->hash($this->request->data['password']);
          //  $this->request->data['password'] = $password_new;
            $users = $this->Users->patchEntity($users, $this->request->data);
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
          $this->loadModel("Usersm");
        if(!$id){
           return $this->redirect(['action' => 'index']);  
        }
        $users = $this->Usersm->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {

            $users = $this->Users->patchEntity($users,  $this->request->data);
        
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

    public function editImage($id = null)
    {
        if(!$id){
           return $this->redirect(['action' => 'index']);  
        }
        $users = $this->Users->get($id, [
            'contain' => []
        ]);
         $image_old =  $users->images;
        if ($this->request->is(['patch', 'post', 'put'])) {
                if (!empty($this->request->data)) {
            if (!empty($this->request->data['images']['name'])) {
            $file = $this->request->data['images']; //put the data into a var for easy use
            $ext = substr(strtolower(strrchr($file['name'], '.')), 1); //get the extension
            $arr_ext = array('jpg', 'jpeg', 'gif','png'); //set allowed extensions
            $setNewFileName = time() . "_" . rand(000000, 999999);

            //only process if the extension is valid
            if (in_array($ext, $arr_ext)) {
                //do the actual uploading of the file. First arg is the tmp name, second arg is 
                //where we are putting it
                move_uploaded_file($file['tmp_name'], WWW_ROOT . '/upload/users/' . $setNewFileName . '.' . $ext);

                //prepare the filename for database entry 
                $imageFileName = $setNewFileName . '.' . $ext;
          
              }
            }
        }
            if (!empty($this->request->data['images']['name'])) {
                        $this->request->data['images'] = $imageFileName;
                    }else{
                     $this->request->data['images'] = $image_old;
                 }
            $users = $this->Users->patchEntity($users,  $this->request->data);
            if ($this->Users->save($users)) {
                $this->Flash->success(__('The {0} has been saved.', 'Users'));
                return $this->redirect(['action' => 'editImage']);
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
              $this->set('title', 'Login - Twt');
        }
    }

 public function loginadmin()
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
              $this->set('title', 'Admin Login - Twt');
        }
    }
    public function profile()
    {
         $this->viewBuilder()->layout('agentslayout');
     $u = $_SESSION['Auth'];
     $id_user = $u['User']['id'];
        
    $users = $this->Users->get($id_user, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
          
          if (isset($this->request->data['interests'])) {
             $this->request->data['interests'] = json_encode($this->request->data['interests']);
          }
           
            $usersm = $this->Users->patchEntity($users, $this->request->data);
            if ($this->Users->save($users)) {
                $this->Flash->success(__('The {0} has been saved.', 'Users'));
                return $this->redirect(['action' => 'profile']);
            } else {
                $this->Flash->error(__('The {0} could not be saved. Please, try again.', 'Users'));
            }
        }
        $this->set(compact('users'));
        //$this->set(compact('users'));




        $this->set('_serialize', ['users']);
          $this->set('title', 'Agent');
          $this->set('view_name', 'profile');
    }

    public function mybooking()
    {
         $this->viewBuilder()->layout('agentslayout');
         $u = $_SESSION['Auth'];
     $id_user = $u['User']['id'];
 $product_type = array(
      ''=>'All Product Type',
      'hotel'=>'hotel',
      'activity'=>'activity',
      'tour'=>'tour',
      'shore'=>'shore',
      'transfer'=>'transfer',
      'cruise'=>'cruise',
    );
          

           $this->loadModel("Booking");
          $booking_data =  $this->Booking->find()->where(['user_order'=>$id_user]);
              $this->loadModel("Usersm");
       $data_user = $this->Usersm->find('all')->toArray();
       $user_view = array();
       foreach ($data_user as $key => $value_user) {
                $user_view[$value_user['id']] =  $value_user['email'];
       }
        $this->set('user_view', $user_view);
          $this->paginate = [
        'limit' => 10,
          ];
           if ($this->request->is(['patch', 'post', 'put'])) {
            debug($this->request->data);

            $data_search =$this->request->data;
            if($data_search['product_type'] != ''){
              $loai = "loai=".$product_type[$data_search['product_type']];
            }else{
              $loai = "loai like '%%'";
            }
             if($data_search['status_order_main'] != '0'){
              $status_a = "status=".$data_search['status_order_main'];
            }else{
              $status_a = "status like '%%'";
            }
             $booking_data = $this->Booking->find('all', [
                  'conditions' => [ 
                    'user_order' => $id_user,
                    'id_order LIKE' => '%'.$data_search['bookingid'].'%',
                    $status_a,
                    'reference LIKE' => '%'.$data_search['reference'].'%', 
                    $loai,  
                  ]
            ]);
           }

       $booking_data = $this->paginate($booking_data);
       $this->set('booking_data',$booking_data);
        $users = array();
        $this->set(compact('users'));
        $this->set('_serialize', ['users']);
          $this->set('title', 'My Booking');
          $this->set('view_name', 'mybooking');
    }

public function bookroom()
    {
         $this->viewBuilder()->layout('agentslayout');


//
 if ($this->request->is(['patch', 'post', 'put'])) {
        
// $this->request->data = [
//     'idhotel' => '4',
//     'idroom-a' => '["13","14","15"]'
// ];
           $input_room = json_decode($this->request->data['idroom-a'],TRUE);
           $this->set('count_room', count($input_room));
  $this->loadModel("Hotelandphong");
     $this->loadModel("Newhotel");
        $data_room =  $this->Hotelandphong->find('all')
        //->select(['*','c.nameroom'])
->select(['c.nameroom'])
    ->select($this->Hotelandphong)

        ->where(['Hotelandphong.id IN'=>$input_room])->hydrate(false)->join([
        'c' => [
            'table' => 'hotelphong',
            'type' => 'LEFT',
            'conditions' => 'c.id = Hotelandphong.loaiphong',
        ]
    ])->toArray();
        $data_hotel =  $this->Newhotel->find()->where(['id'=>$this->request->data['idhotel']])->toArray();
//debug($data_room);
        $users = array();
        $this->set(compact('users'));
        $this->set('data_hotel', $data_hotel);
        $this->set('data_room', $data_room);
      } 
        $this->set('_serialize', ['users']);
        $this->set('title', 'Booking Room of '.$data_hotel[0]['namehotel'] );
        $this->set('view_name', 'bookroom');
    }

     public function agencydetail()
    {
         $this->viewBuilder()->layout('agentslayout');
     
$u = $_SESSION['Auth'];

     $id_user = $u['User']['email'];
          $this->loadModel("Agencydetail");
          $data_view =array();
          $data_hotel =  $this->Agencydetail->find('all')->where(['email'=>$id_user])->toArray();
       //   debug($data_hotel);
          if(isset($data_hotel[0])){
           $data_view =  $data_hotel[0];
          }
      $this->set('data_view', $data_view);
        $users = array();
        $this->set(compact('users'));




        $this->set('_serialize', ['users']);
          $this->set('title', 'Agency Detail');
          $this->set('view_name', 'agencydetail');
    }


        public function manageusers()
    {
         $this->viewBuilder()->layout('agentslayout');

      $u = $_SESSION['Auth'];
     $id_user = $u['User']['id'];
     $this->loadModel("Groupuser");
     //  $data_user = $this->Groupuser->find('all')->toArray();
       $data_user = $this->Groupuser->find('all',['order' => ['id' => 'DESC']])->where( 
               ['userGroup LIKE' =>'%"'.$id_user.'"%']
              )->toArray();

       $user_view_data = array();
     // debug($data_user[0]['userGroup']);
      if(isset($data_user[0]['userGroup'])){
        $user_view_data = json_decode($data_user[0]['userGroup'],TRUE);
        
      }
       $this->set('user_view_data', $user_view_data);
       $this->loadModel("Usersm");
       $data_user = $this->Usersm->find('all')->toArray();
       $user_view = array();
       foreach ($data_user as $key => $value_user) {
                $user_view[$value_user['id']] =  $value_user['email'];
       }
        $this->set('user_view', $user_view);
        $users = array();
        $this->set(compact('users'));




        $this->set('_serialize', ['users']);
          $this->set('title', 'Agency Users');
          $this->set('view_name', 'manageusers');
    }

        public function editpassword()
    {
         $this->viewBuilder()->layout('agentslayout');
     

      $this->loadModel("Usersm");
        $users = array();
        $this->set(compact('users'));
         $user = $this->Usersm->get($this->Auth->user('id'));
     
         if ($this->request->is(['patch', 'post', 'put'])) {

          $data_base = $this->request->data;
        
          $user = $this->Usersm->patchEntity($user, [
                    'old_password'      => $this->request->data['old_password'],
                    'password'          => $this->request->data['password1'],
                    'password1'      => $this->request->data['password1'],
                    'password2'  => $this->request->data['password2']
                ],
                    ['validate' => 'password']);


           if($this->Users->save($user))
            {
                $this->Flash->success('Password has changed !');
                //Email code
                $this->redirect(['action'=>'editpassword']);
            }
            else
            {
                $this->Flash->error('Error, please try again  !!');
            }
         }
       


        $this->set('_serialize', ['users']);
          $this->set('title', 'Agency Edit Password');
           $this->set('view_name', 'manageusers');
    }
    
    
    
}
