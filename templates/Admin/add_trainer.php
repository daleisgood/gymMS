<h1>Add Trainer</h1>
<?= $this->Form->create($trainer) ?>
<fieldset>
    <legend><?= __('Add Trainer') ?></legend>
    <?= $this->Form->control('username') ?>
    <?= $this->Form->control('email') ?>
    <?= $this->Form->control('password') ?>
    <?= $this->Form->control('specialization') ?>
    <?= $this->Form->control('experience_years', ['type' => 'number']) ?>
</fieldset>
<?= $this->Form->button(__('Save Trainer')) ?>
<?= $this->Form->end() ?>
