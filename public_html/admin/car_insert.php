<html>
<body>
<?php
	include 'dbconn.php';

	$category = $_POST['category'];
	$model = $_POST['model'];
	$cost = $_POST['cost'];

	$sql = "INSERT INTO car(model, cost, category) VALUES('$model', $cost, '$category');";

	$result = mysqli_query($conn, $sql);

	if($result === false) {
			echo mysqli_error($conn);
	}
	else {
			echo "<script>location.href = 'car_list.php';</script>";
	}

	mysqli_close($conn);
?>
</body>
</html>
