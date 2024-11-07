
<?php
require_once "../database.php";

if (isset($_POST['plan_id'])) {
  $planId = $_POST['plan_id'];

  $query = "DELETE FROM TravelPlans WHERE Id = '$planId'";

  $result = $conn->query($query);

  if($result){
    header("Location: .././");
  }else{
    echo "<script>alert('Gagal')</script>";
    echo "<script>window.location.href='.././'</script>";
  }
}
