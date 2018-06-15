<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Groupuser Controller
 *
 * @property \App\Model\Table\GroupuserTable $Groupuser
 */
class GroupuserController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Network\Response|null
     */
    public function index()
    {
        $groupuser = $this->paginate($this->Groupuser);

        $this->set(compact('groupuser'));
        $this->set('_serialize', ['groupuser']);
    }

    /**
     * View method
     *
     * @param string|null $id Groupuser id.
     * @return \Cake\Network\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $groupuser = $this->Groupuser->get($id, [
            'contain' => []
        ]);

        $this->set('groupuser', $groupuser);
        $this->set('_serialize', ['groupuser']);
    }

    /**
     * Add method
     *
     * @return \Cake\Network\Response|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $groupuser = $this->Groupuser->newEntity();
        if ($this->request->is('post')) {
            $groupuser = $this->Groupuser->patchEntity($groupuser, $this->request->data);
            if ($this->Groupuser->save($groupuser)) {
                $this->Flash->success(__('The {0} has been saved.', 'Groupuser'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The {0} could not be saved. Please, try again.', 'Groupuser'));
            }
        }
        $this->set(compact('groupuser'));
        $this->set('_serialize', ['groupuser']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Groupuser id.
     * @return \Cake\Network\Response|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $groupuser = $this->Groupuser->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $groupuser = $this->Groupuser->patchEntity($groupuser, $this->request->data);
            if ($this->Groupuser->save($groupuser)) {
                $this->Flash->success(__('The {0} has been saved.', 'Groupuser'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The {0} could not be saved. Please, try again.', 'Groupuser'));
            }
        }
        $this->set(compact('groupuser'));
        $this->set('_serialize', ['groupuser']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Groupuser id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $groupuser = $this->Groupuser->get($id);
        if ($this->Groupuser->delete($groupuser)) {
            $this->Flash->success(__('The {0} has been deleted.', 'Groupuser'));
        } else {
            $this->Flash->error(__('The {0} could not be deleted. Please, try again.', 'Groupuser'));
        }
        return $this->redirect(['action' => 'index']);
    }

    public function addUser($id)
    {
        $groupuser = $this->Groupuser->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {

         
            if(isset($this->request->data['userGroup'])){
                $this->request->data['userGroup'] = json_encode($this->request->data['userGroup']);
            }
            


            $groupuser = $this->Groupuser->patchEntity($groupuser, $this->request->data);
            if ($this->Groupuser->save($groupuser)) {
                $this->Flash->success(__('The {0} has been saved.', 'Groupuser'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The {0} could not be saved. Please, try again.', 'Groupuser'));
            }
        }
       $this->loadModel("Usersm");
       $data_user = $this->Usersm->find('all')->toArray();
     //  debug($data_user);
       $user_view = array();
       foreach ($data_user as $key => $value_user) {
                $user_view[$value_user['id']] =  $value_user['email'];
       }
        $this->set('user_view', $user_view);



        $this->set(compact('groupuser'));
        $this->set('_serialize', ['groupuser']);
    }

}
