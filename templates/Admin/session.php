<h1>Sessions</h1>
<a href="<?= $this->Url->build(['action' => 'addSession']); ?>" class="btn btn-primary">Add Session</a>
<table class="table mt-4">
    <thead>
        <tr>
            <th>ID</th>
            <th>Session Name</th>
            <th>Duration</th>
            <th>Actions</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($sessions as $session): ?>
        <tr>
            <td><?= h($session->id) ?></td>
            <td><?= h($session->name) ?></td>
            <td><?= h($session->duration) ?></td>
            <td>
                <!-- Add Edit/Delete links here -->
            </td>
        </tr>
        <?php endforeach; ?>
    </tbody>
</table>
