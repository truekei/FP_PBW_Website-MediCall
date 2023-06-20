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
  <link rel="stylesheet" type="text/css" href="index_style.css">

  <!-- FontAwesome CDN Link -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer"/>

  <title>MediCall - Tempat Konsultasi Termudah</title>
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
            <li class="nav-item active">
              <a class="nav-link active" aria-current="page" href="index.php">Beranda</a>
            </li>
            <li class="nav-item">
            <?php if(isset($user)): ?>
              <a class="nav-link" href="layanan.php">Layanan</a>
            <?php else: ?>
              <a class="nav-link" href="register.php?message=<?php echo urlencode("Mohon mendaftarkan akun terlebih dahulu."); ?>">Layanan</a>
            <?php endif; ?>
            </li>
            <li class="nav-item">
            <?php if(isset($user)): ?>
              <a class="nav-link" href="laporan.php">Laporan</a>
            <?php else: ?>
              <a class="nav-link" href="register.php?message=<?php echo urlencode("Mohon mendaftarkan akun terlebih dahulu."); ?>">Laporan</a>
            <?php endif; ?>
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
  <div id="homeSlide" class="carousel slide carousel-fade" data-bs-ride="carousel">
    <div class="caption">
      <h1 class="display-4 text-white fw-bold">Tempat Konsultasi Kesehatan Termudah</h1>
      <br><br>
      <p class="lead text-white">Konsultasi semua keluhan mulai dari yang paling ringan hingga darurat bisa dilakukan di
        MediCall!</p>
      <?php if(!isset($user)): ?>
      <a href="register.php" type="button" class="btn btn-danger btn-lg">Daftar Sekarang</a>
      <?php endif; ?>
    </div>
    <div class="carousel-inner" role="listbox">
      <div class="carousel-item active">
        <img src="img/index/slide1.jpg" class="d-block w-100" alt="...">
      </div>
      <div class="carousel-item">
        <img src="img/index/slide2.jpg" class="d-block w-100" alt="...">
      </div>
      <div class="carousel-item">
        <img src="img/index/slide3.jpg" class="d-block w-100" alt="...">
      </div>
      <div class="carousel-item">
        <img src="img/index/slide4.jpg" class="d-block w-100" alt="...">
      </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#homeSlide" data-bs-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#homeSlide" data-bs-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Next</span>
    </button>
  </div>

  <br><br>

  <div class="container pb-5">
    <div class="row">
      <div class="col-sm-6">
        <h3>Konsultasi Kesehatan</h3>
        <div class="row">
          <a class="item-menu text-center col-sm-5 col-lg-3 mx-2 mt-2 pt-4 px-2" href="notfound.html">
            <i class="fa-solid fa-stethoscope fa-2xl" style="color: white;"></i>
            <p class="text-white fw-bold pt-4">Umum</p>
          </a>
          <a class="item-menu text-center col-sm-5 col-lg-3 mx-2 mt-2 pt-4 px-2" href="notfound.html">
            <i class="fa-solid fa-eye fa-2xl" style="color: white;"></i>
            <p class="text-white fw-bold pt-4">Mata</p>
          </a>
          <a class="item-menu text-center col-sm-5 col-lg-3 mx-2 mt-2 pt-4 px-2" href="notfound.html">
            <i class="fa-solid fa-tooth fa-2xl" style="color: white;"></i>
            <p class="text-white fw-bold pt-4">Gigi</p>
          </a>
          <a class="item-menu text-center col-sm-5 col-lg-3 mx-2 mt-2 pt-4 px-2" href="notfound.html">
            <i class="fa-solid fa-brain fa-2xl" style="color: white;"></i>
            <p class="text-white fw-bold pt-4">Saraf</p>
          </a>
          <a class="item-menu text-center col-sm-5 col-lg-3 mx-2 mt-2 pt-4 px-2" href="notfound.html">
            <i class="fa-solid fa-heart-pulse fa-2xl" style="color: white;"></i>
            <p  class="text-white fw-bold pt-4">Jantung</p>
          </a>
          <a class="item-menu text-center col-sm-5 col-lg-3 mx-2 mt-2 pt-4 px-2" href="notfound.html">
            <i class="fa-solid fa-lungs fa-2xl" style="color: white;"></i>
            <p  class="text-white fw-bold pt-4">Paru-Paru</p>
          </a>
          <a class="item-menu text-center col-sm-5 col-lg-3 mx-2 mt-2 pt-4 px-2" href="notfound.html">
            <i class="fa-solid fa-hand-dots fa-2xl" style="color: white;"></i>
            <p  class="text-white fw-bold pt-4">Kulit</p>
          </a>
          <a class="item-menu text-center col-sm-5 col-lg-3 mx-2 mt-2 pt-4 px-2" href="notfound.html">
            <i class="fa-solid fa-virus-covid fa-2xl" style="color: white;"></i>
            <p  class="text-white fw-bold pt-4">Covid-19</p>
          </a>
        </div>
      </div>
      <div class="col-sm-6">
        <h3>Layanan Lainnya</h3>
        <div class="row">
          <a href="notfound.html" class="item-menu text-center col-sm-5 col-lg-3 mx-2 mt-2 pt-4 px-2">
            <i class="fa-solid fa-pills fa-2xl" style="color: white;"></i>
            <p  class="text-white fw-bold pt-4">Informasi Obat</p>
          </a>
          <a href="notfound.html" class="item-menu text-center col-sm-5 col-lg-3 mx-2 mt-2 pt-4 px-2">
            <i class="fa-solid fa-weight-scale fa-2xl" style="color: white;"></i>
            <p  class="text-white fw-bold pt-4">Hitung BMI</p>
          </a>
          <a href="notfound.html" class="item-menu text-center col-sm-5 col-lg-3 mx-2 mt-2 pt-4 px-2">
            <i class="fa-solid fa-comments fa-2xl" style="color: white;"></i>
            <p  class="text-white fw-bold pt-4">Tanya Dokter</p>
          </a>
          <a href="notfound.html" class="item-menu text-center col-sm-5 col-lg-3 mx-2 mt-2 pt-4 px-2">
            <i class="fa-solid fa-headset fa-2xl" style="color: white;"></i>
            <p  class="text-white fw-bold pt-4">Customer Service</p>
          </a>
        </div>
      </div>
    </div>
  </div>

  <div class="container pb-5">
    <h3 class="pb-2">Artikel Terkini</h3>
    <div class="row row-cols-lg-4 row-cols-md-3 row-cols-sm-2 g-4">
      <div class="col">
        <a href="notfound.html" style="text-decoration: none;">
          <div class="card h-100">
            <img src="img/index/art1.jpg" class="card-img-top" alt="...">
            <div class="card-body">
              <p class="card-title fw-bold">10 Jenis Olahraga untuk Menjalani Hidup Sehat</p>
              <p class="card-text">Seiring dengan bertambahnya usia, upaya menjaga tubuh tetap bugar dengan olahraga mesti tepat agar tujuan tercapai.</p>
            </div>
          </div>
        </a>
      </div>
      <div class="col">
        <a href="notfound.html" style="text-decoration: none;">
          <div class="card h-100">
            <img src="img/index/art2.jpg" class="card-img-top" alt="...">
            <div class="card-body">
              <p class="card-title fw-bold">Lakukan 5 Hal Ini Jika Kamu Terkena Flu</p>
              <p class="card-text">Flu atau influenza merupakan penyakit yang disebabkan oleh infeksi virus yang dapat menyerang hidung, tenggorokan, dan paru-paru. Kondisi ini sangat umum terjadi di musim pancaroba.</p>
            </div>
          </div>
        </a>
      </div>
      <div class="col">
        <a href="notfound.html" style="text-decoration: none;">
          <div class="card h-100">
            <img src="img/index/art3.jpg" class="card-img-top" alt="...">
            <div class="card-body">
              <p class="card-title fw-bold">Tips Diet Sehat dan Bugar Menurut Dokter Gizi</p>
              <p class="card-text">Diet yang sehat dan sesuai pada kondisi tubuh berdampak positif pada kebugaran tubuh. Selain itu, kita juga terhindar dari risiko terkena penyakit, apabila dilakukan dengan benar.</p>
            </div>
          </div>
        </a>
      </div>
      <div class="col">
        <a href="notfound.html" style="text-decoration: none;">
          <div class="card h-100">
            <img src="img/index/art4.jpg" class="card-img-top" alt="...">
            <div class="card-body">
              <p class="card-title fw-bold">Rekomendasi Masker untuk Membantu Memutihkan Wajah</p>
              <p class="card-text">Ritual malam sebelum tidur bagi wanita identik dengan membersihkan wajah dan penggunaan skincare. Dua hal ini penting dilakukan untuk menjaga wajah tetap sehat dan cerah.</p>
            </div>
          </div>
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