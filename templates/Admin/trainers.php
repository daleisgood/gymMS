<h1>Trainers</h1>
<a href="<?= $this->Url->build(['action' => 'addTrainer']); ?>" class="btn btn-primary">Add Trainer</a>
<table class="table mt-4">
    <thead>
        <tr>
            <th>ID</th>
            <th>Trainer Name</th>
            <th>Specialization</th>
            <th>Actions</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($trainers as $trainer): ?>
        <tr>
            <td><?= h($trainer->id) ?></td>
            <td><?= h($trainer->name) ?></td>
            <td><?= h($trainer->specialization) ?></td>
            <td>
                <!-- Add Edit/Delete links here -->
            </td>
        </tr>
        <?php endforeach; ?>
    </tbody>
</table>
