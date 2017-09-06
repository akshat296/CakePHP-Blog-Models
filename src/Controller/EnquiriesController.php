<?php
namespace App\Controller;
use Cake\Log\Log;
use App\Controller\AppController;
use Cake\Mailer\Email;
/**
 * Users Controller
 *
 * @property \App\Model\Table\UsersTable $Users
 *
 * @method \App\Model\Entity\User[] paginate($object = null, array $settings = [])
 */
class EnquiriesController extends AppController
{
    function index()
    {

    }
public function contactUs()
{

        if ($this->request->is('post')) {
            
             $data =  $this->request->getData();
         
            $email = new Email('default');
                 $email->from(['tandon.akshat@thinksys.com'])
                ->to('tandon.akshat@thinksys.com')
                ->subject($data['subject'])
                ->template('temp')
                ->send($data);
           
         //   $user = $this->Users->patchEntity($user, $this->request->getData());
            if ($data) {
                $this->Flash->success(__('Mail has been sent.'));

               // return $this->redirect(['action' => 'index']);
               
            }
            }
          
        }

}