<h1>Users</h1>
<a href="<?= $this->Url->build(['action' => 'addUser']); ?>" class="btn btn-primary">Add User</a>
<table class="table mt-4">
    <thead>
        <tr>
            <th>ID</th>
            <th>Username</th>
            <th>Email</th>
            <th>Actions</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($users as $user): ?>
        <tr>
            <td><?= h($user->id) ?></td>
            <td><?= h($user->username) ?></td>
            <td><?= h($user->email) ?></td>
            <td>
                <!-- Add Edit/Delete links here -->
            </td>
        </tr>
        <?php endforeach; ?>
    </tbody>
</table>
