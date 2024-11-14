<?php
require_once "./proses/select.php";
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

<scr style="font-family: 'Poppins', serif; padding: 2rem;">
<h2>Create New Plan</h2>
  <form action="proses/insert.php" method="post" id="insert-submit">
    <label for="destination">Destinasi:</label>
    <input type="text" id="destination" name="destinasi" required><br><br>

    <label for="travelDate">Tanggal:</label>
    <input type="date" id="travelDate" name="tanggal" min="<?php echo date('Y-m-d'); ?>" required><br><br>

    <label for="budget">Budget (Rp):</label>
    <input type="number" id="budget" name="budget" min="0" required><br><br>

    <label for="transportation">Transportasi:</label>
    <select id="transportation" name="transportasi" required>
      <option value="Airplane">Airplane</option>
      <option value="Ship">Ship</option>
      <option value="Train">Train</option>
      <option value="Bus">Bus</option>
      <option value="Car">Car</option>
    </select><br><br>

    <label for="notes">Catatan:</label><br>
    <textarea id="notes" name="catatan" rows="10" cols="50"></textarea><br><br>

    <label for="status">Status:</label>
    <select id="status" name="status" required>
      <option value="Planned">Planned</option>
      <option value="In Progress">In Progress</option>
      <option value="Completed">Completed</option>
      <option value="Cancelled">Cancelled</option>
    </select><br><br>

    <button type="submit">Submit</button>
  </form>
  <h1 align="center">Travel Plans</h1>
  <table border="1px" style="border-collapse: collapse; margin: auto;" cellpadding="10px">
    <thead>
      <tr>
        <th>Destinasi</th>
        <th>Tanggal</th>
        <th>Budget</th>
        <th>Transportasi</th>
        <th>Catatan</th>
        <th>Status</th>
        <th colspan=2>Action</th>
      </tr>
    </thead>
    <tbody>
      <?php
      // menampilkan semua data dengan looping, dlm setiap iterasi menampilkan data 1 baris.
      foreach ($results as $result) {
        $id = $result['Id'];
        $destination = $result['Destination'];
        $tanggal = $result['TravelDate'];
        $budget = $result['Budget'];
        $formattedBudget = number_format($budget, 0, '', '.'); 
        // params 2(jml desimal yg ingin ditampilkan di belakang angka asli(budget))
        // params 3(untuk pemisah angka desimal)
        // params 4(untuk pemisah ribuan(3digit))
        $transportasi = $result['Transportation'];
        $catatan = $result['Notes'];
        $status = $result['Status'];

        echo "<tr>";
        echo "<td>$destination</td>";
        echo "<td>$tanggal</td>";
        echo "<td>Rp $formattedBudget</td>";
        echo "<td>$transportasi</td>";
        echo "<td>$catatan</td>";
        echo "<td>$status</td>";
      ?>
        <td>
          <a href="updatePage.php?plan_id=<?php echo $id; ?>" id="update-plan">Update</a>
        </td>
        <td>
          <form action="proses/delete.php" method="post" class="delete-plan">
            <input type="hidden" name="plan_id" value="<?php echo $id ?>">
            <button type="submit" class="delete-plan" onclick="return confirm('Are you sure you want to delete this plan?')">Delete</>
          </form>
        </td>
      <?php
        echo "</tr>";} 
      ?>
    </tbody>
  </table>
</body>

</html>