<?php
/**
 * Routes configuration
 *
 * In this file, you set up routes to your controllers and their actions.
 * Routes are very important mechanism that allows you to freely connect
 * different URLs to chosen controllers and their actions (functions).
 *
 * CakePHP(tm) : Rapid Development Framework (http://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 * @link          http://cakephp.org CakePHP(tm) Project
 * @license       http://www.opensource.org/licenses/mit-license.php MIT License
 */

use Cake\Core\Plugin;
use Cake\Routing\RouteBuilder;
use Cake\Routing\Router;
use Cake\Routing\Route\DashedRoute;

/**
 * The default class to use for all routes
 *
 * The following route classes are supplied with CakePHP and are appropriate
 * to set as the default:
 *
 * - Route
 * - InflectedRoute
 * - DashedRoute
 *
 * If no call is made to `Router::defaultRouteClass()`, the class used is
 * `Route` (`Cake\Routing\Route\Route`)
 *
 * Note that `Route` does not do any inflections on URLs which will result in
 * inconsistently cased URLs when used with `:plugin`, `:controller` and
 * `:action` markers.
 *
 */
Router::defaultRouteClass(DashedRoute::class);

Router::scope('/', function (RouteBuilder $routes) {
    /**
     * Here, we are connecting '/' (base path) to a controller called 'Pages',
     * its action called 'display', and we pass a param to select the view file
     * to use (in this case, src/Template/Pages/home.ctp)...
     */
  //  $routes->connect('/', ['controller' => 'Pages', 'action' => 'display', 'home']);

    /**
     * ...and connect the rest of 'Pages' controller's URLs.
     */
    $routes->connect('/pages/*', ['controller' => 'Pages', 'action' => 'display']);


 $routes->connect('/accommodation-hotel-search/*', ['controller' => 'Agents', 'action' => 'hotel_search']);
  //$routes->connect('/accommodation-hotel-result/*', ['controller' => 'Agents', 'action' => 'hotel_search_result']);
  $routes->connect('/accommodation-hotel-result/*', ['controller' => 'Agents', 'action' => 'hotel_search_result']);
 $routes->connect('/api_search_hotel/*', ['controller' => 'Agents', 'action' => 'api_search_hotel']);
  $routes->connect('/test2.php/*', ['controller' => 'Newhotel', 'action' => 'Test2']);

 $routes->connect('/jquerytypeahead/beer_v1.json/*', ['controller' => 'Agents', 'action' => 'testsearch']);
  $routes->connect('/agents-activities/*', ['controller' => 'Agents', 'action' => 'activities']);

  $routes->connect('/agents-tour/*', ['controller' => 'Agents', 'action' => 'tours']);
  $routes->connect('/agents-tour-book/*', ['controller' => 'Agents', 'action' => 'toursbooknow']);
  $routes->connect('/agents-tour-result/*', ['controller' => 'Agents', 'action' => 'toursresult']);

  $routes->connect('/agents-shore/*', ['controller' => 'Agents', 'action' => 'shore']);
  $routes->connect('/agents-shore-book/*', ['controller' => 'Agents', 'action' => 'shorebooknow']);
  $routes->connect('/agents-shore-result/*', ['controller' => 'Agents', 'action' => 'shoreresult']);

$routes->connect('/agents/*', ['controller' => 'Agents', 'action' => 'index']);
$routes->connect('/agents-transfer/*', ['controller' => 'Agents', 'action' => 'transfer']);
$routes->connect('/agents-ferries/*', ['controller' => 'Agents', 'action' => 'ferries']);
$routes->connect('/agents-cruise/*', ['controller' => 'Agents', 'action' => 'cruise']);
$routes->connect('/agents-profile/*', ['controller' => 'Users', 'action' => 'profile']);
$routes->connect('/agents-mybooking/*', ['controller' => 'Users', 'action' => 'mybooking']);
$routes->connect('/sign-up/*', ['controller' => 'Homes', 'action' => 'signup']);
$routes->connect('/agents-agencydetail/*', ['controller' => 'Users', 'action' => 'agencydetail']);
$routes->connect('/agents-manageusers/*', ['controller' => 'Users', 'action' => 'manageusers']);
$routes->connect('/agents-edit-password/*', ['controller' => 'Users', 'action' => 'editpassword']);
$routes->connect('/user-logout/*', ['controller' => 'Users', 'action' => 'logout']);
$routes->connect('/hotel-booking/*', ['controller' => 'Newhotel', 'action' => 'indexView']);
$routes->connect('/activitybooking/*', ['controller' => 'Newactivity', 'action' => 'activitybooking']);
$routes->connect('/bookingok/*', ['controller' => 'Newactivity', 'action' => 'bookingok']);
$routes->connect('/registration/*', ['controller' => 'Users', 'action' => 'registration']);
$routes->connect('/registration-thankyou/*', ['controller' => 'Users', 'action' => 'thankyou']);
$routes->connect('/agents-bookroom/*', ['controller' => 'Users', 'action' => 'bookroom']);

$routes->connect('/agents-bookroomok/*', ['controller' => 'Newhotel', 'action' => 'bookroomok']);
$routes->connect('/agents-bookroomok_confirm/*', ['controller' => 'Newhotel', 'action' => 'bookroomokConfirm']);

$routes->connect('/agents-thank/*', ['controller' => 'Newhotel', 'action' => 'thankbook']);

$routes->connect('/forgotpass/*', ['controller' => 'Users', 'action' => 'fotgotpass']);
$routes->connect('/forgotpass-check-inbox/*', ['controller' => 'Users', 'action' => 'fotgotpassinbox']);
$routes->connect('/forgotpass-check-inbox-ok/*', ['controller' => 'Users', 'action' => 'fotgotpassinboxok']);
$routes->connect('/resetpass/*', ['controller' => 'Users', 'action' => 'resetpass']);


  $routes->connect('/activitis-result/*', ['controller' => 'Newactivity', 'action' => 'activitisresult']);

    $routes->connect('/currency/*', ['controller' => 'Currency', 'action' => 'index1']);



//index

$routes->connect('/', ['controller' => 'Homes', 'action' => 'index', 'home']);
$routes->connect('/index.html', ['controller' => 'Homes', 'action' => 'index', 'home']);
$routes->connect('/home', ['controller' => 'Homes', 'action' => 'index', 'home']);
$routes->connect('/about-us.html', ['controller' => 'Homes', 'action' => 'about']);
$routes->connect('/contact-us.html', ['controller' => 'Homes', 'action' => 'contact']);
$routes->connect('/terms-conditions', ['controller' => 'Homes', 'action' => 'terms']);


//hotel admin
//  $routes->connect('/admin-hotel/*', ['controller' => 'Newhotel', 'action' => 'index']);
 $routes->connect('/login/*', ['controller' => 'Users', 'action' => 'login']);
  $routes->connect('/login-admin/*', ['controller' => 'Users', 'action' => 'loginadmin']);
  $routes->connect('/forgotpass-admin/*', ['controller' => 'Users', 'action' => 'forgotpassadmin']);
$routes->connect('/forgotpass-check-inbox-admin/*', ['controller' => 'Users', 'action' => 'forgotpassinboxadmin']);
$routes->connect('/forgotpass-check-inbox-ok-admin/*', ['controller' => 'Users', 'action' => 'forgotpassinboxokadmin']);
$routes->connect('/resetpass-admin/*', ['controller' => 'Users', 'action' => 'resetpassadmin']);
  $routes->connect('/admin-home/*', ['controller' => 'Newhotel', 'action' => 'adminhome']);
  $routes->connect('/admin-hotel/*', ['controller' => 'Newhotel', 'action' => 'index']);
  $routes->connect('/admin-room/*', ['controller' => 'Hotelphong', 'action' => 'index']);
  $routes->connect('/admin-services/*', ['controller' => 'Hoteltienich', 'action' => 'index']);
  $routes->connect('/admin-policy/*', ['controller' => 'Hotelchinhsach', 'action' => 'index']);
  $routes->connect('/admin-hotel-category/*', ['controller' => 'Hotelcategory', 'action' => 'index']);
  $routes->connect('/admin-hotel-address/*', ['controller' => 'Hoteldiachi', 'action' => 'index']);
   $routes->connect('/admin-user-review/*', ['controller' => 'Userreview', 'action' => 'index']);
   $routes->connect('/admin-contact/*', ['controller' => 'Contact', 'action' => 'index']);

  //newactivity admin
  $routes->connect('/admin-activity/*', ['controller' => 'Newactivity', 'action' => 'index']);
  $routes->connect('/admin-category-activity/*', ['controller' => 'Activitiecategory', 'action' => 'index']);
 $routes->connect('/admin-services-activity/*', ['controller' => 'Activitytienich', 'action' => 'index']);

  $routes->connect('/admin-tour/*', ['controller' => 'Newactivity', 'action' => 'indextour']);
   $routes->connect('/admin-shore/*', ['controller' => 'Newactivity', 'action' => 'indexshore']);

  //newactivity admin
  $routes->connect('/admin-transfers/*', ['controller' => 'Newtransfer', 'action' => 'index']);
  $routes->connect('/admin-category-transfers/*', ['controller' => 'Transferdrive', 'action' => 'index']);
 // $routes->connect('/admin-services-activity/*', ['controller' => 'Activitytienich', 'action' => 'index']);

 //newactivity admin
  $routes->connect('/admin-cruise/*', ['controller' => 'Newcruise', 'action' => 'index']);
  $routes->connect('/admin-port-cruise/*', ['controller' => 'Cruiseport', 'action' => 'index']);
  $routes->connect('/admin-category-cruise/*', ['controller' => 'Cruisedrive', 'action' => 'index']);


   //newactivity admin

  $routes->connect('/admin-agency-signup/*', ['controller' => 'Agencydetail', 'action' => 'index']);


  $routes->connect('/admin-custome/*', ['controller' => 'Users', 'action' => 'index']);


     //slide admin
  $routes->connect('/admin-slide/*', ['controller' => 'Slideagent', 'action' => 'index']);
  //$routes->connect('/admin-port-cruise/*', ['controller' => 'Cruiseport', 'action' => 'index']);
  // $routes->connect('/admin-room/*', ['controller' => 'Hotelphong', 'action' => 'index']);
  // $routes->connect('/admin-services/*', ['controller' => 'Hoteltienich', 'action' => 'index']);
  // $routes->connect('/admin-policy/*', ['controller' => 'Hotelchinhsach', 'action' => 'index']);
  // 
  // $routes->connect('/admin-hotel-address/*', ['controller' => 'Hoteldiachi', 'action' => 'index']);


    /**
     * Connect catchall routes for all controllers.
     *
     * Using the argument `DashedRoute`, the `fallbacks` method is a shortcut for
     *    `$routes->connect('/:controller', ['action' => 'index'], ['routeClass' => 'DashedRoute']);`
     *    `$routes->connect('/:controller/:action/*', [], ['routeClass' => 'DashedRoute']);`
     *
     * Any route class can be used with this method, such as:
     * - DashedRoute
     * - InflectedRoute
     * - Route
     * - Or your own route class
     *
     * You can remove these routes once you've connected the
     * routes you want in your application.
     */
    $routes->fallbacks(DashedRoute::class);
});

/**
 * Load all plugin routes.  See the Plugin documentation on
 * how to customize the loading of plugin routes.
 */
Plugin::routes();
