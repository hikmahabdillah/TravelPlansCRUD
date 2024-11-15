<?php
    try {
        $dsn = "sqlsrv:server=PARTICLE\SQLEXPRESS;database=TravelPlans";
        $conn = new PDO($dsn);
    } catch (PDOException $e) {
        // PDOException : class yang menangani PDO saat ada error terkait database
        echo $e;
    }