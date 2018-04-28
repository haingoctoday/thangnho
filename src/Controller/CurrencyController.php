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
class CurrencyController extends AppController
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
       // $this->viewBuilder()->layout('homes');
        parent::beforeFilter($event);
        $this->Auth->allow(['index1']);
    }
    public function index1($current = null)
    {
      $session = $this->request->session();
   //   print_r($current );
      $session->write('Config.language',$current);
      die();
    }



}
