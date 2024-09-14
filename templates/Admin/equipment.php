<h1>Equipment</h1>
<a href="<?= $this->Url->build(['action' => 'addEquipment']); ?>" class="btn btn-primary">Add Equipment</a>
<table class="table mt-4">
    <thead>
        <tr>
            <th>ID</th>
            <th>Equipment Name</th>
            <th>Quantity</th>
            <th>Actions</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($equipment as $equip): ?>
        <tr>
            <td><?= h($equip->id) ?></td>
            <td><?= h($equip->name) ?></td>
            <td><?= h($equip->quantity) ?></td>
            <td>
                <!-- Add Edit/Delete links here -->
            </td>
        </tr>
        <?php endforeach; ?>
    </tbody>
</table>
