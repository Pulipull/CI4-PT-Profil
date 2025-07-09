<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $title ?></title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="/assets/css/main.css">
</head>
<body class="bg-light">

<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <div class="container">
    <a class="navbar-brand" href="/">PT 8Pull's</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav ms-auto">
        <li class="nav-item"><a href="/" class="nav-link">Beranda</a></li>
        <li class="nav-item"><a href="/layanan" class="nav-link">Layanan</a></li>
        <li class="nav-item"><a href="/kontak" class="nav-link">Kontak</a></li>

        <?php if (session()->get('logged_in')) : ?>
          <li class="nav-item"><a href="/logout" class="nav-link text-danger">Logout</a></li>
        <?php else : ?>
          <li class="nav-item"><a href="/login" class="nav-link">Login</a></li>
        <?php endif ?>
      </ul>
    </div>
  </div>
</nav>

<main>
<div class="container mt-4">
