<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Attendance $attendance
 * @var string[]|\Cake\Collection\CollectionInterface $members
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $attendance->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $attendance->id), 'class' => 'side-nav-item']
            ) ?>
            <?= $this->Html->link(__('List Attendance'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="attendance form content">
            <?= $this->Form->create($attendance) ?>
            <fieldset>
                <legend><?= __('Edit Attendance') ?></legend>
                <?php
                    echo $this->Form->control('member_id', ['options' => $members]);
                    echo $this->Form->control('check_in');
                    echo $this->Form->control('check_out', ['empty' => true]);
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
