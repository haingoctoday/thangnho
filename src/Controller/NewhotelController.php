<?php
namespace App\Controller;

use App\Controller\AppController;
use Cake\ORM\Query;
use Cake\ORM\TableRegistry;
/**
 * Newhotel Controller
 *
 * @property \App\Model\Table\NewhotelTable $Newhotel
 */
class NewhotelController extends AppController
{

   public $paginate = [
    'limit' => 10,
        // 'order' => [
        //     'Articles.title' => 'asc'
        // ]
];

    /**
     * Index method
     *
     * @return \Cake\Network\Response|null
     */
    public function index()
    {
        $newhotel = $this->paginate($this->Newhotel);

        $this->set(compact('newhotel'));
        $this->set('_serialize', ['newhotel']);
    }

    /**
     * View method
     *
     * @param string|null $id Newhotel id.
     * @return \Cake\Network\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $newhotel = $this->Newhotel->get($id, [
            'contain' => []
        ]);

        $this->set('newhotel', $newhotel);
        $this->set('_serialize', ['newhotel']);
    }

    /**
     * Add method
     *
     * @return \Cake\Network\Response|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $this->loadModel("Hoteldiachi");
        $diachi = $this->Hoteldiachi->find("all");
        $diachi_view = array();
        foreach ($diachi as $key => $valuediachi) {
          $diachi_view[$valuediachi['diachi']] =  $valuediachi['diachi'];
      }
      $this->set('diachi_view', $diachi_view);

        $this->loadModel("Hotelcategory");
         $Hotelcategory = $this->Hotelcategory->find("all");
        $category_view = array();
        foreach ($Hotelcategory as $key => $valueHotelcategory) {
          $category_view[$valueHotelcategory['namecategory']] =  $valueHotelcategory['namecategory'];
      }
      $this->set('category_view', $category_view);


      $newhotel = $this->Newhotel->newEntity();
      if ($this->request->is('post')) {
            //upload image
        if (!empty($this->request->data)) {
            if (!empty($this->request->data['hinhanh']['name'])) {
            $file = $this->request->data['hinhanh']; //put the data into a var for easy use

            $ext = substr(strtolower(strrchr($file['name'], '.')), 1); //get the extension
            $arr_ext = array('jpg', 'jpeg', 'gif'); //set allowed extensions
            $setNewFileName = time() . "_" . rand(000000, 999999);

            //only process if the extension is valid
            if (in_array($ext, $arr_ext)) {
                //do the actual uploading of the file. First arg is the tmp name, second arg is 
                //where we are putting it
                move_uploaded_file($file['tmp_name'], WWW_ROOT . '/upload/hotel/' . $setNewFileName . '.' . $ext);

                //prepare the filename for database entry 
                $imageFileName = $setNewFileName . '.' . $ext;
            }
        }

        $newhotel = $this->Newhotel->patchEntity($newhotel, $this->request->data);

        if (!empty($this->request->data['hinhanh']['name'])) {
            $newhotel->hinhanh = $imageFileName;
        }


        if ($this->Newhotel->save($newhotel)) {
         $this->Flash->success('Your profile has been sucessfully updated.');
         return $this->redirect(['action' => 'index']);
     } else {
         $this->Flash->error('Records not be saved. Please, try again.');
     }
 }

}
$this->set(compact('newhotel'));
$this->set('_serialize', ['newhotel']);
}

    /**
     * Edit method
     *
     * @param string|null $id Newhotel id.
     * @return \Cake\Network\Response|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {


        $this->loadModel("Hoteldiachi");
        $diachi = $this->Hoteldiachi->find("all");
        $diachi_view = array();
        foreach ($diachi as $key => $valuediachi) {
          $diachi_view[$valuediachi['diachi']] =  $valuediachi['diachi'];
      }
      $this->set('diachi_view', $diachi_view);


      $newhotel = $this->Newhotel->get($id, [
        'contain' => []
    ]);
        // var_dump($newhotel->hinhanh);
      $image_old =  ($newhotel->hinhanh);
      if ($this->request->is(['patch', 'post', 'put'])) {
          if (!empty($this->request->data)) {
            if (!empty($this->request->data['hinhanh']['name'])) {
            $file = $this->request->data['hinhanh']; //put the data into a var for easy use

            $ext = substr(strtolower(strrchr($file['name'], '.')), 1); //get the extension
            $arr_ext = array('jpg', 'jpeg', 'gif'); //set allowed extensions
            $setNewFileName = time() . "_" . rand(000000, 999999);

            //only process if the extension is valid
            if (in_array($ext, $arr_ext)) {
                //do the actual uploading of the file. First arg is the tmp name, second arg is 
                //where we are putting it
                move_uploaded_file($file['tmp_name'], WWW_ROOT . '/upload/hotel/' . $setNewFileName . '.' . $ext);

                //prepare the filename for database entry 
                $imageFileName = $setNewFileName . '.' . $ext;
            }
        }

        $newhotel = $this->Newhotel->patchEntity($newhotel, $this->request->data);

        if (!empty($this->request->data['hinhanh']['name'])) {
            $newhotel->hinhanh = $imageFileName;
        }else{
           $newhotel->hinhanh = $image_old;
       }
       if ($this->Newhotel->save($newhotel)) {
         $this->Flash->success('Your profile has been sucessfully updated.');
         return $this->redirect(['action' => 'index']);
     } else {
         $this->Flash->error('Records not be saved. Please, try again.');
     }
 }
}
$this->set(compact('newhotel'));
$this->set('_serialize', ['newhotel']);
}

    /**
     * Delete method
     *
     * @param string|null $id Newhotel id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $newhotel = $this->Newhotel->get($id);
        if ($this->Newhotel->delete($newhotel)) {
            $this->Flash->success(__('The {0} has been deleted.', 'Newhotel'));
        } else {
            $this->Flash->error(__('The {0} could not be deleted. Please, try again.', 'Newhotel'));
        }
        return $this->redirect(['action' => 'index']);
    }

    public function addservices($id = null)
    {
       $this->loadModel("Hoteltienich");
       $this->loadModel("Hotelandtienich");
       $hoteltienich = $this->Newhotel->get($id, [
        'contain' => []
        ]);
                //list all tien ich
           $listtienich =  $this->Hoteltienich->find("all");
           $tienich_view = array();
           foreach ($listtienich as $key => $valuelisttienich) {
              $tienich_view[$valuelisttienich['id']] =  $valuelisttienich['nametienich'];
          }
          $this->set('tienich_view', $tienich_view);
              //list all tien ich old
          $tienich_view_old =  $this->Hotelandtienich->find()->where(['id_hotel'=>$id])->toArray();;
          $this->set('tienich_view_old', isset($tienich_view_old[0]['list_tienich'])? explode(",",$tienich_view_old[0]['list_tienich']) : array());
          if ($this->request->is(['patch', 'post', 'put'])) {
            $ntienich_id = $this->Hotelandtienich->find()->where(['id_hotel' => $id])->toArray();

           // print_r($ntienich_id[0]['id']);
            $ntienich = $this->Hotelandtienich->get($ntienich_id[0]['id'], [
                'contain' => []
            ]);
          //  die();
            $data_tienich =  implode(",", $this->request->data['serviceslist']);
            $ntienich->id_hotel = $id;
            $ntienich->list_tienich = $data_tienich;
            
            if ($this->Hotelandtienich->save($ntienich)) {
                $this->Flash->success(__('The {0} has been saved.', 'Services Hotel'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The {0} could not be saved. Please, try again.', 'Services Hotel'));
            }
        }
        $this->set(compact('hoteltienich'));
        $this->set('_serialize', ['hoteltienich']);
    }

    public function addroom($id = null)
    {
           $this->loadModel("Hotelphong");
           $this->loadModel("Hotelandphong");
           $hotelroom = $this->Newhotel->get($id, [
            'contain' => []
            ]);
                //list all tien ich
           $listroom_all =  $this->Hotelphong->find()->all();;
           $listroom = array();
           foreach ($listroom_all as $key => $valuelistroom) {
              $listroom[$valuelistroom['id']] =  $valuelistroom['nameroom'];
          }
          $this->set('listroom', $listroom);
          if ($this->request->is(['patch', 'post', 'put'])) {
            $data_date = $this->request->data['date_insert'];

            $date_to_end = explode("-", $data_date);
             $dates = $this->getDatesFromRange(trim($date_to_end[0]), trim($date_to_end[1]));
             $data = array();
            foreach ($dates as $key => $value_dates) {
                $data[] = array(
                    'ngaykhoitao'=>$value_dates,
                    'id_hotel'=>$id,
                    'songuoi'=>$this->request->data['numberper'],
                    'giatien'=>$this->request->data['priceroom'],
                    'uptotop'=>$this->request->data['uptohot'],
                    'loaiphong'=>$this->request->data['listroomid'],
                );

            }
            $peopleTable = TableRegistry::get('Hotelandphong');
            $entities = $peopleTable->newEntities($data);
            $peopleTable->addBehavior('Timestamp');
            if ($peopleTable->saveMany($entities)) {
                $this->Flash->success(__('The {0} has been saved.', 'Services Hotel'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The {0} could not be saved. Please, try again.', 'Services Hotel'));
            }
        }

       $articles  = TableRegistry::get('Hotelandphong');
       $query = $articles->find();
       $query->select([
            'giatien' => 'Hotelandphong.giatien',
            'count' => $query->func()->count('Hotelandphong.id'),
            'nameroom' => 'hp.nameroom',
            'namehotel' => 'nh.namehotel',
            'songuoi'=>'Hotelandphong.songuoi',
        ])
        ->hydrate(false)
        ->join([
            'hp' => [
                'table' => 'hotelphong',
                'type' => 'LEFT',
                'conditions' => 'hp.id = Hotelandphong.loaiphong',
            ],
            'nh' => [
                'table' => 'newhotel',
                'type' => 'LEFT',
                'conditions' => 'nh.id = Hotelandphong.id_hotel',
            ]
        ])
        ->where(['Hotelandphong.id_hotel' => $id])
        ->group('Hotelandphong.loaiphong')

        ;

        // foreach ($query as $row) {
        //     debug($row['nameroom']);
        // }
        $this->set('list_room_of_hotel',$query);
        $this->set(compact('hotelroom'));
        $this->set('_serialize', ['hotelroom']);
        print_r("</pre>");

    }

}
