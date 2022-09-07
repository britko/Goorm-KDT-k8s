<html>
<head>
    <title>Car Rental | Q&A Insert</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
</head>
<body>
 	<?php include 'menu.php'; ?>
    <form method="post" action="qna_insert.php">
		<?php echo "<input type='hidden' name='uid' value='".$_GET['id']."'>"; ?>
		<label for="title">Title:</label>
		<input class="form-control" type="text" name="title" id="title" placeholder="제목" aria-label="default input example">
        <br>
        <label for="content">Content:</label>
		<textarea class="form-control" name="content" id="content" rows="7" ></textarea>
        <br><br>
		<button class="btn btn-primary" type="submit">등록</button>
    </form>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
</body>
</html>

