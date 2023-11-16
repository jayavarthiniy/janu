<?php
	$conn = new mysqli('localhost', 'root', '', 'it_management');
	if ($conn->connect_error)
		die("Error at connecting $conn->connect_error");
	if (!empty($_POST)) {
		$name = $_POST['name'];
		$gender = $_POST['gender'];
		$role = $_POST['role'];
		$phone = $_POST['phone'];
		$query = "insert into employee (name, gender, role, phone) values ('$name', '$gender', '$role', '$phone')";
		$stmt = $conn->prepare($query);
		$stmt->execute();
		echo 'Inserted successfully<br><a href="index.php">Go to index</a>';
	}
?>
