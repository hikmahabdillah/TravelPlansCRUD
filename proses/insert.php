<?php
require_once "../database.php";

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
  $destinasi = $_POST['destinasi'];
  $tanggal = $_POST['tanggal'];
  $budget = $_POST['budget'];
  $transportasi = $_POST['transportasi'];
  $catatan = $_POST['catatan'];
  $status = $_POST['status'];

  try {
    // Query untuk menambahkan data
    $query = "INSERT INTO TravelPlans (Destination, TravelDate, Budget, Transportation, Notes, Status) 
            VALUES ('$destinasi', '$tanggal', '$budget', '$transportasi', '$catatan', '$status')";

    // Menjalankan query untuk menambahkan data ke database
    $stmt = $conn->query($query);

    // Periksa apakah query berhasil dijalankan
    if ($stmt) {
      header("Location: .././");
      exit();
    }
  } catch (PDOException $e) {
    echo "<script>alert('Gagal menambah data!')</script>";
    echo "<script>window.location.href='.././'</script>";
  }
}
