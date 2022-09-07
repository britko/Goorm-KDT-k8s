<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Car Rental | Login</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
</head>
<body>
	<?php include 'menu.php' ?>
	<form method="post" action="loginprocess.php" class="loginForm">
		<h2>Login</h2>
		<div class="idForm">
			<input type="text" name="id" calss="id" placeholder="Username">
		</div>
		<div class="passForm">
			<input type="password" name="pw" class="pw" placeholder="Password">
		</div>
		<button type="submit" class="btn" onclick"button()">
			Login
		</button>
		<div class="buttonText">
			<a href="signup.php" style="text-decoration: none;">Sign up</a>
		</div>
		<br>
		<?php
			if(isset($_REQUEST['err']))
				$msg = "Invalid ID or Password";
		?>
		<p style="color:red;">
		<?php 
			if(isset($msg)) {
				echo $msg;
			}
		?>
		</p>
	</form>
	
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
</body>
</html>
