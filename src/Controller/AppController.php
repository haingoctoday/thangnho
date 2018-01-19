<?php
/**
 * CakePHP(tm) : Rapid Development Framework (http://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 * @link      http://cakephp.org CakePHP(tm) Project
 * @since     0.2.9
 * @license   http://www.opensource.org/licenses/mit-license.php MIT License
 */
namespace App\Controller;

use Cake\Controller\Controller;
use Cake\Event\Event;

use Cake\Core\Configure;
use Cake\I18n\Time;
use Cake\Network\Session;
use Cake\View\Helper\SessionHelper;
/**
 * Application Controller
 *
 * Add your application-wide methods in the class below, your controllers
 * will inherit them.
 *
 * @link http://book.cakephp.org/3.0/en/controllers.html#the-app-controller
 */
class AppController extends Controller
{

    /**
     * Initialization hook method.
     *
     * Use this method to add common initialization code like loading components.
     *
     * e.g. `$this->loadComponent('Security');`
     *
     * @return void
     */
    public function initialize()
    {
        parent::initialize();

        $this->loadComponent('RequestHandler');
        $this->loadComponent('Flash');
       $this->loadComponent('Auth', [
            'authenticate' => [
                'Form' => [
                    'fields' => ['username' => 'email']
                ]
            ],
            'loginRedirect' => [
                'controller' => 'Newhotel',
                'action' => 'index'
            ],
            'logoutRedirect' => [
                'controller' => 'Homes',
                'action' => 'index',
                'home'
            ]
        ]);
    }

    /**
     * Before render callback.
     *
     * @param \Cake\Event\Event $event The beforeRender event.
     * @return \Cake\Network\Response|null|void
     */
    public function beforeRender(Event $event)
    {
        if (!array_key_exists('_serialize', $this->viewVars) &&
            in_array($this->response->type(), ['application/json', 'application/xml'])
        ) {
            $this->set('_serialize', true);
        }

        //adding code as per "maiconpinto/cakephp-adminlte-theme"
        //$this->set('theme', Configure::read('Theme'));
           $this->viewBuilder()->theme('AdminLTE');

        $this->set('theme', Configure::read('Theme'));
    }

    public function beforeFilter(Event $event)
    {
       $this->viewBuilder()->layout('custom_default');
        return parent::beforeFilter($event); // TODO: Change the autogenerated stub
    }


    public function getDatesFromRange($start, $end, $format = 'Y-m-d') {
        $begin = new Time($start);
        $end = new Time($end);
        $end = $end->modify( '+1 day' ); 
        $days = array();
        $data = "7.5";
            while($begin < $end) {
                $day_num = $begin->format("N"); 
                           $days[] = $begin->format("m/d/Y");
                    $begin->modify('+1 day');
            }
        return $days;
    }

}
