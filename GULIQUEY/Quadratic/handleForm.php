<?php 
session_start(); // Start the session to store session variables

if (isset($_POST['submitBtn'])) {
	// Get the values of a, b, and c from the form
	$a = $_POST['a']; 
	$b = $_POST['b']; 
	$c = $_POST['c']; // Consistent variable names

	$ans = ($b ** 2) - (4 * $a * $c); 
	$_SESSION['ans'] = $ans; // Store the result in session

	// Redirect back to answer.php
	header('Location: answer.php');
	exit();
}
?>
