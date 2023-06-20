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
  <link rel="stylesheet" type="text/css" href="artikel_style.css">


  <!-- FontAwesome CDN Link -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer"/>

  <title>Artikel - MediCall</title>
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
            <li class="nav-item active">
                <a class="nav-link active" aria-current="page" href="artikel.php">Artikel</a>
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
    <h1>Artikel Terkini untuk Anda</h1>
  </div>

  <div class="container">
    <div class="row pt-3">
      <div class="col-lg-4 col-md-7">
        <a href="notfound.html">
          <img src="img/artikel/art1.jpg" alt="" style="width: 400px;" class="img-thumbnail">
        </a>
      </div>
      <div class="col-4">
        <a href="notfound.html" style="text-decoration: none;"><h3 class="text-black">Mengenali Definisi Tepat dari Kesehatan Mental dan Dampaknya</h3></a>
        <p>Setiap tahun, dunia memperingati Hari Kesehatan Mental Sedunia, tepatnya pada tanggal 10 Oktober. Kesehatan mental sendiri menjadi hal yang tidak boleh kamu abaikan. Sebab, selain memengaruhi kualitas hidup, gangguan kesehatan mental yang tidak mendapatkan penanganan dengan baik juga dapat berdampak pada kesehatan fisik.</p>
      </div>
    </div>
    
    <div class="row row-cols-lg-4 row-cols-md-2 pt-5 pb-5">
      <div class="col">
        <a href="notfound.html" style="text-decoration: none;">
          <img src="img/artikel/art2.jpg" alt="" class="img-thumbnail">
          <h5 class="text-black pt-3">10 Makanan Rendah Karbohidrat yang Menyehatkan Tubuh</h5>
        </a>
        <p class="text-black">Makanan rendah karbohidrat menjadi pilihan ketika sedang menjalani diet. Tidak hanya itu, mengonsumsi makanan rendah karbohidrat juga bermanfaat untuk menurunkan kadar gula darah, kolesterol, dan tekanan darah tinggi.</p>
      </div>
      <div class="col">
        <a href="notfound.html" style="text-decoration: none;">
          <img src="img/artikel/art3.jpg" alt="" class="img-thumbnail">
          <h5 class="text-black pt-3">Ciri-Ciri Sembelit yang Penting untuk Diketahui</h5>
        </a>
        <p class="text-black">Ciri-ciri sembelit yang paling utama adalah sulit buang air besar (BAB). Namun, tidak hanya itu saja, karena ada beberapa keluhan lain yang mungkin Anda rasakan ketika mengalami sembelit.</p>
      </div>
      <div class="col">
        <a href="notfound.html" style="text-decoration: none;">
          <img src="img/artikel/art4.jpg" alt="" class="img-thumbnail">
          <h5 class="text-black pt-3">5 Manfaat Treadmill bagi Kesehatan Tubuh</h5>
        </a>
        <p class="text-black">Treadmill merupakan alat olahraga yang digunakan untuk berjalan dan berlari di tempat yang sama. Olahraga yang umumnya dilakukan dalam ruangan ini kian populer, apalagi kualitas udara di luar ruangan sedang memburuk.</p>
      </div>
      <div class="col">
        <a href="notfound.html" style="text-decoration: none;">
          <img src="img/artikel/art5.jpg" alt="" class="img-thumbnail">
          <h5 class="text-black pt-3">Manfaat Roti untuk Kesehatan yang Tidak Kalah dari Nasi</h5>
        </a>
        <p class="text-black">Manfaat roti yang paling utama adalah sebagai sumber energi, sehingga dapat dikonsumsi sebagai pengganti nasi. Berbagai jenis roti bahkan memiliki manfaat kesehatan lain, mulai dari menurunkan berat badan hingga mencegah risiko terkena penyakit jantung.</p>
      </div>
      <div class="col">
        <a href="notfound.html" style="text-decoration: none;">
          <img src="img/artikel/art6.jpg" alt="" class="img-thumbnail">
          <h5 class="text-black pt-3">Beberapa Obat Sesak yang Ampuh Melegakan Pernapasan</h5>
        </a>
        <p class="text-black">Obat sesak bermanfaat untuk mengatasi keluhan sulit bernapas akibat gangguan pada saluran pernapasan, misalnya asma atau paru-paru basah. Obat sesak dapat digunakan untuk melegakan pernapasan sejak awal gejala terjadi.</p>
      </div>
      <div class="col">
        <a href="notfound.html" style="text-decoration: none;">
          <img src="img/artikel/art7.jpg" alt="" class="img-thumbnail">
          <h5 class="text-black pt-3">5 Obat Pemutih Kulit yang Aman</h5>
        </a>
        <p class="text-black">Obat pemutih kulit bisa menjadi solusi untuk memutihkan kulit dengan cepat. Obat ini digunakan untuk mengatasi hiperpigmentasi, yaitu kondisi ketika area kulit tertentu berwarna lebih gelap. Meski umumnya tidak berbahaya, kondisi ini bisa menganggu penampilan dan menyebabkan penderitanya tidak percaya diri.</p>
      </div>
      <div class="col">
        <a href="notfound.html" style="text-decoration: none;">
          <img src="img/artikel/art8.jpg" alt="" class="img-thumbnail">
          <h5 class="text-black pt-3">Manfaat Keju Cottage untuk Kesehatan Tubuh</h5>
        </a>
        <p class="text-black">Keju cottage mungkin masih terdengar asing di telinga sebagian orang. Padahal, keju ini memiliki beragam manfaat, salah satunya meningkatkan massa otot karena mengandung protein yang tinggi. Selain itu, nutrisi yang terkandung dalam keju cottage juga dapat memberikan manfaat lain.</p>
      </div>
      <div class="col">
        <a href="notfound.html" style="text-decoration: none;">
          <img src="img/artikel/art9.jpg" alt="" class="img-thumbnail">
          <h5 class="text-black pt-3">Infeksi Tenggorokan, Ketahui Gejala dan Cara Mengatasinya</h5>
        </a>
        <p class="text-black">Infeksi tenggorokan merupakan penyebab sakit tenggorokan yang sering terjadi. Kondisi ini bisa disebabkan oleh bakteri, virus, maupun jamur. infeksi tenggorokan bisa ditangani dengan menggunakan bahan yang tersedia di rumah, hingga menjalani penanganan medis yang disarankan oleh dokter.</p>
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