<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
<style>
  #wrapper {
    display: flex;
    align-items: stretch;
}

#sidebar-wrapper {
    min-width: 250px;
    max-width: 250px;
}

#page-content-wrapper {
    width: 100%;
}

#menu-toggle {
    margin: 20px;
}

.list-group-item {
    background-color: #343a40;
    border: none;
}

.list-group-item-action:hover {
    background-color: #495057;
}

</style>

<div class="d-flex" id="wrapper">
    <!-- Sidebar -->
    <div class="bg-dark border-right" id="sidebar-wrapper">
        <div class="sidebar-heading text-white">Admin Panel</div>
        <div class="list-group list-group-flush">
            <a href="/admin/dashboard" class="list-group-item list-group-item-action bg-dark text-white">Dashboard</a>
            <a href="/admin/users" class="list-group-item list-group-item-action bg-dark text-white">Users</a>
            <a href="/admin/sessions" class="list-group-item list-group-item-action bg-dark text-white">Sessions</a>
            <a href="/admin/equipment" class="list-group-item list-group-item-action bg-dark text-white">Equipment</a>
            <a href="/admin/trainers" class="list-group-item list-group-item-action bg-dark text-white">Trainers</a>
            <a href="/admin/reports" class="list-group-item list-group-item-action bg-dark text-white">Reports</a>
            <a href="/logout" class="list-group-item list-group-item-action bg-dark text-white">Logout</a>
        </div>
    </div>
    
    <!-- Page Content -->
    <div id="page-content-wrapper">
        <nav class="navbar navbar-expand-lg navbar-light bg-light border-bottom">
            <button class="btn btn-primary" id="menu-toggle">Toggle Sidebar</button>
        </nav>

        <div class="container-fluid">
            <!-- Content goes here -->
            <?= $this->fetch('content'); ?>
        </div>
    </div>
</div>

<script>
  $("#menu-toggle").click(function (e) {
    e.preventDefault();
    $("#wrapper").toggleClass("toggled");
});

</script>



