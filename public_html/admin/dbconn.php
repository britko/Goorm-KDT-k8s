<?php
	$ip = '127.0.0.1';
	$id = 'user1';
	$pw = '1234';
	$db = 'mydb';
	$conn = mysqli_connect($ip, $id, $pw, $db);
	
	if(!$conn) {
			echo mysqli_connect_error();
	}
?>
