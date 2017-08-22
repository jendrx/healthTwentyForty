<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * UsersStudies Controller
 *
 * @property \App\Model\Table\UsersStudiesTable $UsersStudies
 *
 * @method \App\Model\Entity\UsersStudy[] paginate($object = null, array $settings = [])
 */
class UsersStudiesController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Users', 'Studies']
        ];
        $usersStudies = $this->paginate($this->UsersStudies);

        $this->set(compact('usersStudies'));
        $this->set('_serialize', ['usersStudies']);
    }

    /**
     * View method
     *
     * @param string|null $id Users Study id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $usersStudy = $this->UsersStudies->get($id, [
            'contain' => ['Users', 'Studies']
        ]);

        $this->set('usersStudy', $usersStudy);
        $this->set('_serialize', ['usersStudy']);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $usersStudy = $this->UsersStudies->newEntity();
        if ($this->request->is('post')) {
            $usersStudy = $this->UsersStudies->patchEntity($usersStudy, $this->request->getData());
            if ($this->UsersStudies->save($usersStudy)) {
                $this->Flash->success(__('The users study has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The users study could not be saved. Please, try again.'));
        }
        $users = $this->UsersStudies->Users->find('list', ['limit' => 200]);
        $studies = $this->UsersStudies->Studies->find('list', ['limit' => 200]);
        $this->set(compact('usersStudy', 'users', 'studies'));
        $this->set('_serialize', ['usersStudy']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Users Study id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $usersStudy = $this->UsersStudies->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $usersStudy = $this->UsersStudies->patchEntity($usersStudy, $this->request->getData());
            if ($this->UsersStudies->save($usersStudy)) {
                $this->Flash->success(__('The users study has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The users study could not be saved. Please, try again.'));
        }
        $users = $this->UsersStudies->Users->find('list', ['limit' => 200]);
        $studies = $this->UsersStudies->Studies->find('list', ['limit' => 200]);
        $this->set(compact('usersStudy', 'users', 'studies'));
        $this->set('_serialize', ['usersStudy']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Users Study id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $usersStudy = $this->UsersStudies->get($id);
        if ($this->UsersStudies->delete($usersStudy)) {
            $this->Flash->success(__('The users study has been deleted.'));
        } else {
            $this->Flash->error(__('The users study could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
