<?php
    $fullName = $_POST["fullName"];
    $email = $_POST["email"];
    $password = $_POST["password"];

    $mysqli = require __DIR__ . "/connect_db.php";

    $sql = "SELECT * FROM user WHERE email = ?";
    $stmt = $mysqli->prepare($sql);
    // $stmt->prepare($sql);
    $stmt->bind_param("s", $email);
    $stmt->execute();
    $result = $stmt->get_result();

    if($result->num_rows > 0) { // Jika email sudah ada
        echo "Email yang anda masukkan sudah terdaftar.";
    } else {
        $sql = "INSERT INTO user (fullName, email, pass)
            VALUES (?, ?, ?)";
        $stmt->prepare($sql);
        $stmt->bind_param("sss", $fullName, $email, $password);
        $stmt->execute();
        header("Location: register-success.html");
        exit;
    }