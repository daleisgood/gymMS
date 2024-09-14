<?php
/**
 * @var \App\View\AppView $this
 * @var iterable<\App\Model\Entity\Trainer> $trainers
 */
?>
<div class="trainers index content">
    <?= $this->Html->link(__('New Trainer'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Trainers') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('id') ?></th>
                    <th><?= $this->Paginator->sort('user_id') ?></th>
                    <th><?= $this->Paginator->sort('expertise') ?></th>
                    <th><?= $this->Paginator->sort('created') ?></th>
                    <th><?= $this->Paginator->sort('modified') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($trainers as $trainer): ?>
                <tr>
                    <td><?= $this->Number->format($trainer->id) ?></td>
                    <td><?= $trainer->has('user') ? $this->Html->link($trainer->user->role, ['controller' => 'Users', 'action' => 'view', $trainer->user->id]) : '' ?></td>
                    <td><?= h($trainer->expertise) ?></td>
                    <td><?= h($trainer->created) ?></td>
                    <td><?= h($trainer->modified) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $trainer->id]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $trainer->id]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $trainer->id], ['confirm' => __('Are you sure you want to delete # {0}?', $trainer->id)]) ?>
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
