<?php 

session_start();

// Check if submitBtn exists
if(isset($_POST['submitBtn'])) {

	// Check if the user is already logged in
	if(isset($_SESSION['firstName'])) {
		// Set a message saying the user is already logged in
		$_SESSION['message'] = $_SESSION['firstName'] . " is already logged in. Wait for him to log out first";
	} else {
		// Get the first name from index.php
		$firstName = $_POST['firstName'];

		// Get the password from the input field
		$password = md5($_POST['password']);

		// Set the session variables
		$_SESSION['firstName'] = $firstName;
		$_SESSION['password'] = $password;
	}

	// Go back to index.php
	header('Location: index.php');
	exit();
}
?>
