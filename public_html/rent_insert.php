<html>
<body>
<?php
	include 'dbconn.php';

	$car_id = $_POST['car_id'];
	$user_id = $_POST['user_id'];
	$name = $_POST['name'];
	$phone = $_POST['phone'];
	$age = $_POST['age'];
	$rental_date = $_POST['rental_date'];
	$return_date = $_POST['return_date'];

	$sql = "INSERT INTO rent(name, phone, age, car_id, user_id, rental_date, return_date) VALUES('$name', '$phone', $age, $car_id, $user_id, '$rental_date', '$return_date');";

	$result = mysqli_query($conn, $sql);

	if($result === false) {
			echo mysqli_error($conn);
	}
	else {
			echo "<script>location.href = 'rent_success.php';</script>";
	}

	mysqli_close($conn);
?>
</body>
</html>
