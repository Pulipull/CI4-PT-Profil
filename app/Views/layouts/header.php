<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= esc($title) ?></title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" rel="stylesheet">
    <link rel="stylesheet" href="/assets/css/main.css">
</head>
<body>
<nav id="mainNavbar" class="navbar navbar-expand-lg fixed-top navbar-light navbar-transparent py-3">
  <div class="container">
   <a class="navbar-brand fw-bold d-flex align-items-center" href="#">
  <img src="<?= base_url('assets/img/logo.png') ?>" alt="Logo" class="logo-crop me-2"> 
  <span class="logo-text">8Pull</span>
  </a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav ms-auto align-items-center">
        <li class="nav-item">
          <a class="nav-link px-3 text-nav" href="#beranda">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link px-3 text-nav" href="#tentang">Tentang Kami</a>
        </li>
        <li class="nav-item">
          <a class="nav-link px-3 text-nav" href="#layanan">Layanan</a>
        </li>
        <li class="nav-item">
          <a class="nav-link px-3 text-nav" href="#">Kontak</a>
        </li>
        <li class="nav-item">
          <a class="nav-link px-3 text-nav" href="#">Contact Us</a>
        </li>
        <li class="nav-item ms-2">
         <a href="/login" class="btn btn-nav rounded-pill px-4">Sign in</a>
        </li>
      </ul>
    </div>
  </div>
</nav>


<main>
  <?= $this->renderSection('content') ?>
</main>

<?= $this->include('layouts/footer') ?>

<script src="https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.js"></script>
<script>
  AOS.init();
</script>


<script>
  const navbar = document.getElementById("mainNavbar");

  window.addEventListener("scroll", function () {
    if (window.scrollY > 50) {
      navbar.classList.add("navbar-solid");
      navbar.classList.remove("navbar-transparent");
    } else {
      navbar.classList.remove("navbar-solid");
      navbar.classList.add("navbar-transparent");
    }
  });
</script>
</body>
</html>
