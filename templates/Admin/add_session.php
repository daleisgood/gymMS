<h1>Add Session</h1>
<?= $this->Form->create($session) ?>
<fieldset>
    <legend><?= __('Add Session') ?></legend>
    <?= $this->Form->control('name') ?>
    <?= $this->Form->control('date', ['type' => 'date']) ?>
    <?= $this->Form->control('time', ['type' => 'time']) ?>
    <?= $this->Form->control('capacity', ['type' => 'number']) ?>
</fieldset>
<?= $this->Form->button(__('Save Session')) ?>
<?= $this->Form->end() ?>
