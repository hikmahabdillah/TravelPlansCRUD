
<?php
require_once "../database.php";

if (isset($_POST['plan_id'])) {
  $planId = $_POST['plan_id'];

  $query = "DELETE FROM TravelPlans WHERE Id = '$planId'";

  $conn->query($query);

  header("Location: .././");
}
