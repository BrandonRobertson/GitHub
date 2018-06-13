<?php
$firstName = $_POST['firstName']
$lastName = $_POST['lastName']
$address1 = $_POST['address1']
$address2 = $_POST['address2']
$city = $_POST['city']
$state = $_POST['state']
$zip = $_POST['zip']
$country = $_POST['country']
$date = $_POST[getdate()]

if (!empty($firstName) || !empty($lastName) || !empty($address1) || !empty($city) || !empty($state) || !empty($zip) || !empty($country)){
	$host = "localhost";
	$dbUsername = "root";
	$dbPassword = "";
	$dbName = "registration";

	$conn = new mysqli($host, $dbUsername, $dbPassword, $dbName);

	if (mysqli_connect_error()) {
		die('Connect Error('. mysqli_connect_errno().')'. mysqli_connect_error())
	} else {
		$SELECT = "SELECT date From register Where date = ? Limit 1";
		$INSERT = "INSERT Into register (firstName, lastName, address1, address2, city, state, zip, country, date) values(?, ?, ?, ?, ?, ?, ?, ?, ?)";

		$stmt = $conn->prepare($SELECT);
		$stmt->bind_param("s", $date);
		$stmt->execute();
		$stmt->bind_result($dot);
		$stmt->store_result();
		$rnum = $stmt->num_rows;

		if($rnum==0) {
			$stmt->close();

			$stmt = $conn->prepare($INSERT);
			$stmt->bindd_param("ssssssiss", $firstName, $lastName, $address1, $address2, $city, $state, $zip, $country, $date);
			$statement->execute();
			echo "New record inserted sucessfully";
		} else { 
			echo "First Name, Last Name, Address, City, State, Zip, and Country are all required fields.";
			die();
		}
	}
}
?>