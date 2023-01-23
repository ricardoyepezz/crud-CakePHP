<?php
declare(strict_types=1);

namespace App\Controller;

/**
 * Users Controller
 *
 */
class UsersController extends AppController
{
    public function index()
    {
        // recupero todos los usuarios
        // $users = $this->Users->find('all');
        // paginacion de usuarios
        $users = $this->paginate($this->Users);
        // envio los usuarios a la vista
        $this->set('users', $users);
       
    }

    public function add()
    {
        $user = $this->Users->newEmptyEntity();
        if ($this->request->is('post')) {
            // debug($this->request->getData());
            $user = $this->Users->patchEntity($user, $this->request->getData());
            if ($this->Users->save($user)) {
                $this->Flash->success(__('El usuario ha sido guardado exotosamente.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('El usuario no pudo ser guardado, por favor intente de nuevo.'));
        }
        $this->set(compact('user'));
    }
}
