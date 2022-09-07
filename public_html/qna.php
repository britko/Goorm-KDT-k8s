<!DOCTYPE html>
<html>
	<head>
		<title>Car Rental | Q&A</title>
		<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
	</head>
	<body>
		<?php
			include 'dbconn.php';
			include 'menu.php';

			session_start();
			if(isset($_SESSION['login'])) {
					echo "<a href=\"qna_insert_form.php?id=".$_SESSION['id']."\" style=\"text-decoration: none;\">Q&A 작성</a>";
			}
			else {
					echo "<a href=\"login.php\" style=\"text-decoration: none;\">Q&A 작성</a>";
			}

			$sql = 'SELECT * FROM qna;';
			$data = mysqli_query($conn, $sql);
			$total_rows = mysqli_num_rows($data);

			echo "<table class=\"table\" width=\"80%\"><thead>";
			echo "<tr><th scope=\"col\">#</th><th scope=\"col\">제목</th><th scope=\"col\">내용</th><th scope=\"col\">작성자</th><th scope=\"col\">작성 날짜</th></tr></thead><tbody class=\"table-group-divider\">";

			for($i = 0; $i < $total_rows; $i++) {
				$row = mysqli_fetch_array($data);
				$user_sql = "SELECT user_id FROM user WHERE id=$row[3]";
				$user_data = mysqli_query($conn, $user_sql);
				$user_row = mysqli_fetch_array($user_data);

				echo "<tr>";
				echo "<td scope=\"row\">$row[0]</td><td>$row[1]</td><td>$row[2]</td><td>$user_row[0]</td><td>$row[4]</td>";
				echo "</tr>";
			}
			echo "</tbody></table>";

			echo "total: $total_rows";
		
			mysqli_close($conn);
		?>

		<script>
			function update_car(id) {
				location.href = 'car_update_form.php?id=' + id + '';
				return true;
			}

			function delete_car(id) {
				if(confirm("Do you wnat Delete?")) {
					location.href = 'car_delete.php?id=' + id + '';
					return true;
				}
			}
		</script>

    	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
	</body>
</html>
