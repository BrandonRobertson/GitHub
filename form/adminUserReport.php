<?php
	include_once 'dbh.inc.php';
?>

<!DOCTYPE html>
<html>
<head>
	<title>AdminUser Report</title>
</head>
<body>
	<table>
		<tr>
			<th>First Name</th>
			<th>Last Name</th>
			<th>Address1</th>
			<th>Address2</th>
			<th>City</th>
			<th>State</th>
			<th>Zip</th>
			<th>Country</th>
			<th>Date</th>
		</tr>
	</table>

<?php
	$sql = "SELECT * FROM register ORDER by date DESC";
	$result = mysqli_query($conn, $sql);
	$resultCheck = mysqli_num_rows($result);
	if ($resultCheck > 0) {
		while ($row = mysqli_fetch_assoc($result)) {
			echo "<tr><td>". $row["firstName"] ."	". $row["lastName"] ."	". $row["address1"] ."	". $row["address2"] ."	". $row["city"] ."	". $row["state"] ."	". $row["zip"] ."	". $row["country"] ."	". $row["date"] ."	" . "<br>";
		}
		echo "</table>";
	} else {
			echo "0 results";
		}
?>

</body>
</html>