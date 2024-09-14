<?php
/**
 * @var \App\View\AppView $this
 * @var iterable<\App\Model\Entity\Session> $sessions
 */
?>
<div class="sessions index content">
    <?= $this->Html->link(__('New Session'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Sessions') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('id') ?></th>
                    <th><?= $this->Paginator->sort('name') ?></th>
                    <th><?= $this->Paginator->sort('trainer_id') ?></th>
                    <th><?= $this->Paginator->sort('schedule') ?></th>
                    <th><?= $this->Paginator->sort('capacity') ?></th>
                    <th><?= $this->Paginator->sort('created') ?></th>
                    <th><?= $this->Paginator->sort('modified') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($sessions as $session): ?>
                <tr>
                    <td><?= $this->Number->format($session->id) ?></td>
                    <td><?= h($session->name) ?></td>
                    <td><?= $session->has('trainer') ? $this->Html->link($session->trainer->id, ['controller' => 'Trainers', 'action' => 'view', $session->trainer->id]) : '' ?></td>
                    <td><?= h($session->schedule) ?></td>
                    <td><?= $this->Number->format($session->capacity) ?></td>
                    <td><?= h($session->created) ?></td>
                    <td><?= h($session->modified) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $session->id]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $session->id]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $session->id], ['confirm' => __('Are you sure you want to delete # {0}?', $session->id)]) ?>
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
