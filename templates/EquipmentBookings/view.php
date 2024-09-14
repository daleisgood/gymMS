<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\EquipmentBooking $equipmentBooking
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Equipment Booking'), ['action' => 'edit', $equipmentBooking->id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Equipment Booking'), ['action' => 'delete', $equipmentBooking->id], ['confirm' => __('Are you sure you want to delete # {0}?', $equipmentBooking->id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Equipment Bookings'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Equipment Booking'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="equipmentBookings view content">
            <h3><?= h($equipmentBooking->id) ?></h3>
            <table>
                <tr>
                    <th><?= __('Member') ?></th>
                    <td><?= $equipmentBooking->has('member') ? $this->Html->link($equipmentBooking->member->id, ['controller' => 'Members', 'action' => 'view', $equipmentBooking->member->id]) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('Equipment') ?></th>
                    <td><?= $equipmentBooking->has('equipment') ? $this->Html->link($equipmentBooking->equipment->name, ['controller' => 'Equipment', 'action' => 'view', $equipmentBooking->equipment->id]) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= $this->Number->format($equipmentBooking->id) ?></td>
                </tr>
                <tr>
                    <th><?= __('Booking Date') ?></th>
                    <td><?= h($equipmentBooking->booking_date) ?></td>
                </tr>
                <tr>
                    <th><?= __('Created') ?></th>
                    <td><?= h($equipmentBooking->created) ?></td>
                </tr>
                <tr>
                    <th><?= __('Modified') ?></th>
                    <td><?= h($equipmentBooking->modified) ?></td>
                </tr>
            </table>
        </div>
    </div>
</div>
