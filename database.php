<?php
    try {
        // sqlsrv: koneksi menggunakan driver SQL Server
        $dsn = "sqlsrv:server=PARTICLE\SQLEXPRESS;database=TravelPlans";
        // string koneksi yang dibutuhkan untuk menghubungkan aplikasi PHP ke database

        $conn = new PDO($dsn); // akan berisi objek koneksi ke database
    } catch (PDOException $e) {
       // Menangkap error yang mungkin terjadi ketika PDO gagal melakukan koneksi ke database.

        // PDOException : class yang menangani PDO saat ada error terkait database
        echo $e;
    }