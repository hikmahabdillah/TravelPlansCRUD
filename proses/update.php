<?php
require_once "../database.php";

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
  $planId = $_POST['plan_id'];  
  $destinasi = $_POST['destinasi']; 
  $tanggal = $_POST['tanggal']; 
  $budget = $_POST['budget']; 
  $transportasi = $_POST['transportasi']; 
  $catatan = $_POST['catatan']; 
  $status = $_POST['status']; 

  $response = ['status' => 'error', 'message' => 'Failed to update the plan.'];

  // Validasi tanggal
  if ($tanggal <= date('Y-m-d')) {
    $response['message'] = 'Tanggal harus sesuai.';
    echo json_encode($response);
    exit; //menghentikan eksekusi skrip lebih lanjut
  }

  $query = "UPDATE TravelPlans SET 
              Destination = '$destinasi',
              TravelDate = '$tanggal',
              Budget = '$budget',
              Transportation = '$transportasi',
              Notes = '$catatan',
              Status = '$status' 
            WHERE Id = '$planId'";
    
  $stmt = $conn->query($query);
  
  // Periksa apakah query berhasil dijalankan
  if ($stmt) {
    $response['status'] = 'success';
    $response['message'] = 'Plan updated successfully.';
    }
    echo json_encode($response);
    exit; //menghentikan eksekusi skrip lebih lanjut
}

