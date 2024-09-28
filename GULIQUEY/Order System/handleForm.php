<?php
session_start(); // Start the session to store variables

if (isset($_POST['order']) && isset($_POST['quantity']) && isset($_POST['cash'])) {
    $order = $_POST['order'];
    $quantity = $_POST['quantity'];
    $cash = $_POST['cash'];

    // Set the prices for each order
    $prices = [
        'burger' => 50,
        'fries' => 75,
        'steak' => 150
    ];

    // Calculate total cost
    $total = $prices[$order] * $quantity;

    // Check if the user has enough cash
    if ($cash >= $total) {
        $change = $cash - $total;

        // Store details in session to display in receipt.php
        $_SESSION['total'] = $total;
        $_SESSION['cash'] = $cash;
        $_SESSION['change'] = $change;
        $_SESSION['time'] = date('m/d/Y h:i:s a', time());

        // Redirect to receipt.php
        header('Location: receipt.php');
        exit();
    } else {
        // If cash is insufficient, display an error message
        echo "Insufficient cash. You need " . ($total - $cash) . " more.";
    }
} else {
    echo "Invalid input. Please go back and fill in the form.";
}
?>