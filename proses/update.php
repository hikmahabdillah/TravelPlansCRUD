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
                TravelDat = '$tanggal',
                Budget = '$budget',
                Transportation = '$transportasi',
                Notes = '$catatan',
                Status = '$status' 
              WHERE Id = '$planId'";
      
    // query dieksekusi dan hasil query disimpan
    $stmt = $conn->query($query);
    
    // Periksa apakah query berhasil dijalankan

    if ($stmt) {
      header("Location: .././");
    }
  }catch (PDOException $e) {
      echo "<script>alert('Gagal update data!')</script>";
      echo "<script>window.location.href='.././updatePage.php?plan_id=$planId'</script>";
  }
}