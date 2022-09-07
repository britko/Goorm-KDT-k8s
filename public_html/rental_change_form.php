<html>
<head>
    <title>Car Rental | Rental Change</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
</head>
<body>
 	<?php include 'menu.php'; ?>
    <form method="post" action="rental_change.php">
		<?php
			include('dbconn.php');
			session_start();

			$rent_sql = "SELECT * FROM rent WHERE id=".$_GET['id'];
			$rent_data = mysqli_query($conn, $rent_sql);
			$rent_row = mysqli_fetch_array($rent_data);
			
			$car_sql = "SELECT * FROM car WHERE id=$rent_row[4]";
			$car_data = mysqli_query($conn, $car_sql);
			$car_row = mysqli_fetch_array($car_data);


			echo "<input type='hidden' name='id' value='".$_GET['id']."'>";
			echo "<input type='hidden' name='category' value='".$car_row[3]."'>";
			echo "<input type='hidden' name='model' value='".$car_row[1]."'>";
			echo "<input type='hidden' name='cost' value='".$car_row[2]."'>";
			echo "<p class='h5'>제조사: $car_row[3]</p><br>";
			echo "<p class='h5'>모델: $car_row[1]</p><br>";
			echo "<p class='h5'>가격: $car_row[2]</p><br>";
			echo "<label for='name'>예약자 이름: </label>";
			echo "<input class='form-control' type='text' name='name' id='name' value='$rent_row[1]' placeholder='예약자 이름'><br>";
			echo "<label for='phone'>전화번호: </label>";
			echo "<input class='form-control' type='tel' name='phone' id='phone' value='$rent_row[2]' placeholder='전화번호(010-0000-0000)'><br>";
			echo "<label for='rental_date'>대여일: </label>";
			echo "<input class='form-control' type='date' name='rental_date' id='rental_date' value='$rent_row[7]'><br>";
			echo "<label for='return_date'>반납일: </label>";
			echo "<input class='form-control' type='date' name='return_date' id='return_date' value='$rent_row[8]'>";

		?>
        <br><br>
		<button class="btn btn-primary" type="submit">예약 변경</button>
    </form>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
</body>
</html>
