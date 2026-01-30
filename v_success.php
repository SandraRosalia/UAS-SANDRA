<!DOCTYPE html>
<html>
<head>
<title>Sukses</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
<style>
body{min-height:100vh;background:linear-gradient(135deg,#4e73df,#1cc88a);display:flex;align-items:center;justify-content:center;}
.card{max-width:400px;width:100%;border-radius:15px;}
</style>
</head>
<body>

<div class="card p-4 text-center">
<h3>✅ Berhasil</h3>
<p><?= $message; ?></p>
<a href="<?= site_url('login'); ?>" class="btn btn-primary">Login Sekarang</a>
</div>

</body>
</html>

