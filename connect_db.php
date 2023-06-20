<?php
    $mysqli = new mysqli('localhost', 'root', '', 'medicalldb'); // host, user, pass, db
    
    if($mysqli->connect_errno) {
        die('Koneksi Gagal: ' . mysqli_connect_error());
    }

    return $mysqli;
