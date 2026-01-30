<!DOCTYPE html>
<html lang="id">
<head>
<meta charset="UTF-8">
<title>Login</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
<style>
body{min-height:100vh;background:linear-gradient(135deg,#4e73df,#1cc88a);display:flex;align-items:center;justify-content:center;}
.card{max-width:400px;width:100%;border-radius:15px;box-shadow:0 10px 30px rgba(0,0,0,.2);}
</style>
</head>
<body>

<div class="card p-4">
<h4 class="text-center mb-4">🔐 Login</h4>

<?php if($this->session->flashdata('error')): ?>
<div class="alert alert-danger"><?= $this->session->flashdata('error'); ?></div>
<?php endif; ?>

<form method="post" action="<?= site_url('login'); ?>">
<input type="text" name="username" class="form-control mb-3" placeholder="Username" required>
<input type="password" name="password" class="form-control mb-3" placeholder="Password" required>
<button class="btn btn-primary w-100">Login</button>
</form>

<div class="text-center mt-3">
<small>Belum punya akun? <a href="<?= site_url('register'); ?>">Daftar</a></small>
</div>
</div>

</body>
</html>

