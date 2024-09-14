<?php
declare(strict_types=1);

namespace App\Controller;

/**
 * EquipmentBookings Controller
 *
 * @property \App\Model\Table\EquipmentBookingsTable $EquipmentBookings
 * @method \App\Model\Entity\EquipmentBooking[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class EquipmentBookingsController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */

    public function initialize(): void
    {
        parent::initialize();

        // Load the EquipmentBookings model
        $this->loadModel('EquipmentBookings');  // Ensure that this is present
    }

    public function index()
    {
        $this->paginate = [
            'contain' => ['Members', 'Equipment'],
        ];
        $equipmentBookings = $this->paginate($this->EquipmentBookings);

        $this->set(compact('equipmentBookings'));
    }

    /**
     * View method
     *
     * @param string|null $id Equipment Booking id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $equipmentBooking = $this->EquipmentBookings->get($id, [
            'contain' => ['Members', 'Equipment'],
        ]);

        $this->set(compact('equipmentBooking'));
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $equipmentBooking = $this->EquipmentBookings->newEmptyEntity();
        if ($this->request->is('post')) {
            $equipmentBooking = $this->EquipmentBookings->patchEntity($equipmentBooking, $this->request->getData());
            if ($this->EquipmentBookings->save($equipmentBooking)) {
                $this->Flash->success(__('The equipment booking has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The equipment booking could not be saved. Please, try again.'));
        }
        $members = $this->EquipmentBookings->Members->find('list', ['limit' => 200])->all();
        $equipment = $this->EquipmentBookings->Equipment->find('list', ['limit' => 200])->all();
        $this->set(compact('equipmentBooking', 'members', 'equipment'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Equipment Booking id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $equipmentBooking = $this->EquipmentBookings->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $equipmentBooking = $this->EquipmentBookings->patchEntity($equipmentBooking, $this->request->getData());
            if ($this->EquipmentBookings->save($equipmentBooking)) {
                $this->Flash->success(__('The equipment booking has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The equipment booking could not be saved. Please, try again.'));
        }
        $members = $this->EquipmentBookings->Members->find('list', ['limit' => 200])->all();
        $equipment = $this->EquipmentBookings->Equipment->find('list', ['limit' => 200])->all();
        $this->set(compact('equipmentBooking', 'members', 'equipment'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Equipment Booking id.
     * @return \Cake\Http\Response|null|void Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $equipmentBooking = $this->EquipmentBookings->get($id);
        if ($this->EquipmentBookings->delete($equipmentBooking)) {
            $this->Flash->success(__('The equipment booking has been deleted.'));
        } else {
            $this->Flash->error(__('The equipment booking could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
