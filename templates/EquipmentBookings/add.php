<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\EquipmentBooking $equipmentBooking
 * @var \Cake\Collection\CollectionInterface|string[] $members
 * @var \Cake\Collection\CollectionInterface|string[] $equipment
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('List Equipment Bookings'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="equipmentBookings form content">
            <?= $this->Form->create($equipmentBooking) ?>
            <fieldset>
                <legend><?= __('Add Equipment Booking') ?></legend>
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
