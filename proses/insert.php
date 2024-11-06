<?php
require_once "../database.php";

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
  $destinasi = $_POST['destinasi'];
  $tanggal = $_POST['tanggal'];
  $budget = $_POST['budget'];
  $transportasi = $_POST['transportasi'];
  $catatan = $_POST['catatan'];
  $status = $_POST['status'];

  // Inisialisasi array untuk menampung respons
  $response = [
    'status' => 'error',
    'message' => 'Gagal menambahkan data'
  ];
  
  // Validasi tanggal
  if ($tanggal <= date('Y-m-d')) {
    $response['message'] = 'Tanggal harus sesuai.';
    echo json_encode($response);
    exit; //menghentikan eksekusi skrip lebih lanjut
  }

  // Query untuk menambahkan data
  $query = "INSERT INTO TravelPlans (Destination, TravelDate, Budget, Transportation, Notes, Status) 
            VALUES ('$destinasi', '$tanggal', '$budget', '$transportasi', '$catatan', '$status')";
  
  // Menjalankan query untuk menambahkan data ke database
  $stmt = $conn->query($query);

  // Periksa apakah query berhasil dijalankan
  if ($stmt) {
    $response['status'] = 'success';
    $response['message'] = 'Berhasil menambahkan data!';
  }

  // Kirim respons dalam format JSON
  echo json_encode($response);
  exit; //menghentikan eksekusi skrip lebih lanjut
}
