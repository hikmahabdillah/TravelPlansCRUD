<?php
    $conn; //untuk menyimpan objek koneksi ke database.
    $dsn = "sqlsrv:server=DESKTOP-OF0MEVA\SQLEXPRESS;database=TravelPlans";

    try {
        $conn = new PDO($dsn); // akan berisi objek koneksi ke database
    } catch (PDOException $e) {
        echo $e;
    }