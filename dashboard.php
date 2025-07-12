    <!-- php code  -->
<!-- $name = "";
$email = "";
$phone = "";
$message = "";

 Database connection settings
 $server   = "localhost";
 $username = "root";
 $password = "";
 $dbname   = "portfolio";

 Connect to database
 $con = mysqli_connect($server, $username, $password, $dbname);




 ✅ Otherwise, fetch all records to display
 $sql = "SELECT * FROM contactform";
 $result = $con->query($sql); -->


<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <meta name="robots" content="noindex, nofollow">
  <title>Dashboard</title>
  <!-- Tailwind CSS -->
  <script src="https://cdn.tailwindcss.com"></script>
  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" />
  <!-- Font Awesome -->
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" rel="stylesheet" />
  <link rel="stylesheet" href="style.css" />
</head>
<body>

<!-- Navigation -->
<?php
require('header.php')
?>

<!-- Clients detail -->
<div class="container-fluid mb-[80px]">
  <div class="row">
    <h1 class="text-center fs-2" style="margin-top: 100px;">Clients Details</h1>
    <div class="col-10 offset-1 mt-2">
      <table class="table table-bordered table align-middle">
        <thead>
          <tr>
            <td>id</td>
            <td>Clients Name</td>
            <td>Email Address</td>
            <td>Phone Number</td>
            <td>Message</td>
            <td>Projects</td>
            <td>Actions</td>
            <td>Delete</td>
          </tr>
        </thead>
        <tbody>
          <?php
          if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
              echo "<tr id='row" . $row["id"] . "'>";
              echo "<td>" . $row["id"] . "</td>";
              echo "<td>" . $row["name"] . "</td>";
              echo "<td>" . $row["email"] . "</td>";
              echo "<td>" . $row["phone"] . "</td>";
              echo "<td>" . $row["message"] . "</td>";
              echo "<td><span class='status' id='status-" . $row["id"] . "'>Pending</span></td>";
              echo "<td><button class='btn btn-success' onclick='markCompleted(" . $row["id"] . ")'>Done</button></td>";
              echo "<td><button class='btn btn-danger' onclick='deleteRow(" . $row["id"] . ")' >Delete</button></td>";
              echo "</tr>";
            }
          } else {
            echo "<tr><td colspan='8'>No records found</td></tr>";
          }
          $con->close();
          ?>
        </tbody>
      </table>
    </div>
  </div>
</div>

<!-- Footer -->
  <?php
  require('footer.php')
  ?>

<!-- Bootstrap Bundle JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
<script src="home.js"></script>

<script>
// ✅ Mark as Completed
function markCompleted(id) {
  const statusSpan = document.getElementById('status-' + id);
  if (statusSpan) {
    statusSpan.textContent = 'Completed';
  }
}

// ✅ Delete row via AJAX to this same page
function deleteRow(id) {
  if (confirm('Are you sure you want to delete this record?')) {
    fetch('dashboard.php', {
      method: 'POST',
      headers: {'Content-Type': 'application/x-www-form-urlencoded'},
      body: 'id=' + id
    })
    .then(response => response.text())
    .then(data => {
      if (data.trim() === 'success') {
        // Remove row from table instantly without reload
        const row = document.getElementById('row-' + id);
        if (row) row.remove();
      } else {
        alert('Error deleting record.');
      }
    })
    .catch(error => {
      console.error('Error:', error);
      alert('Error deleting record.');
    });
  }
}
</script>

</body>
</html>
