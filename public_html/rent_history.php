<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Car Rental | Rental List</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
</head>
<body>
	<?php
		include 'dbconn.php';
		include 'menu.php';
		session_start();
		
		$rent_sql = "SELECT * FROM rent WHERE user_id=".$_SESSION['id']." ORDER BY rental_date;";
		$rent_data = mysqli_query($conn, $rent_sql);
		$total_rows = mysqli_num_rows($rent_data);

		echo "<table class=\"table\" width=\"80%\"><thead>";
		echo "<tr><th scope=\"col\">제조사</th><th scope=\"col\">모델</th><th scope=\"col\">가격</th><th scope=\"col\">예약자 이름</th><th scope=\"col\">대여 일시</th><th scope=\"col\">반납 일시</th><th scope=\"col\">예약 변경</th><th scope=\"col\">예약 취소</th></tr></thead><tbody class=\"table-group-divider\">";

		for($i = 0; $i < $total_rows; $i++) {
			$rent_row = mysqli_fetch_array($rent_data);

			$car_sql = "SELECT * FROM car WHERE id=$rent_row[4];";
			$car_data = mysqli_query($conn, $car_sql);
			$car_row = mysqli_fetch_array($car_data);

			echo "<tr>";
			echo "<td scope=\"row\">$car_row[3]</td><td>$car_row[1]</td><td>$car_row[2]</td><td>$rent_row[1]</td><td>$rent_row[7]</td><td>$rent_row[8]</td><td><input type='button' value='예약 변경' onclick='change_rental($rent_row[0]);'></td><td><input type='button' value='예약 취소' onclick='cancel_rental($rent_row[0]);'></td>";
			echo "</tr>";
		}
		echo "</tbody></table>";

		echo "total: $total_rows";
		
		mysqli_close($conn);
	?>
	<script>
			function change_rental(id) {
					if(confirm("예약을 변경하시겠습니까?")) {
						location.href = 'rental_change_form.php?id=' + id;
						return true;
					}
			}
			function cancel_rental(id) {
					if(confirm("예약을 취소하시겠습니까?")) {
						location.href = 'rental_cancel.php?id=' + id;
						return true;
					}
			}
	</script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
</body>
</html>
