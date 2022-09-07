<html>
<body>
	<?php
		include 'dbconn.php';

		$user_id = $_POST['user_id'];
		$pw = $_POST['pw'];
		$name = $_POST['name'];
		$role = $_POST['role'];

		$sql = "INSERT INTO user(user_id, password, name, role) VALUES('$user_id', '$pw', '$name', '$role');";

		$result = mysqli_query($conn, $sql);

		if($result === false) {
				echo mysqli_error($conn);
		}
		else {
				echo "<script>location.href = 'index.php';</script>";
		}
		mysqli_close($conn);
	?>
</body>
</html>
