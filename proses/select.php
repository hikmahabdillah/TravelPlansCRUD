<?php
require_once "database.php";

$query = "SELECT * FROM TravelPlans";

// query dieksekusi dan hasil query disimpan
$stmt = $conn->query($query);

// mengambil semua hasil dari query
$results = $stmt->fetchAll(PDO::FETCH_ASSOC);

// pdo::fetch_assoc = untuk mengembalikan hasil dalam bentuk array asosiatif
