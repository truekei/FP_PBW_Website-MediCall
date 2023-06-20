<?php
  $is_invalid = false;
  if($_SERVER["REQUEST_METHOD"] === "POST") {
    $mysqli = require __DIR__ . "/connect_db.php";
    $sql = sprintf("SELECT * FROM user WHERE email = '%s'",
                    $mysqli->real_escape_string($_POST["email"]));
    $result = $mysqli->query($sql);
    $user = $result->fetch_assoc();

    if($user && ($_POST["password"] === $user["pass"])) {
      session_start();
      session_regenerate_id();
      $_SESSION["id"] = $user["id"];
      header("Location: index.php");
      exit;
    } else {
      $is_invalid = true;
    }
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
  <link rel="stylesheet" type="text/css" href="register_style.css">

  <title>Login - MediCall</title>
  <link rel="icon" type="image/x-icon" href="img/logo.png">

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer"/>

</head>

<body>
  <div class="register">
    <h1 class="text-center">Selamat Datang Kembali</h1>
    <form class="needs-validation" method="post" novalidate>
      <div class="form-group">
        <label class="form-label" for="email">Email</label>
        <input class="form-control was-validated" type="email" id="email" name="email" value="<?= htmlspecialchars($_POST["email"] ?? "")?>" required>
        <div class="invalid-feedback">
          Mohon masukkan alamat email anda dengan benar.
        </div>
      </div>
      <div class="form-group">
        <label class="form-label" for="password">Password</label>
        <input class="form-control" type="password" id="password" name="password" required>
        <div class="invalid-feedback">
          Mohon masukkan password yang anda inginkan.
        </div>
      </div>
      <?php if ($is_invalid): ?>
      <em class="text-danger">Email atau password yang anda masukkan salah.</em>
      <?php endif; ?>
      <p class="pt-4">Belum memiliki akun? Daftar <a href="register.php"> di sini</a>.</p>
      <input class="btn btn-primary w-100" type="submit" value="MASUK">
    </form>
  </div>

</body>
</html>