<?php
    define('DB_SERVER','172.20.0.2');
    define('DB_USER','root');
    define('DB_PASS','admin');
    define('DB_NAME','kuis');
    $koneksi  = mysqli_connect($host, $username, $password, $database);

    if (! $koneksi) {
        die("Koneksi database gagal: " . mysqli_connect_error());
    }
?>
