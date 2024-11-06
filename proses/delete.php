
<?php
require_once "../database.php";

if (isset($_POST['plan_id'])) {
  $planId = $_POST['plan_id'];

  $query = "DELETE FROM TravelPlans WHERE Id = '$planId'";
  $result = $conn->query($query);

  $response = ['status' => 'error', 'message' => 'Failed to delete the plan.'];

  if($result){
    $response['status'] = 'success';
    $response['message'] = 'Plan deleted successfully.';
  }
  echo json_encode($response);
  exit;
}
