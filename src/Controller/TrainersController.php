<?php
declare(strict_types=1);

namespace App\Controller;

/**
 * Trainers Controller
 *
 * @property \App\Model\Table\TrainersTable $Trainers
 * @method \App\Model\Entity\Trainer[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class TrainersController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Users'],
        ];
        $trainers = $this->paginate($this->Trainers);

        $this->set(compact('trainers'));
    }

    /**
     * View method
     *
     * @param string|null $id Trainer id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $trainer = $this->Trainers->get($id, [
            'contain' => ['Users', 'Classes'],
        ]);

        $this->set(compact('trainer'));
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $trainer = $this->Trainers->newEmptyEntity();
        if ($this->request->is('post')) {
            $trainer = $this->Trainers->patchEntity($trainer, $this->request->getData());
            if ($this->Trainers->save($trainer)) {
                $this->Flash->success(__('The trainer has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The trainer could not be saved. Please, try again.'));
        }
        $users = $this->Trainers->Users->find('list', ['limit' => 200])->all();
        $this->set(compact('trainer', 'users'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Trainer id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $trainer = $this->Trainers->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $trainer = $this->Trainers->patchEntity($trainer, $this->request->getData());
            if ($this->Trainers->save($trainer)) {
                $this->Flash->success(__('The trainer has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The trainer could not be saved. Please, try again.'));
        }
        $users = $this->Trainers->Users->find('list', ['limit' => 200])->all();
        $this->set(compact('trainer', 'users'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Trainer id.
     * @return \Cake\Http\Response|null|void Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $trainer = $this->Trainers->get($id);
        if ($this->Trainers->delete($trainer)) {
            $this->Flash->success(__('The trainer has been deleted.'));
        } else {
            $this->Flash->error(__('The trainer could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
