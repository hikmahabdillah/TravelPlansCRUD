<?php
require_once "./proses/selectById.php";
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Travel Plans</title>
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
</head>

<body style="font-family: 'Poppins', serif; padding: 2rem;">
  <h2>Update Plan</h2>
  <div id="error-msg" style="color:red"></div>
  <form action="proses/update.php" method="post" id="updateplan">
    <?php
    $id = $result['Id'];
    $destinasi = $result['Destination'];
    $tanggal = $result['TravelDate'];
    $budget = $result['Budget'];
    $transportasi = $result['Transportation'];
    $catatan = $result['Notes'];
    $status = $result['Status'];
    ?>
    
    <input type="hidden" name="plan_id" id="plan_id" value="<?php echo $id;?>">

    <label for="destination">Destinasi:</label>
    <input type="text" id="destination" name="destinasi" value=<?php echo $destinasi; ?> required><br><br>

    <label for="travelDate">Tanggal:</label>
    <input type="date" id="travelDate" name="tanggal" min="<?php echo date('Y-m-d'); ?>" value=<?php echo $tanggal; ?> required><br><br>

    <label for="budget">Budget (Rp):</label>
    <input type="number" id="budget" name="budget" min="0" value=<?php echo $budget; ?> required><br><br>

    <label for="transportation">Transportasi:</label>
    <select id="transportation" name="transportasi" value=<?php echo $transportasi; ?> required>
      <option value="Airplane" <?php echo ($transportasi == 'Airplane') ? 'selected' : ''; ?>>Airplane</option>
      <option value="Ship" <?php echo ($transportasi == 'Ship') ? 'selected' : ''; ?>>Ship</option>
      <option value="Train" <?php echo ($transportasi == 'Train') ? 'selected' : ''; ?>>Train</option>
      <option value="Bus" <?php echo ($transportasi == 'Bus') ? 'selected' : ''; ?>>Bus</option>
      <option value="Car" <?php echo ($transportasi == 'Car') ? 'selected' : ''; ?>>Car</option>
    </select><br><br>

    <label for="notes">Catatan:</label><br>
    <textarea id="notes" name="catatan" rows="10" cols="50"><?php echo $catatan; ?></textarea><br><br>

    <label for="status">Status:</label>
    <select id="status" name="status" value=<?php echo $status; ?> required>
      <option value="Planned" <?php echo ($status == 'Planned') ? 'selected' : ''; ?>>Planned</option>
      <option value="In Progress" <?php echo ($status == 'In Progress') ? 'selected' : ''; ?>>In Progress</option>
      <option value="Completed" <?php echo ($status == 'Completed') ? 'selected' : ''; ?>>Completed</option>
      <option value="Cancelled" <?php echo ($status == 'Cancelled') ? 'selected' : ''; ?>>Cancelled</option>
    </select><br><br>

    <button type="submit">Submit</button>
  </form>
</body>

</html>