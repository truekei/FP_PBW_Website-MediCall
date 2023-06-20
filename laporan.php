<?php
  session_start();
  if(isset($_SESSION["id"])) {
    $mysqli = require __DIR__ . "/connect_db.php";
    $sql = "SELECT * FROM user WHERE id = {$_SESSION['id']}";
    $result = $mysqli->query($sql);
    $user = $result->fetch_assoc();
  }
?>

<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">

  <!-- FontAwesome CDN Link -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer"/>
  <link rel="stylesheet" type="text/css" href="laporan_style.css">

  <title>Laporan - MediCall</title>
  <link rel="icon" type="image/x-icon" href="img/logo.png">

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"></script>

</head>

<body>
    <header class="sticky-top">
        <nav class="navbar navbar-expand-lg bg-light" style="box-shadow: #00000055 0px 4px 15px;">
          <div class="container-fluid">
            <a class="navbar-brand fs-4" href="#">
              <img src="img/logo.png" width="40" height="40" class="d-inline-block align-top" alt="">
              MediCall
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>
            <div class="container" style="width: 30px;"></div>
        <div class="collapse navbar-collapse" id="navbarNavDropdown">
          <ul class="navbar-nav">
            <li class="nav-item">
              <a class="nav-link" href="index.php">Beranda</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="layanan.php">Layanan</a>
            </li>
            <li class="nav-item active">
              <a class="nav-link active" aria-current="page" href="laporan.php">Laporan</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="artikel.php">Artikel</a>
            </li>
          </ul>
        </div>
        <?php if(isset($user)): ?>
          <h5 class="px-4">Halo, <?= htmlspecialchars($user["fullName"]) ?></h5>
          <a href="logout.php" type="button" class="btn btn-danger btn-md">Keluar</a>
        <?php else: ?>
          <a href="login.php" type="button" class="btn btn-danger btn-md">Masuk</a>
        <?php endif; ?>
      </div>
    </nav>
  </header>

  <!-- Content -->
  <div class="container bg-primary-subtle pt-3 pb-4 mt-4">
    <h3>Informasi Pribadi</h3>
    <div class="row row-cols-3 mx-auto mt-3 g-3">
      <div class="col">
        <h4 class="fw-bold">20 Tahun</h4>
        <p>Umur</p>
      </div>
      <div class="col">
        <h4 class="fw-bold">170 cm</h4>
        <p>Tinggi Badan</p>
      </div>
      <div class="col">
        <h4 class="fw-bold">55 kg</h4>
        <p>Berat Badan</p>
      </div>
    </div>
  </div>
  <br>
  <div class="container bg-primary-subtle pt-3 pb-4">
    <h3>Kondisi Kesehatan</h3>
    <div class="row row-cols-2 mx-auto mt-3 g-4">
      <div class="col">
        <h4 class="fw-bold">100/70 mmHg</h4>
        <p>Tekanan Darah</p>
      </div>
      <div class="col">
        <h4 class="fw-bold">90 mg/dL</h4>
        <p>Gula Darah</p>
      </div>
      <div class="col">
        <h4 class="fw-bold">160 mg/dL</h4>
        <p>Kolesterol</p>
      </div>
      <div class="col">
        <h4 class="fw-bold">240.000 mcL</h4>
        <p>Trombosit</p>
      </div>
    </div>
  </div>
  <br>
  <div class="container bg-primary-subtle pt-3 pb-4 mb-5">
    <h3>Status Vaksin</h3>
    <div class="row row-cols-4 mx-auto mt-3 g-4">
      <div class="col text-center">
        <i class="fa-solid fa-check fa-2xl"></i>
        <h4 class="fw-bold">COVID-19</h4>
      </div>
      <div class="col text-center">
        <i class="fa-solid fa-check fa-2xl"></i>
        <h4 class="fw-bold">Hepatitis A dan B</h4>
      </div>
      <div class="col text-center">
        <i class="fa-solid fa-check fa-2xl"></i>
        <h4 class="fw-bold">Herpes Zoster</h4>
      </div>
      <div class="col text-center">
        <i class="fa-solid fa-check fa-2xl"></i>
        <h4 class="fw-bold">Influenza</h4>
      </div>
      <div class="col text-center">
        <i class="fa-solid fa-check fa-2xl"></i>
        <h4 class="fw-bold">HPV</h4>
      </div>
      <div class="col text-center">
        <i class="fa-solid fa-check fa-2xl"></i>
        <h4 class="fw-bold">VAR</h4>
      </div>
      <div class="col text-center">
        <i class="fa-solid fa-check fa-2xl"></i>
        <h4 class="fw-bold">Cacar Air</h4>
      </div>
    </div>
  </div>

  <footer class="text-white pt-3 pb-4" style="background-color: #111111;">
    <div class="container text-md-left">
      <div class="row text-md-left">
        <div class="col-md-4 col-lg-4 col-xl-4 mx-auto mt-3">
          <img src="img/logo.png" width="30" height="30" class="d-inline-block align-top mb-4" alt="">
          MediCall
          <p class="fw-bold">PT Medicall Indonesia</p>
          <p>Jalan Merdeka No.1, Bali, Indonesia 80808</p>
          <p><i class="fa-solid fa-envelope fa-1xl" style="color: white;"></i> : help@medicall.com |
            <i class="fa-brands fa-whatsapp fa-1xl" style="color: white;"></i> : 0812-3456-7890</p>
        </div>
        <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mt-3">
          <h5 class="text-uppercase mb-4 fw-bold">Informasi</h5>
          <p>
            <a href="about.php" class="text-white" style="text-decoration: none;">Tentang Kami</a>
          </p>
          <p>
            <a href="notfound.html" class="text-white" style="text-decoration: none;">FAQ</a>
          </p>
          <p>
            <a href="notfound.html" class="text-white" style="text-decoration: none;">Kebijakan Privasi</a>
          </p>
          <p>
            <a href="notfound.html" class="text-white" style="text-decoration: none;">Syarat dan Ketentuan</a>
          </p>
        </div>
        <div class="col-md-4 col-lg-4 col-xl-4 mx-auto mt-3">
          <h5>Temukan kami di:</h5>
          <div class="row">
            <div class="col-md-3 mx-auto mt-3">
              <a href="https://www.facebook.com">
                <i class="fa-brands fa-facebook fa-2xl" style="color: white;"></i>
              </a>
            </div>
            <div class="col-md-3 mx-auto mt-3">
              <a href="https://www.instagram.com">
                <i class="fa-brands fa-instagram fa-2xl" style="color: white;"></i>
              </a>
            </div>
            <div class="col-md-3 mx-auto mt-3">
              <a href="https://twitter.com">
                <i class="fa-brands fa-twitter fa-2xl" style="color: white;"></i>
              </a>
            </div>
            <div class="col-md-3 mx-auto mt-3">
              <a href="https://www.youtube.com">
                <i class="fa-brands fa-youtube fa-2xl" style="color: white;"></i>
              </a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </footer>

</body>

</html>