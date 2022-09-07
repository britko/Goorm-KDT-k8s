<html>
<body>
<?php
	include 'dbconn.php';

	$title = $_POST['title'];
	$content = $_POST['content'];
	$uid = $_POST['uid'];

	$sql = "INSERT INTO qna(title, content, uid) VALUES('$title', '$content', $uid);";

	$result = mysqli_query($conn, $sql);

	if($result === false) {
			echo mysqli_error($conn);
	}
	else {
			echo "<script>location.href = 'qna.php';</script>";
	}

	mysqli_close($conn);
?>
</body>
</html>
