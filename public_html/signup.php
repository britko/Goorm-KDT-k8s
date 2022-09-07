<html>
<head>
	<title>Car Rental | Signup</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
</head>
<body>
	<?php include 'menu.php'; ?>
	<form method="post" action="add_user.php">
		<label for="uid">ID</label>
		<input type="text" name="user_id" id="uid" placeholder="ID">
		<br>
		<label for="pw">Password</label>
		<input type="password" name="pw" id="pw" placeholder="비밀번호">
		<br>
		<label for="name">Name</label>
		<input type="text" name="name" id="name" placeholder="이름">
		<br>
		<input type="hidden" name="role" value="customer">
		<br><br>
		<input type="submit" value="가입">
	</form>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
</body>
