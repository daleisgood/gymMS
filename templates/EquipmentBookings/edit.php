<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\EquipmentBooking $equipmentBooking
 * @var string[]|\Cake\Collection\CollectionInterface $members
 * @var string[]|\Cake\Collection\CollectionInterface $equipment
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $equipmentBooking->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $equipmentBooking->id), 'class' => 'side-nav-item']
            ) ?>
            <?= $this->Html->link(__('List Equipment Bookings'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="equipmentBookings form content">
            <?= $this->Form->create($equipmentBooking) ?>
            <fieldset>
                <legend><?= __('Edit Equipment Booking') ?></legend>
                <?php
                    echo $this->Form->control('member_id', ['options' => $members]);
                    echo $this->Form->control('equipment_id', ['options' => $equipment]);
                    echo $this->Form->control('booking_date');
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
