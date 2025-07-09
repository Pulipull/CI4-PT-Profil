<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Login Admin</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">
<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-5">
            <h3 class="mb-4 text-center">Login Admin</h3>

            <?php if (session()->getFlashdata('pesan')) : ?>
                <div class="alert alert-warning">
                    <?= session()->getFlashdata('pesan') ?>
                </div>
            <?php endif ?>

            <form method="post" action="/login/proses">
                <div class="mb-3">
                    <label>Username</label>
                    <input type="text" name="username" class="form-control" required>
                </div>
                <div class="mb-3">
                    <label>Password</label>
                    <input type="password" name="password" class="form-control" required>
                </div>
                <button class="btn btn-dark w-100">Login</button>
            </form>
        </div>
    </div>
</div>
</body>
</html>