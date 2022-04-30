<?php
    include '../partials/header.php';
    if (!isset($_POST['txtUsername'])){
        die('');
    }
     
    include '../partials/mysqli_connect.php';
          
          
    $username   = addslashes($_POST['txtUsername']);
    $password   = addslashes($_POST['txtPassword']);
    $email      = addslashes($_POST['txtEmail']);
    
          
   
          
        
        $password = md5($password);
        echo "<p>$password </p>";
          
    if (mysqli_num_rows(mysqli_query($dbc,"SELECT username FROM account WHERE username='$username'")) > 0){
        echo '<div class="row container-fluid h-50 ">
		<div class="col d-flex justify-content-center shadow h-50" style="background-color:#F8F8F8; border-radius:30px; margin-top: 100px; margin-bottom:100px;"  >
	<h1 >
		Tên đăng nhập đã có người dùng <a href="register.php">Tr</a>
	</h1>
			
		</div>
	</div>';
    include '../partials/footer.php';
        exit;
    }
          

    if (mysqli_num_rows(mysqli_query($dbc,"SELECT Mail FROM account WHERE Mail='$email'")) > 0)
    {
        echo '<div class="row container-fluid h-50 ">
		<div class="col d-flex justify-content-center shadow h-50" style="background-color:#F8F8F8; border-radius:30px; margin-top: 100px; margin-bottom:100px;"  >
	<h1 >
		Email này đã có người dùng. <a href="register.php">Trở lại</a>
	</h1>
			
		</div>
	</div>';
    include '../partials/footer.php';
        exit;
    }
    
          
    @$addmember = mysqli_query($dbc,
    "INSERT INTO account (Username, Pass, Mail, Adminn)
VALUES ('$username', '$password', '$email' , '1')");
    if ($addmember){

    
    
        echo '<div class="row container-fluid h-50 ">
		<div class="col d-flex justify-content-center shadow h-50" style="background-color:#F8F8F8; border-radius:30px; margin-top: 100px; margin-bottom:100px;"  >
	<h1 >
		Đăng ký thành công. <a href="login.php">Đăng nhập</a>
	</h1>
			
		</div>
	</div>';
    include '../partials/footer.php';
    }
    else
        echo "Có lỗi xảy ra trong quá trình đăng ký. <a href='register.php'>Thử lại</a>";
?>