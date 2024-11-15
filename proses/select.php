<?php
require_once "database.php";

$query = "SELECT * FROM TravelPlans";

$stmt = $conn->query($query);

$results = $stmt->fetchAll(PDO::FETCH_ASSOC);

// pdo::fetch_assoc = untuk mengembalikan hasil dalam bentuk array asosiatif
