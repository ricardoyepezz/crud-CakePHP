<?php
declare(strict_types=1);

namespace App\Controller;

/**
 * Users Controller
 *
 */
class UsersController extends AppController
{

    public function beforeFilter(\Cake\Event\EventInterface $event)
    {
        parent::beforeFilter($event);
        $this->Auth->allow(['add']);
    }

    public function isAuthorized($user)
    {
        if (isset($user['role']) && $user['role'] === 'user') 
        {
            if (in_array($this->request->getParam('action'), ['home', 'view', 'logout'])) 
            {
                return true;
            }
        }
        return parent::isAuthorized($user);
    }

    public function login ()
    {
        if($this->request->is('post'))
        {
            $user = $this->Auth->identify();
            if($user)
            {
                $this->Auth->setUser($user);
                return $this->redirect($this->Auth->redirectUrl());
            }
            else
            {
                $this->Flash->error('Datos son invalidos, por favor intente nuevamente', ['key' => 'auth']);
            }
        }

        if ($this->Auth->user())
        {
            return $this->redirect(['controller' => 'Users', 'action' => 'home']);
        }
    }

    public function home ()
    {
        $this->render();
    }

    public function logout()
    {
        return $this->redirect($this->Auth->logout());
    }

    public function index()
    {
        // recupero todos los usuarios
        // $users = $this->Users->find('all');
        // paginacion de usuarios
        $users = $this->paginate($this->Users);
        // envio los usuarios a la vista
        $this->set('users', $users);
       
    }

    public function view($id)
    {
        $user = $this->Users->get($id);
        $this->set('user', $user);
    }

    public function add()
    {
        $user = $this->Users->newEmptyEntity();
        if ($this->request->is('post')) {
            // debug($this->request->getData());
            $user = $this->Users->patchEntity($user, $this->request->getData());
            $user->role = 'user';
            $user->active= 1;
            if ($this->Users->save($user)) {
                $this->Flash->success(__('El usuario ha sido guardado exitosamente.'));

                return $this->redirect(['action' => 'login']);
            }
            $this->Flash->error(__('El usuario no pudo ser guardado, por favor intente de nuevo.'));
        }
        $this->set(compact('user'));
    }
}
