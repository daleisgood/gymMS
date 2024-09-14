<?php
/**
 * @var \App\View\AppView $this
 * @var iterable<\App\Model\Entity\EquipmentBooking> $equipmentBookings
 */
?>
<div class="equipmentBookings index content">
    <?= $this->Html->link(__('New Equipment Booking'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Equipment Bookings') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('id') ?></th>
                    <th><?= $this->Paginator->sort('member_id') ?></th>
                    <th><?= $this->Paginator->sort('equipment_id') ?></th>
                    <th><?= $this->Paginator->sort('booking_date') ?></th>
                    <th><?= $this->Paginator->sort('created') ?></th>
                    <th><?= $this->Paginator->sort('modified') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($equipmentBookings as $equipmentBooking): ?>
                <tr>
                    <td><?= $this->Number->format($equipmentBooking->id) ?></td>
                    <td><?= $equipmentBooking->has('member') ? $this->Html->link($equipmentBooking->member->id, ['controller' => 'Members', 'action' => 'view', $equipmentBooking->member->id]) : '' ?></td>
                    <td><?= $equipmentBooking->has('equipment') ? $this->Html->link($equipmentBooking->equipment->name, ['controller' => 'Equipment', 'action' => 'view', $equipmentBooking->equipment->id]) : '' ?></td>
                    <td><?= h($equipmentBooking->booking_date) ?></td>
                    <td><?= h($equipmentBooking->created) ?></td>
                    <td><?= h($equipmentBooking->modified) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $equipmentBooking->id]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $equipmentBooking->id]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $equipmentBooking->id], ['confirm' => __('Are you sure you want to delete # {0}?', $equipmentBooking->id)]) ?>
                    </td>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
    <div class="paginator">
        <ul class="pagination">
            <?= $this->Paginator->first('<< ' . __('first')) ?>
            <?= $this->Paginator->prev('< ' . __('previous')) ?>
            <?= $this->Paginator->numbers() ?>
            <?= $this->Paginator->next(__('next') . ' >') ?>
            <?= $this->Paginator->last(__('last') . ' >>') ?>
        </ul>
        <p><?= $this->Paginator->counter(__('Page {{page}} of {{pages}}, showing {{current}} record(s) out of {{count}} total')) ?></p>
    </div>
</div>
