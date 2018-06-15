<?php
/**
 * CakePHP(tm) : Rapid Development Framework (http://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 *
 * Licensed under The MIT License
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 * @link      http://cakephp.org CakePHP(tm) Project
 * @since     3.0.0
 * @license   http://www.opensource.org/licenses/mit-license.php MIT License
 */
namespace App\View;

use Cake\View\View;
use Cake\Controller\Controller;
use Cake\Event\Event;
use Cake\Utility\ClassRegistry;
use Cake\Core\Configure;
use Cake\I18n\Time;
use Cake\Network\Session;
use Cake\View\Helper\SessionHelper;
/**
 * Application View
 *
 * Your application’s default view class
 *
 * @link http://book.cakephp.org/3.0/en/views.html#the-app-view
 */
class AppView extends View
{

    /**
     * Initialization hook method.
     *
     * Use this method to add common initialization code like loading helpers.
     *
     * e.g. `$this->loadHelper('Html');`
     *
     * @return void
     */
    public function initialize()
    {
        //adding code as per "maiconpinto/cakephp-adminlte-theme"
        $this->loadHelper('Form', ['className' => 'AdminLTE.Form']);
    }
    public function user_name_by_id($id){
       // $this->loadModel("Usersm");
        $this->loadModel('Usersm');
      //  $var = ClassRegistry::init("Usersm");
         $slideagent = $this->Usersm->find('all')->where(['id =' =>$id])->toArray();
         //debug($slideagent);
         return $slideagent[0]['email'];
    }  
}
