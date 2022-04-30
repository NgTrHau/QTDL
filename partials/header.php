
<?php

if (session_status() === PHP_SESSION_NONE) {
	session_start();
}

include __DIR__ . '/../functions.php'; ?><!doctype html>
<!DOCTYPE html>

<html lang="en">
<head>
	<meta charset="utf-8">
	<link href="https://i.imgur.com/2gF16Sg.png" rel="icon" type="image/vnd.microsoft.icon">
	<link rel="stylesheet" href="css/test.css">
	<link rel="stylesheet" href="css/footer.css">
	<link rel="stylesheet" href="css/index.css">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/6.1.1/css/font-awesome.min.css">
	<script src="https://kit.fontawesome.com/9ba9acccf1.js" crossorigin="anonymous"></script>

	<script type="text/javascript" src="js/header.js"></script>
	<script type="text/javascript" src="js/footer.js"></script>
	<title><?php
	if (defined('TITLE')) {
		echo TITLE;
	} else {
		echo 'Trang Chủ';
	}
	?></title>
	<link rel="stylesheet" href="css/index.css">
</head>
<body>
	<header>
	<nav class="navbar px-lg-5 navbar-expand-lg navbar-dark ">
  	<div class="container-fluid">
    <a class="navbar-brand" href="#"><img src="https://i.imgur.com/Mhe3S7M.png" alt="logo" style="height:30px; width: 30px;"></a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="index.php">Trang Chủ</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link  active" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Hãng
          </a>
          <ul class="dropdown-menu shadow-sm" aria-labelledby="navbarDropdown">
            <li><a class="dropdown-item" href="#">Apple</a></li>
            <li><a class="dropdown-item" href="#">Samsung</a></li>
            <li><a class="dropdown-item" href="#">Huawei</a></li>
            <li><a class="dropdown-item" href="#">Oppo</a></li>
          </ul>
        </li>
		<li class="nav-item">
          <a class="nav-link active" aria-current="page" href="news.php">Tin Tức</a>
        </li>
      </ul>
	  <form class="d-flex mx-1">
        <input class="form-control me-2 search" type="search" placeholder="Tìm Kiếm" aria-label="Search">
        <a class="btn" type="submit"><i class="fa-solid fa-magnifying-glass iconheader"></i></a>
      </form>
	  <div class="d-flex mx-1">
	  <?php
		
		

			echo '	<div class="dropdown">
			<a class="btn colorwhite"  type="button" id="dropdownMenuButton0" data-bs-toggle="dropdown" aria-expanded="false">
			<i class="fa-solid fa-bell iconheader"></i> <span class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-danger">
			99+</span></a>';
		if (isset($_SESSION['username']) && $_SESSION['username']){	
			echo '
			<ul class="dropdown-menu shadow-sm" aria-labelledby="dropdownMenuButton0">
				<li><a class="dropdown-item" href="#">Đã đặt hàng thành công</a></li>
				<li><a class="dropdown-item" href="#">Đơn hàng đã nhận</a></li>
			</ul>
			';
			
		}
			echo'</div>';
		?>
	  </div>
	  <div class="d-flex mx-1">
		<?php
			
			if (isset($_SESSION['username']) && $_SESSION['username']){
				echo '<div class="dropdown">
				<a type="button" class="btn  position-relative" id="dropdownMenuCart" data-bs-toggle="dropdown" aria-expanded="false">
				<i class="fa fa-shopping-cart iconheader" aria-hidden="true"></i>
				  <span class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-danger">
					  99+
					 
				  </span>
			  </a>
			  <ul class="dropdown-menu shadow-sm" aria-labelledby="dropdownMenuCart">
			  <li><a type="button" class="btn  position-relative" href="cart.php"><i class="fa-solid fa-circle-info"></i></a></li>
			  </ul>
			</div>';
				
				
			}
			
			?>
	  		
	  </div>
	  <div class="d-flex  mx-2">
		
	  <?php
		
		if (isset($_SESSION['username']) && $_SESSION['username']){

			echo '	<div class="dropdown">
			<a class="btn colorwhite"  type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
				
				 ' ;
			echo '<i class="fa-solid fa-user iconheader"></i> '.$_SESSION['username'];
				
			echo '</a>
			<ul class="dropdown-menu shadow-sm" aria-labelledby="dropdownMenuButton1">
				<li><a class="dropdown-item" href="#">Thông tin <i class="fa-solid fa-circle-info"></i></a></li>';
			if (is_administrator()) {
					
					echo'<li><a class="dropdown-item" href="admin_products.php">Sản phẩm <i class="fa-solid fa-mobile-screen"></i></a></li>';
					
				}
			else {
			echo'<li><a class="dropdown-item" href="#">Đơn hàng <i class="fa-solid fa-chart-simple"></i></a></li>'; }
			echo  '<li><a class="dropdown-item" href="logout.php">Đăng xuất <i class="fa-solid fa-arrow-right-from-bracket"></i></a></li>
			</ul>
		</div>';
		
		
			
		}
		else{
			echo '<a class="btn colorwhite" type="button" href="login.php">Đăng nhập</a>';
		}
		?>
	  		</div>
      
    		</div>
  			</div>
		</nav>
		<?php
		
		?>
	</header>
	<main>