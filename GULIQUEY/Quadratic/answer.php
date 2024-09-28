<?php 
session_start(); // Start the session to access session variables

if (isset($_SESSION['ans'])) {
	$answer = $_SESSION['ans'];
	echo "<h1>The answer is: " . $answer . "</h1>";
} else {
	$answer = "No calculation found.";
	echo $answer;
}
?>