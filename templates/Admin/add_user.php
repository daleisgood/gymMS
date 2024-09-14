<h1>Add User</h1>
<?= $this->Form->create($user) ?>
<fieldset>
    <legend><?= __('Add User') ?></legend>
    <?= $this->Form->control('username') ?>
    <?= $this->Form->control('email') ?>
    <?= $this->Form->control('password') ?>
</fieldset>
<?= $this->Form->button(__('Save User')) ?>
<?= $this->Form->end() ?>
