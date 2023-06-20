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
  <link rel="stylesheet" type="text/css" href="layanan_style.css">

  <!-- FontAwesome CDN Link -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer"/>

  <title>Layanan - MediCall</title>
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
            <li class="nav-item active">
              <a class="nav-link active" aria-current="page" href="layanan.php">Layanan</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="laporan.php">Laporan</a>
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
  <div class="container pt-4">
    <h3 class="pb-2">Layanan Praktek</h3>
    <div class="row row-cols-lg-5 row-cols-sm-2 gx-5 gy-2 text-center">
      <div class="col">
        <a href="notfound.html" style="text-decoration: none;">
          <img src="img/layanan/cek_lab.jpg" alt="" class="img-thumbnail" style="aspect-ratio: 4/3;">
          <h5 class="text-black">Cek Laboratorium</h5>
        </a>
      </div>
      <div class="col">
        <a href="notfound.html" style="text-decoration: none;">
          <img src="img/layanan/med_cek.jpg" alt="" class="img-thumbnail" style="aspect-ratio: 4/3;">
          <h5 class="text-black">Pemeriksaan Kesehatan</h5>
        </a>
      </div>
      <div class="col">
        <a href="notfound.html" style="text-decoration: none;">
          <img src="img/layanan/vaksinasi.jpg" alt="" class="img-thumbnail" style="aspect-ratio: 4/3;">
          <h5 class="text-black">Vaksinasi</h5>
        </a>
      </div>
      <div class="col">
        <a href="notfound.html" style="text-decoration: none;">
          <img src="img/layanan/imunisasi.jpg" alt="" class="img-thumbnail" style="aspect-ratio: 4/3;">
          <h5 class="text-black">Imunisasi</h5>
        </a>
      </div>
      <div class="col">
        <a href="notfound.html" style="text-decoration: none;">
          <img src="img/layanan/kandungan.jpg" alt="" class="img-thumbnail" style="aspect-ratio: 4/3;">
          <h5 class="text-black">Kandungan</h5>
        </a>
      </div>
      <div class="col">
        <a href="notfound.html" style="text-decoration: none;">
          <img src="img/layanan/ginekologi.jpg" alt="" class="img-thumbnail" style="aspect-ratio: 4/3;">
          <h5 class="text-black">Ginekologi</h5>
        </a>
      </div>
      <div class="col">
        <a href="notfound.html" style="text-decoration: none;">
          <img src="img/layanan/radiologi.jpg" alt="" class="img-thumbnail" style="aspect-ratio: 4/3;">
          <h5 class="text-black">Radiologi</h5>
        </a>
      </div>
      <div class="col">
        <a href="notfound.html" style="text-decoration: none;">
          <img src="img/layanan/fisioterapi.jpg" alt="" class="img-thumbnail" style="aspect-ratio: 4/3;">
          <h5 class="text-black">Fisioterapi</h5>
        </a>
      </div>
      <div class="col">
        <a href="notfound.html" style="text-decoration: none;">
          <img src="img/layanan/kecantikan.jpg" alt="" class="img-thumbnail" style="aspect-ratio: 4/3;">
          <h5 class="text-black">Kecantikan</h5>
        </a>
      </div>
      <div class="col">
        <a href="notfound.html" style="text-decoration: none;">
          <img src="img/layanan/scaling.jpg" alt="" class="img-thumbnail" style="aspect-ratio: 4/3;">
          <h5 class="text-black">Scaling</h5>
        </a>
      </div>
      <div class="col">
        <a href="notfound.html" style="text-decoration: none;">
          <img src="img/layanan/akupuntur.jpg" alt="" class="img-thumbnail" style="aspect-ratio: 4/3;">
          <h5 class="text-black">Akupuntur</h5>
        </a>
      </div>
    </div>
  </div>

  <div class="container pt-4 pb-5">
    <h3 class="pb-2">Layanan Lain</h3>
    <div class="row row-cols-lg-5 row-cols-sm-2 gx-5 gy-2 text-center">
      <div class="col">
        <a href="notfound.html" style="text-decoration: none;">
          <img src="img/layanan/kalkulator_bmi.jpg" alt="" class="img-thumbnail" style="aspect-ratio: 4/3;">
          <h5 class="text-black">Kalkulator BMI</h5>
        </a>
      </div>
      <div class="col">
        <a href="notfound.html" style="text-decoration: none;">
          <img src="img/layanan/kalkulator_stres.jpg" alt="" class="img-thumbnail" style="aspect-ratio: 4/3;">
          <h5 class="text-black">Kalkulator Tingkat Stres</h5>
        </a>
      </div>
      <div class="col">
        <a href="notfound.html" style="text-decoration: none;">
          <img src="img/layanan/tes_kecemasan.jpg" alt="" class="img-thumbnail" style="aspect-ratio: 4/3;">
          <h5 class="text-black">Tes Gangguan Kecemasan</h5>
        </a>
      </div>
      <div class="col">
        <a href="notfound.html" style="text-decoration: none;">
          <img src="img/layanan/tes_adhd.jpg" alt="" class="img-thumbnail" style="aspect-ratio: 4/3;">
          <h5 class="text-black">Tes Gangguan ADHD</h5>
        </a>
      </div>
      <div class="col">
        <a href="notfound.html" style="text-decoration: none;">
          <img src="img/layanan/kalender_menstruasi.jpg" alt="" class="img-thumbnail" style="aspect-ratio: 4/3;">
          <h5 class="text-black">Kalender Menstruasi</h5>
        </a>
      </div>
      <div class="col">
        <a href="notfound.html" style="text-decoration: none;">
          <img src="img/layanan/kalender_kehamilan.jpg" alt="" class="img-thumbnail" style="aspect-ratio: 4/3;">
          <h5 class="text-black">Kalender Kehamilan</h5>
        </a>
      </div>
      <div class="col">
        <a href="notfound.html" style="text-decoration: none;">
          <img src="img/layanan/pengingat_obat.jpg" alt="" class="img-thumbnail" style="aspect-ratio: 4/3;">
          <h5 class="text-black">Pengingat Obat</h5>
        </a>
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