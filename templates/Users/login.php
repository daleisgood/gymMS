<?php
$this->layout = 'default';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <!-- Add Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body, html {
            height: 100%;
        }
    </style>
</head>
<body class="bg-light">
    <div class="container h-100">
        <div class="row h-100 justify-content-center align-items-center">
            <div class="col-md-4">
                <div class="card shadow">
                    <div class="card-body">
                        <h2 class="card-title text-center mb-4">Login</h2>
                        <?= $this->Flash->render() ?>
                        <?= $this->Form->create(null, ['class' => 'needs-validation', 'novalidate' => true]) ?>
                        <div class="mb-3">
                            <?= $this->Form->control('email', ['label' => 'Email', 'class' => 'form-control', 'placeholder' => 'Enter your email', 'required' => true]) ?>
                        </div>
                        <div class="mb-3">
                            <?= $this->Form->control('password', ['label' => 'Password', 'class' => 'form-control', 'type' => 'password', 'placeholder' => 'Enter your password', 'required' => true]) ?>
                        </div>
                        <?= $this->Form->submit('Login', ['class' => 'btn btn-primary w-100']) ?>
                        <?= $this->Form->end() ?>
                        <div class="text-center mt-3">
                            <p class="mb-0">Don't have an account? <a href="/users/register">Register here</a></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Add Bootstrap JS and Popper.js -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js"></script>
</body>
</html>