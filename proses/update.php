<?php
require_once "../database.php";

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
  // get value form
  $planId = $_POST['plan_id'];  
  $destinasi = $_POST['destinasi']; 
  $tanggal = $_POST['tanggal']; 
  $budget = $_POST['budget']; 
  $transportasi = $_POST['transportasi']; 
  $catatan = $_POST['catatan']; 
  $status = $_POST['status']; 

  try{
    $query = "UPDATE TravelPlans SET 
                Destination = '$destinasi',
                TravelDate = '$tanggal',
                Budget = '$budget',
                Transportation = '$transportasi',
                Notes = '$catatan',
                Status = '$status' 
              WHERE Id = '$planId'";
      
    $stmt = $conn->query($query);
    
    if ($stmt) {
      header("Location: .././");
    }
  }catch (PDOException $e) {
      echo "<script>alert('Gagal update data!')</script>";
      echo "<script>window.location.href='.././updatePage.php?plan_id=$planId'</script>";
  }
}