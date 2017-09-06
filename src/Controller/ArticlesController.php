<?php
namespace App\Controller;
use Cake\Log\Log;
use App\Controller\AppController;

/**
 * Users Controller
 *
 * @property \App\Model\Table\UsersTable $Users
 *
 * @method \App\Model\Entity\User[] paginate($object = null, array $settings = [])
 */
class ArticlesController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
     public $paginate = ['maxLimit'=>3];
    public function index()
    {
        $articles = $this->Articles->find()->contain(['Categories']);
        // Log::write('debug',"cojf");
        if ($this->request->is('post')) {
            
             $data =  $this->request->data('search');
             $articles = $this->Articles->find()->contain(['Categories'])->where(["Articles.name LIKE"=>"%$data%"]);
             //$name=$data['search'];
             //debug($name);
             
            //$value = $this->Articles->search($data['Search']);
            
            //debug($value);
            //$value = ($value->toArray());
          
             //  $user = $this->Users->patchEntity($user, $this->request->getData());
          
               // $this->Flash->success(__('Search Done.'));
              //  Log::write('debug','Something');
             //$this->redirect(["action"=>"search"],$value);
            }
          //  $this->Flash->error(__('No Search Found.'));
        


        $this->set ('articles',$this->paginate($articles));
       // $this->set('_serialize', ['articles']);
    }
    public function search($articles)
    {       
        $articles = $articles; 
        $this->set(compact('articles'));
        $this->set('_serialize', ['articles']);
        
    }

    /**
     * View method
     *
     * @param string|null $id User id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
  
        $article = $this->Articles->get($id, [
            'contain' => []
        ]);

        $this->set('article', $article);
        $this->set('_serialize', ['article']);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
       // $this->set('article','Akshat');
 //   $categories =  $this->Articles->showCategory();
      $categories = $this->Articles->Categories->find('list',array('fields'=>array('Categories.name','Categories.id')));
    
     // $categories= $this->Articles->showCategory();
        //$user = $this->Users->newEntity();
        if ($this->request->is('post')) {
            
             $data =  $this->request->getData();
            
           
           
         //   $user = $this->Users->patchEntity($user, $this->request->getData());
            if ($this->Articles->addArticles($data)) {
                $this->Flash->success(__('The user has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The user could not be saved. Please, try again.'));
        }

         
            
         $this->set(compact('categories',$categories));
          $this->set('_serialize', ['categories']);
          
        //$this->set('_serialize', ['article']);
    }

    /**
     * Edit method
     *
     * @param string|null $id User id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $article = $this->Articles->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $article = $this->Articles->patchEntity($article, $this->request->getData());
            if ($this->Articles->save($article)) {
                $this->Flash->success(__('The user has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The user could not be saved. Please, try again.'));
        }
        $this->set(compact('article'));
        $this->set('_serialize', ['article']);
    
    }

    /**
     * Delete method
     *
     * @param string|null $id User id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $article = $this->Articles->get($id);
        if ($this->Articles->delete($article)) 
        {
            $this->Flash->success(__('The user has been deleted.'));
        } 
        else
         {
            $this->Flash->error(__('The user could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
