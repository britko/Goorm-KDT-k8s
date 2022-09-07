<html>
<body>
<?php
	include 'dbconn.php';

	$sql = "DELETE FROM car WHERE id='".$_GET['id']."'";

	$result = mysqli_query($conn, $sql);

	if(!$result) {
			echo mysqli_error($conn);
	}
	else {
			echo "<script>location.href = 'car_list.php';</script>";
	}

	mysqli_close($conn);

?>
</body>
</html>
