<html>
<body>
<?php
	include 'dbconn.php';

	$id = $_POST['id'];
	$name = $_POST['name'];
	$phone = $_POST['phone'];
	$rental_date = $_POST['rental_date'];
	$return_date = $_POST['return_date'];

	$sql = "UPDATE rent SET name='$name', phone='$phone', rental_date='$rental_date', return_date='$return_date' WHERE id=$id;";

	$result = mysqli_query($conn, $sql);

	if($result === false) {
			echo mysqli_error($conn);
	}
	else {
			echo "<script>location.href = 'rent_history.php';</script>";
	}

	mysqli_close($conn);
?>
</body>
</html>
