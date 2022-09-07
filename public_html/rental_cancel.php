<html>
<body>
<?php
	include 'dbconn.php';

	$sql = "DELETE FROM rent WHERE id='".$_GET['id']."'";

	$result = mysqli_query($conn, $sql);

	if(!$result) {
			echo mysqli_error($conn);
	}
	else {
			echo "<script>location.href = 'rent_history.php';</script>";
	}

	mysqli_close($conn);

?>
</body>
</html>
