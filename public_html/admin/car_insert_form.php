<html>
<head>
    <title>Car Rental(Admin) | Car Insert</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
</head>
<body>
 	<?php include 'menu.php'; ?>
    <form method="post" action="/admin/car_insert.php">
		<label for="category">제조사</label>
		<select class="form-select" aria-label="Default select example" name="category" id="category">
  			<option selected>제조사</option>
  			<option value="hyundai">현대</option>
  			<option value="kia">기아</option>
  			<option value="genesis">제네시스</option>
  			<option value="chevrolet">쉐보레</option>
  			<option value="renault">르노</option>
  			<option value="benz">벤츠</option>
  			<option value="bmw">BMW</option>
  			<option value="audi">아우디</option>
  			<option value="ford">포드</option>
  			<option value="porsche">포르쉐</option>
  			<option value="jeep">지프</option>
  			<option value="volvo">볼보</option>
		</select>
        <br>

		<label for="model">Model:</label>
		<input class="form-control" type="text" name="model" id="model" placeholder="모델" aria-label="default input example">
        <br>
        <label for="cost">Cost:</label>
		<input class="form-control" type="text" name="cost" id="cost" placeholder="가격" aria-label="default input example">
        <br><br>
		<button class="btn btn-primary" type="submit">등록</button>
    </form>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
</body>
</html>

