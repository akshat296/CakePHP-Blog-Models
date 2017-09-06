<?php
namespace App\Controller;

use App\Controller\AppController;
use Cake\Event\Event;

class UsersController extends AppController
{

    public function beforeFilter(Event $event)
    {
        parent::beforeFilter($event);
         $this->Auth->allow(['add', 'logout']);
    }

     public function index()
     {
        $this->set('users', $this->Users->find('all'));
    }
  public function login()
    {
        if ($this->request->is('post')) {
            $user = $this->Auth->identify();
          //  var_dump( $this->Users->get($this->Auth->user('username')));
            var_dump($this->Auth->identify());
            if ($user) {
                $this->Auth->setUser($user);
                return $this->redirect(['controller' => 'Articles', 'action' => 'index']);

            }
            $this->Flash->error(__('Invalid username or password, try again'));
        }
    }
        public function logout()
    {
        return $this->redirect($this->Auth->logout());
    }
    public function view($id)
    {
        $user = $this->Users->get($id);
        $this->set(compact('user'));
    }
public function welcome(){}
    public function add()
    {
        $user = $this->Users->newEntity();
        if ($this->request->is('post')) {
            $user = $this->Users->patchEntity($user, $this->request->getData());
             $user->id = $this->Auth->user('id');
            if ($this->Users->save($user)) {
                $this->Flash->success(__('The user has been saved.'));
                return $this->redirect(['action' => 'add']);
            }
            $this->Flash->error(__('Unable to add the user.'));
        }
        $this->set('user', $user);
    }
   
}
?>