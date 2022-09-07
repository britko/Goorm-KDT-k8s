<?php

	session_start ();
	include("dbconn.php"); 

	if($_POST['id']) {
		$id = $_POST['id'];
		$pw = $_POST['pw'];

		$sql = mysqli_query($conn, "SELECT * FROM user WHERE user_id='$id'AND password='$pw'");
		$result = mysqli_fetch_array($sql);

		if($result) {
			$_SESSION['id'] = $result['id'];
			$_SESSION['login'] = $result['name'];
			$_SESSION['role'] = $result['role'];
			header("location:index.php");
		}
		else {
			header("location:login.php?err=1");
		}
	}
?>
