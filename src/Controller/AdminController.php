<?php
namespace App\Controller;

use App\Controller\AppController;

class AdminController extends AppController
{
    public function initialize(): void
    {
        parent::initialize();
        $this->loadComponent('Flash');
        $this->loadModel('Users');
        $this->loadModel('Sessions');
        $this->loadModel('Trainers');
        $this->loadModel('Equipment');
        /*
        parent::initialize();
        // Allow only logged-in admins
        $this->loadComponent('Authentication.Authentication');

        // Check if the user is an admin (assuming you have a role column in the users table)
        if (!$this->Authentication->getResult()->getData()->role === 'admin') {
            return $this->redirect('/');
        }
        */
    }

    public function index()
    {
        // Dashboard or home page for the admin panel
    }

    public function dashboard()
    {
        // You can pass any necessary data to the view
        $this->set('title', 'Admin Dashboard');
        $this->set('users', $this->Users->find('all'));
        $this->set('sessions', $this->Sessions->find('all'));
        $this->set('trainers', $this->Trainers->find('all'));
        $this->set('equipment', $this->Equipment->find('all'));
    }

    public function users()
    {
        $users = $this->Users->find('all');
        $this->set(compact('users'));
    }

    public function sessions()
    {
        $sessions = $this->Sessions->find('all');
        $this->set(compact('sessions'));
    }

    public function trainers()
    {
        $trainers = $this->Trainers->find('all');
        $this->set(compact('trainers'));
    }

    public function equipment()
    {
        $equipment = $this->Equipment->find('all');
        $this->set(compact('equipment'));
    }

    public function addUser()
    {
        $user = $this->Users->newEmptyEntity();
        if ($this->request->is('post')) {
            $user = $this->Users->patchEntity($user, $this->request->getData());
            if ($this->Users->save($user)) {
                $this->Flash->success(__('The user has been saved.'));
                return $this->redirect(['action' => 'users']);
            }
            $this->Flash->error(__('Unable to add the user.'));
        }
        $this->set(compact('user'));
    }

    public function addSession()
    {
        $session = $this->Sessions->newEmptyEntity();
        if ($this->request->is('post')) {
            $session = $this->Sessions->patchEntity($session, $this->request->getData());
            if ($this->Sessions->save($session)) {
                $this->Flash->success(__('The session has been saved.'));
                return $this->redirect(['action' => 'sessions']);
            }
            $this->Flash->error(__('Unable to add the session.'));
        }
        $this->set(compact('session'));
    }

    public function addTrainer()
    {
        $trainer = $this->Trainers->newEmptyEntity();
        if ($this->request->is('post')) {
            $trainer = $this->Trainers->patchEntity($trainer, $this->request->getData());
            if ($this->Trainers->save($trainer)) {
                $this->Flash->success(__('The trainer has been saved.'));
                return $this->redirect(['action' => 'trainers']);
            }
            $this->Flash->error(__('Unable to add the trainer.'));
        }
        $this->set(compact('trainer'));
    }

    public function addEquipment()
    {
        $equipment = $this->Equipment->newEmptyEntity();
        if ($this->request->is('post')) {
            $equipment = $this->Equipment->patchEntity($equipment, $this->request->getData());
            if ($this->Equipment->save($equipment)) {
                $this->Flash->success(__('The equipment has been saved.'));
                return $this->redirect(['action' => 'equipment']);
            }
            $this->Flash->error(__('Unable to add the equipment.'));
        }
        $this->set(compact('equipment'));
    }

}
