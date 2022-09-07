<?php
	session_start();
	if(isset($_SESSION['login'])) {
			$ch_menu = "<a class='nav-link' href='rent_history.php'>예약내역</a><a class='nav-link' href='logout.php'>로그아웃</a>";
			$welcome = $_SESSION['login']."님, 안녕하세요!";
			if($_SESSION['role'] == 'admin') {
					$ch_menu = $ch_menu."<a class='nav-link' href='/admin/car_list.php'>관리자 페이지</a>";
			}
	}
	else {
			$ch_menu = "<a class='nav-link' href='login.php'>로그인</a>";
	}
?>
<a href="index.php" style="text-decoration: none;"><h1>Car Rental</h1></a>
<nav class="navbar navbar-expand-lg bg-light">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">메뉴</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
      <div class="navbar-nav">
        <a class="nav-link" href="car_list.php">렌트</a>
        <a class="nav-link" href="qna.php">Q&A</a>
		<?php echo $ch_menu; ?>
      </div>
    </div>
		<p style="color: blue;" class="navbar-text"><?php echo $welcome ?></p>
  </div>
</nav>
