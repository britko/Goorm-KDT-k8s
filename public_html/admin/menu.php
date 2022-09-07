<?php
	session_start();
	if(isset($_SESSION['login'])) {
			$welcome = $_SESSION['login']."님, 안녕하세요!";
	}
?>
<a href="/index.php" style="text-decoration: none;"><h1>Car Rental</h1></a>
<nav class="navbar navbar-expand-lg bg-light">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">메뉴</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
      <div class="navbar-nav">
        <a class="nav-link" href="/admin/car_list.php">차량 관리</a>
        <a class="nav-link" href="/admin/car_insert_form.php">차량 등록</a>
      </div>
    </div>
		<p style="color: blue;" class="navbar-text"><?php echo $welcome ?></p>
  </div>
</nav>
