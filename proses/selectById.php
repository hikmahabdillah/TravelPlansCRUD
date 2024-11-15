<?php
require_once "database.php";

// Ambil nilai plan_id dari URL
if (isset($_GET['plan_id'])) {
  $planId = $_GET['plan_id'];

  $query = "SELECT * FROM TravelPlans WHERE id = '$planId'";
  $stmt = $conn->query($query);

  $result = $stmt->fetch(PDO::FETCH_ASSOC);
}
