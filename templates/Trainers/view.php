<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Trainer $trainer
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Trainer'), ['action' => 'edit', $trainer->id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Trainer'), ['action' => 'delete', $trainer->id], ['confirm' => __('Are you sure you want to delete # {0}?', $trainer->id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Trainers'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Trainer'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="trainers view content">
            <h3><?= h($trainer->id) ?></h3>
            <table>
                <tr>
                    <th><?= __('User') ?></th>
                    <td><?= $trainer->has('user') ? $this->Html->link($trainer->user->role, ['controller' => 'Users', 'action' => 'view', $trainer->user->id]) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('Expertise') ?></th>
                    <td><?= h($trainer->expertise) ?></td>
                </tr>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= $this->Number->format($trainer->id) ?></td>
                </tr>
                <tr>
                    <th><?= __('Created') ?></th>
                    <td><?= h($trainer->created) ?></td>
                </tr>
                <tr>
                    <th><?= __('Modified') ?></th>
                    <td><?= h($trainer->modified) ?></td>
                </tr>
            </table>
            <div class="related">
                <h4><?= __('Related Classes') ?></h4>
                <?php if (!empty($trainer->classes)) : ?>
                <div class="table-responsive">
                    <table>
                        <tr>
                            <th><?= __('Id') ?></th>
                            <th><?= __('Name') ?></th>
                            <th><?= __('Description') ?></th>
                            <th><?= __('Trainer Id') ?></th>
                            <th><?= __('Schedule') ?></th>
                            <th><?= __('Capacity') ?></th>
                            <th><?= __('Created') ?></th>
                            <th><?= __('Modified') ?></th>
                            <th class="actions"><?= __('Actions') ?></th>
                        </tr>
                        <?php foreach ($trainer->classes as $classes) : ?>
                        <tr>
                            <td><?= h($classes->id) ?></td>
                            <td><?= h($classes->name) ?></td>
                            <td><?= h($classes->description) ?></td>
                            <td><?= h($classes->trainer_id) ?></td>
                            <td><?= h($classes->schedule) ?></td>
                            <td><?= h($classes->capacity) ?></td>
                            <td><?= h($classes->created) ?></td>
                            <td><?= h($classes->modified) ?></td>
                            <td class="actions">
                                <?= $this->Html->link(__('View'), ['controller' => 'Classes', 'action' => 'view', $classes->id]) ?>
                                <?= $this->Html->link(__('Edit'), ['controller' => 'Classes', 'action' => 'edit', $classes->id]) ?>
                                <?= $this->Form->postLink(__('Delete'), ['controller' => 'Classes', 'action' => 'delete', $classes->id], ['confirm' => __('Are you sure you want to delete # {0}?', $classes->id)]) ?>
                            </td>
                        </tr>
                        <?php endforeach; ?>
                    </table>
                </div>
                <?php endif; ?>
            </div>
        </div>
    </div>
</div>
