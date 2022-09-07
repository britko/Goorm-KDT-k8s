<html>
<head>
    <title>Car Rental | Rent</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
</head>
<body>
 	<?php include 'menu.php'; ?>
    <form method="post" action="rent_insert.php">
		<?php
			echo "<input type='hidden' name='car_id' value='".$_GET['car_id']."'>";
			echo "<input type='hidden' name='user_id' value='".$_GET['user_id']."'>";
		?>
		<label for="name">Name:</label>
		<input class="form-control" type="text" name="name" id="name" placeholder="이름" value=<?php session_start(); echo $_SESSION['login']; ?> aria-label="default input example">
        <br>
        <label for="phone">Phone(010-0000-0000):</label>
        <input class="form-control" type="tel" name="phone" id="phone" placeholder="전화번호" pattern="[0-9]{3}-[0-9]{4}-[0-9]{4}" aria-label="default input example">
        <br>
        <label for="age">Age:</label>
        <input class="form-control" type="text" name="age" id="age" placeholder="나이" aria-label="default input example">
        <br>
		<label for="rental_date">대여일:</label>
        <input class="form-control" type="date" name="rental_date" id="rental_date" aria-label="default input example">
        <br>
		<label for="return_date">반납일:</label>
        <input class="form-control" type="date" name="return_date" id="return_date" aria-label="default input example">
        <br><br>
		<button class="btn btn-primary" type="submit">예약</button>
    </form>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
</body>
</html>
