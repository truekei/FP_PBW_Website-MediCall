<?php
  $message = $_GET["message"] ?? "";
  echo '<div class="alert alert-light" role="alert"' . htmlspecialchars($message) . '</div>';
?>

<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
  <link rel="stylesheet" type="text/css" href="register_style.css">

  <title>Registrasi - MediCall</title>
  <link rel="icon" type="image/x-icon" href="img/logo.png">

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer"/>

</head>

<body>
  <?php if(!empty($message)): ?>
    <div class="alert alert-warning" role="alert"><?= htmlspecialchars($message) ?></div>
  <?php endif; ?>
  <div class="register">
    <h1 class="text-center">Daftarkan Diri Anda Disini</h1>
    <form class="needs-validation" action="register_process.php" method="post" novalidate>
      <div class="form-group">
        <label class="form-label" for="fullName">Nama Lengkap</label>
        <input class="form-control" type="text" id="fullName" name="fullName" placeholder="Masukkan nama lengkap sesuai KTP anda" required>
      </div>
      <div class="form-group">
        <label class="form-label" for="email">Email</label>
        <input class="form-control" type="email" id="email" name="email" placeholder="Masukkan alamat email anda" required>
      </div>
      <div class="form-group">
        <label class="form-label" for="password">Password</label>
        <input class="form-control" type="password" id="password" name="password" placeholder="Masukkan password yang anda inginkan" required>
      </div>
      <div class="form-group form-check position-relative">
        <input class="form-check-input" type="checkbox" id="check" required>
        <label class="form-check-label" for="check" style="padding-top: 4px;">
          Saya menyetujui <a href="notfound.html">Syarat & Ketentuan</a> pada website MediCall.
        </label>
        <div class="invalid-tooltip">
          Mohon untuk menyetujui Syarat dan Ketentuan yang berlaku pada website kami.
        </div>
      </div>
      <p class="pt-4">Sudah memiliki akun? Masuk <a href="login.php">di sini</a>.</p>
      <input class="btn btn-primary w-100" type="submit" value="DAFTAR">
    </form>
  </div>

  <script>
    // Example starter JavaScript for disabling form submissions if there are invalid fields
    (() => {
      'use strict'

      // Fetch all the forms we want to apply custom Bootstrap validation styles to
      const forms = document.querySelectorAll('.needs-validation')

      // Loop over them and prevent submission
      Array.from(forms).forEach(form => {
        form.addEventListener('submit', event => {
          if (!form.checkValidity()) {
            event.preventDefault()
            event.stopPropagation()
          }

          form.classList.add('was-validated')
        }, false)
      })
    })()
  </script>

</body>
</html>