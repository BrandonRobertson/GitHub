<?php
	include_once 'dbh.inc.php';

	$firstName = $_POST['firstName'];
	$lastName = $_POST['lastName'];
	$address1 = $_POST['address1'];
	$address2 = $_POST['address2'];
	$city = $_POST['city'];
	$state = $_POST['state'];
	$zip = $_POST['zip'];
	$country = $_POST['country'];

	$sql = "INSERT INTO register (firstName, lastName, address1, address2, city, state, zip, country, date) VALUES ('$firstName', '$lastName', '$address1', '$address2', '$city', '$state', '$zip', '$country', NOW())";
		mysqli_query($conn, $sql);

		header("Location: success.html");

?>