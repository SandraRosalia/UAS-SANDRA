<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Dashboard</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body{
            min-height:100vh;
            background:#f4f6f9;
        }
        .navbar{
            background: linear-gradient(135deg,#4e73df,#1cc88a);
        }
        .card-dashboard{
            border-radius:15px;
            box-shadow:0 10px 25px rgba(0,0,0,.08);
        }
        .icon{
            font-size:32px;
        }
    </style>
</head>
<body>

<!-- NAVBAR -->
<nav class="navbar navbar-expand-lg navbar-dark px-4">
    <span class="navbar-brand fw-bold">📊 Dashboard</span>
    <div class="ms-auto">
        <a href="<?= site_url('login/logout'); ?>" class="btn btn-outline-light btn-sm">
            Logout
        </a>
    </div>
</nav>

<!-- CONTENT -->
<div class="container mt-5">

    <div class="mb-4">
        <h3 class="fw-bold">Selamat Datang 👋</h3>
        <p class="text-muted">Login berhasil, silakan kelola aplikasi Anda.</p>
    </div>

    <div class="row g-4">
        <div class="col-md-4">
            <div class="card card-dashboard p-4">
