<?php
session_start(); // Start the session to access the stored data

if (isset($_SESSION['total']) && isset($_SESSION['cash']) && isset($_SESSION['change']) && isset($_SESSION['time'])) {
    $total = $_SESSION['total'];
    $cash = $_SESSION['cash'];
    $change = $_SESSION['change'];
    $time = $_SESSION['time'];
} else {
    echo "No transaction details found.";
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Receipt</title>
</head>
<body>
    <center><h1>RECEIPT</h1></center>
    
    <h1><p>Total Price: <?php echo $total; ?></p></h1>
    <h1><p>You Paid: <?php echo $cash; ?></p></h1>
    <h1><p>CHANGE: <?php echo $change; ?></p></h1>
    <h1><p><?php echo $time; ?></p></h1>

    <a href="index.php">Go Back</a>
</body>
</html>
