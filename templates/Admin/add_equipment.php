<h1>Add Equipment</h1>
<?= $this->Form->create($equipment) ?>
<fieldset>
    <legend><?= __('Add Equipment') ?></legend>
    <?= $this->Form->control('name') ?>
    <?= $this->Form->control('description') ?>
    <?= $this->Form->control('quantity') ?>
</fieldset>
<?= $this->Form->button(__('Save Equipment')) ?>
<?= $this->Form->end() ?>
