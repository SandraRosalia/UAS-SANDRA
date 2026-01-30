<!DOCTYPE html>
<html>
<head>
<title>Register</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
<style>
body{min-height:100vh;background:linear-gradient(135deg,#1cc88a,#4e73df);display:flex;align-items:center;justify-content:center;}
.card{max-width:500px;width:100%;border-radius:15px;}
</style>
</head>
<body>

<div class="card p-4">
<h4 class="text-center mb-3">📝 Register</h4>

<?= validation_errors('<div class="alert alert-danger">','</div>'); ?>

<form method="post">
<input type="text" name="name" class="form-control mb-2" placeholder="Nama Lengkap" required>
<input type="text" name="username" class="form-control mb-2" placeholder="Username" required>
<input type="email" name="email" class="form-control mb-2" placeholder="Email" required>
<input type="password" name="password" class="form-control mb-2" placeholder="Password" required>
<input type="password" name="password_conf" class="form-control mb-3" placeholder="Konfirmasi Password" required>
<button class="btn btn-success w-100">Daftar</button>
</form>

<div class="text-center mt-3">
<small>Sudah punya akun? <a href="<?= site_url('login'); ?>">Login</a></small>
</div>
</div>

</body>
</html>
