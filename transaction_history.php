<?php
@include 'config.php';

// Retrieve transaction history records from the database
$transaction_history_query = mysqli_query($conn, "SELECT * FROM `transaction_history` ORDER BY `timestamp` DESC");

?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Transaction History</title>

   <!-- Custom CSS file link -->
   <link rel="stylesheet" href="transaction_history.css">

</head>
<body>

<?php include 'header.php'; ?>

<div class="container">

   <h1>Transaction History</h1>

   <table>
      <thead>
         <tr>
            <th>Transaction ID</th>
            <th>Name</th>
            <th>Number</th>
            <th>Email</th>
            <th>Total Products</th>
            <th>Total Price</th>
            <th>Timestamp</th>
         </tr>
      </thead>
      <tbody>
         <?php
         while ($row = mysqli_fetch_assoc($transaction_history_query)) {
            echo "<tr>";
            echo "<td>{$row['id']}</td>";
            echo "<td>{$row['name']}</td>";
            echo "<td>{$row['number']}</td>";
            echo "<td>{$row['email']}</td>";
            echo "<td>{$row['total_products']}</td>";
            echo "<td>{$row['total_price']}</td>";
            echo "<td>{$row['timestamp']}</td>";
            echo "</tr>";
         }
         ?>
      </tbody>
   </table>

</div>

</body>
</html>
