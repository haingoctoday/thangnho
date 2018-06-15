<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Newcruise Controller
 *
 * @property \App\Model\Table\NewcruiseTable $Newcruise
 */
class NewcruiseController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Network\Response|null
     */
    public function index()
    {
       // $newcruise = $this->paginate($this->Newcruise);
        $newcruise = $this->Newcruise;
        if ($this->request->is('post')) {
          $var_search = $this->request->data['search'];
          $newcruise = $this->Newcruise->find()->where( 
            ['OR' => array(
                ['portto LIKE' =>'%'.$var_search.'%'],
                ['portend LIKE' =>'%'.$var_search.'%'],
               // ['pickupfrom LIKE' =>'%'.$var_search.'%'],
            )]
          );
        }
        $newcruise = $this->paginate($newcruise);
        $this->set(compact('newcruise'));
        $this->set('_serialize', ['newcruise']);
    }

    /**
     * View method
     *
     * @param string|null $id Newcruise id.
     * @return \Cake\Network\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $newcruise = $this->Newcruise->get($id, [
            'contain' => []
        ]);

        $this->set('newcruise', $newcruise);
        $this->set('_serialize', ['newcruise']);
    }

    /**
     * Add method
     *
     * @return \Cake\Network\Response|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {

         $this->loadModel("Cruiseport");
        $diachi = $this->Cruiseport->find("all");
        $diachi_view = array();
        foreach ($diachi as $key => $valuediachi) {
          $diachi_view[$valuediachi['portname']] =  $valuediachi['portname'];
      }
      $this->set('diachi_view', $diachi_view);


        $newcruise = $this->Newcruise->newEntity();
        if ($this->request->is('post')) {
            $newcruise = $this->Newcruise->patchEntity($newcruise, $this->request->data);
            if ($this->Newcruise->save($newcruise)) {
                $this->Flash->success(__('The {0} has been saved.', 'Newcruise'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The {0} could not be saved. Please, try again.', 'Newcruise'));
            }
        }
        $this->set(compact('newcruise'));
        $this->set('_serialize', ['newcruise']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Newcruise id.
     * @return \Cake\Network\Response|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $newcruise = $this->Newcruise->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $newcruise = $this->Newcruise->patchEntity($newcruise, $this->request->data);
            if ($this->Newcruise->save($newcruise)) {
                $this->Flash->success(__('The {0} has been saved.', 'Newcruise'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The {0} could not be saved. Please, try again.', 'Newcruise'));
            }
        }
        $this->set(compact('newcruise'));
        $this->set('_serialize', ['newcruise']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Newcruise id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $newcruise = $this->Newcruise->get($id);
        if ($this->Newcruise->delete($newcruise)) {
            $this->Flash->success(__('The {0} has been deleted.', 'Newcruise'));
        } else {
            $this->Flash->error(__('The {0} could not be deleted. Please, try again.', 'Newcruise'));
        }
        return $this->redirect(['action' => 'index']);
    }
    public function addtransfer($id = null)
    {

        $transferanddrive = $this->Newcruise->get($id, [
            'contain' => []
        ]);

        $this->loadModel("Cruisedrive");
        $transferdrive = $this->Cruisedrive->find("all");
        $transferdrive_view = array();
        foreach ($transferdrive as $key => $valuetransferdrive) {
          $transferdrive_view[$valuetransferdrive['id']] =  $valuetransferdrive['name'];
        }
     //   debug($transferanddrive['driver']);
        $datalist_drive = json_decode($transferanddrive['driver'],TRUE);
             $this->set('datalist_drive', $datalist_drive);
      //  if($transferanddrive['driver'])

      $this->set('transferdrive_view', $transferdrive_view);

         if ($this->request->is(['patch', 'post', 'put'])) {



                $diachi = $this->request->data['diachi'];
                $giatien = $this->request->data['price'];
                $array_data = array_combine($diachi,$giatien);
            
                $json_data_insert = json_encode($array_data);
                $transferanddrive = $this->Newcruise->patchEntity($transferanddrive, $this->request->data);

                $transferanddrive->driver = $json_data_insert;
            //$newtransfer = $this->Newtransfer->patchEntity($newtransfer, $this->request->data);
            if ($this->Newcruise->save($transferanddrive)) {
                $this->Flash->success(__('The {0} has been saved.', 'Cruise'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The {0} could not be saved. Please, try again.', 'Cruise'));
            }
        }

        $this->set(compact('transferanddrive'));
        $this->set('_serialize', ['transferanddrive']);
    }
    public function bookingprocess()
    {
        $this->viewBuilder()->layout('agentslayout');
        $session = $this->request->session();
         $data  = $this->request->data;


       // debug($data); 

           if ($this->request->is('post')) {

            switch ($data['loai']) {
                case 'cruise':
                    $data_ss = $session->read('cruise');
                    if($data_ss['search']['destination'] == 1){
                        $destination = 'HaLong Bay';
                    }else{
                        $destination = 'MeKong';
                    }
                   

                    $dataa = $this->Newcruise->find()->where(['id' => $data['idhotel']])->toArray();

                    $id_get_price = json_decode($data['idroom-a']);
                    $price  = json_decode($dataa['0']['driver'],TRUE);
                    $sum_price =  array_map(function($x) use ($price) { return $price[$x]; }, $id_get_price);

                    $this->set('sum_price',array_sum($sum_price));
                    $this->set('destination',$destination);
                    $this->set('data_post',$data_ss['search']);
                    $this->set('data_post_save',base64_encode(json_encode($data)));
                    $this->set('data_activity',$dataa);
                    $this->set('loai',$data['loai']);
                    break;
                case 'transfer':
                    $data_ss = $session->read('transfer');
                    $this->loadModel("Newtransfer");
                    $dataa = $this->Newtransfer->find()->where(['id' => $data['idhotel']])->toArray();

                    $id_get_price = json_decode($data['idroom-a']);
                    $price  = json_decode($dataa['0']['driver'],TRUE);
                    $sum_price =  array_map(function($x) use ($price) { return $price[$x]; }, $id_get_price);


                    $this->set('sum_price',array_sum($sum_price));
                    $this->set('destination',$dataa['0']['destination']);
                    $this->set('data_post',$data_ss['search']);
                    $this->set('data_post_save',base64_encode(json_encode($data)));
                    $this->set('data_activity',$dataa);
                    $this->set('loai',$data['loai']);
                    break;
                default:
                    # code...
                    break;
            }
            


        }
        $this->set(compact('newactivity'));
        $this->set('_serialize', ['newactivity']);
        $this->set('view_name', 'toursresult');
        $this->set('title', 'Agent Booking');
    }


}
