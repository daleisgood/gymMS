<?php
/**
 * @var \App\View\AppView $this
 * @var iterable<\App\Model\Entity\Booking> $bookings
 */
?>
<div class="bookings index content">
    <?= $this->Html->link(__('New Booking'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Bookings') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('id') ?></th>
                    <th><?= $this->Paginator->sort('member_id') ?></th>
                    <th><?= $this->Paginator->sort('session_id') ?></th>
                    <th><?= $this->Paginator->sort('booking_date') ?></th>
                    <th><?= $this->Paginator->sort('status') ?></th>
                    <th><?= $this->Paginator->sort('created') ?></th>
                    <th><?= $this->Paginator->sort('modified') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($bookings as $booking): ?>
                <tr>
                    <td><?= $this->Number->format($booking->id) ?></td>
                    <td><?= $booking->has('member') ? $this->Html->link($booking->member->id, ['controller' => 'Members', 'action' => 'view', $booking->member->id]) : '' ?></td>
                    <td><?= $this->Number->format($booking->session_id) ?></td>
                    <td><?= h($booking->booking_date) ?></td>
                    <td><?= h($booking->status) ?></td>
                    <td><?= h($booking->created) ?></td>
                    <td><?= h($booking->modified) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $booking->id]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $booking->id]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $booking->id], ['confirm' => __('Are you sure you want to delete # {0}?', $booking->id)]) ?>
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
