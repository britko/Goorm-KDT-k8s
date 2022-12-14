<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Car Rental | Car List</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
</head>
<body>
	<?php
		include 'dbconn.php';
		include 'menu.php';
		session_start();
		
		$selectsql = 'SELECT * FROM car;';

		$data = mysqli_query($conn, $selectsql);
		$total_rows = mysqli_num_rows($data);

		echo "<table class=\"table\" width=\"80%\"><thead>";
		echo "<tr><th scope=\"col\">#</th><th scope=\"col\">제조사</th><th scope=\"col\">모델</th><th scope=\"col\">가격</th><th scope=\"col\">예약</th></tr></thead><tbody class=\"table-group-divider\">";

		for($i = 0; $i < $total_rows; $i++) {
			$row = mysqli_fetch_array($data);
			if(isset($_SESSION['login'])) {
				$rent_btn = "<td><input type='button' value='예약' onclick='rent_car(".$row[0].", ".$_SESSION['id'].", \"".$row[1]."\")'></td>";
			}
			else {
				$rent_btn = "<td><input type='button' value='예약' onclick='location.href=\"login.php\"'></td>";

			}
	
			echo "<tr>";
			echo "<td scope=\"row\">$row[0]</td><td>$row[3]</td><td>$row[1]</td><td>$row[2]</td>$rent_btn";
			echo "</tr>";
		}
		echo "</tbody></table>";

		echo "total: $total_rows";
		
		mysqli_close($conn);
	?>
	<script>
			function rent_car(car_id, user_id, model) {
					if(confirm("[" + model + "] 차량을 예약하시겠습니까?")) {
						location.href = 'rent_form.php?car_id=' + car_id + '&user_id=' + user_id;
						return true;
					}
			}
	</script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
</body>
</html>
