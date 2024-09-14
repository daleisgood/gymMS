<!-- Admin navigation element -->
<?= $this->element('flash/admin/sidebar') ?>

<div class="container mt-4">
    <h1 class="text-center mb-4"><?= h($title) ?></h1>
    <div class="row text-center">
        <div class="col-md-3 mb-4">
            <div class="card h-100 shadow-sm">
                <div class="card-body d-flex flex-column">
                    <h4 class="card-title">Manage Users</h4>
                    <p class="card-text flex-grow-1">View and edit user accounts</p>
                    <a href="/admin/users" class="btn btn-primary mt-auto">Go to Users</a>
                </div>
            </div>
        </div>
        <div class="col-md-3 mb-4">
            <div class="card h-100 shadow-sm">
                <div class="card-body d-flex flex-column">
                    <h4 class="card-title">Manage Sessions</h4>
                    <p class="card-text flex-grow-1">Schedule and organize gym sessions</p>
                    <a href="/admin/sessions" class="btn btn-primary mt-auto">Go to Sessions</a>
                </div>
            </div>
        </div>
        <div class="col-md-3 mb-4">
            <div class="card h-100 shadow-sm">
                <div class="card-body d-flex flex-column">
                    <h4 class="card-title">Manage Equipment</h4>
                    <p class="card-text flex-grow-1">Track and maintain gym equipment</p>
                    <a href="/admin/equipment" class="btn btn-primary mt-auto">Go to Equipment</a>
                </div>
            </div>
        </div>
        <div class="col-md-3 mb-4">
            <div class="card h-100 shadow-sm">
                <div class="card-body d-flex flex-column">
                    <h4 class="card-title">Manage Memberships</h4>
                    <p class="card-text flex-grow-1">Handle membership plans and subscriptions</p>
                    <a href="/admin/memberships" class="btn btn-primary mt-auto">Go to Memberships</a>
                </div>
            </div>
        </div>
    </div>
</div>
