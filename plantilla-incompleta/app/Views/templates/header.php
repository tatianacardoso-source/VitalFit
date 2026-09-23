<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= esc($titulo ?? 'Inicio') ?></title>
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="<?= base_url('assets/css/custom.css') ?>">
</head>
<body class="bg-light d-flex flex-column min-vh-100">

<nav class="navbar navbar-dark bg-dark mb-4">
    <div class="container-fluid px-4 d-flex justify-content-between align-items-center">
        <a class="navbar-brand mb-0 h1" href="<?= site_url('/') ?>">Mi tienda</a>
        
        <div class="d-flex align-items-center text-white">
            <?php if (session()->get('isLoggedIn')): ?>
                <span class="me-3 small">Bienvenido <?= esc(strtok(session()->get('name') ?? '', ' ')) ?>!!!</span>
                <a href="<?= site_url('logout') ?>" class="btn btn-outline-danger btn-sm">Cerrar Sesión</a>
            <?php else: ?>
                <a href="<?= site_url('login') ?>" class="btn btn-outline-light btn-sm me-2">Ingresar</a>
                <a href="<?= site_url('register') ?>" class="btn btn-primary btn-sm">Registrarse</a>
            <?php endif; ?>
        </div>
    </div>
</nav>

<div class="container flex-grow-1">
