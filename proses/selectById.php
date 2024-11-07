<?php
require_once "database.php";

// Ambil plan_id dari URL
if (isset($_GET['plan_id'])) {
  $planId = $_GET['plan_id'];

  $query = "SELECT * FROM TravelPlans WHERE id = '$planId'";
  
  // query dieksekusi dan hasil query disimpan
  $stmt = $conn->query($query);

  // untuk mengambil satu baris hasil dari query.
  $result = $stmt->fetch(PDO::FETCH_ASSOC);
}
