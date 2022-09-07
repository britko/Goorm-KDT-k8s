<html>
<body>
<?php
	include 'dbconn.php';

	$id = $_POST['id'];
	$category = $_POST['category'];
	$model = $_POST['model'];
	$cost = $_POST['cost'];

	$sql = "UPDATE car SET category='$category', model='$model', cost=$cost WHERE id=$id;";

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
