<?php
define('TITLE', 'Đăng Nhập');

include '../partials/header.php';

if (isset($_POST['dangnhap'])) 
{

    include '../partials/mysqli_connect.php';
     

    $username = addslashes($_POST['txtUsername']);
    $password = addslashes($_POST['txtPassword']);
    $loggedin = false;

    
     
    $password = md5($password);
     
    $query = mysqli_query($dbc,"SELECT username, Pass FROM account WHERE username='$username'");
    if (mysqli_num_rows($query) == 0) {
        echo '<div class="row container-fluid h-50 ">
		<div class="col d-flex justify-content-center shadow h-50" style="background-color:#F8F8F8; border-radius:30px; margin-top: 100px; margin-bottom:100px;"  >
	<h1 >
		Tên đăng nhập không tồn tại. 
	</h1>
			
		</div>
	</div>';
        exit;
    }
     
 
    $row = mysqli_fetch_array($query);
     
    if ($password != $row['Pass']) {
        echo '<div class="row container-fluid h-50 ">
		<div class="col d-flex justify-content-center shadow h-50" style="background-color:#F8F8F8; border-radius:30px; margin-top: 100px; margin-bottom:100px;"  >
	<h1 >
		Mật khẩu không đúng, vui lòng nhập lại. <a href="login.php">Trở lại</a>
	</h1>
			
		</div>
	</div>';
    include '../partials/footer.php';
        exit;
    }
     
    $_SESSION['username'] = $username;
    $loggedin = true;
   
    header("Refresh:0; url=index.php");
    
}
?>
        <link rel="stylesheet" href="css/login.css">
        <h1>Đăng nhập</h1>
        <section class="intro ">
            <div class="bg-image h-100">
                <div class="mask d-flex align-items-center h-100 " >
                <div class="container">
                    <div class="row d-flex justify-content-center align-items-center">
                    <div class="col-12 col-lg-9 col-xl-8">
                        <div class="card border-0" style="border-radius: 1rem;">
                        <div class="row">
                        
                            <div class="col-lg-8 offset-lg-2 d-flex align-items-center ">
                            <div class="card-body py-5 px-4 p-md-5">

                                <form id="signupForm" form action="login.php?do=login" method="POST">
                                <h4 class="fw-bold mb-4" style="color: #494949;">Đăng Nhập Vào Tài Khoản</h4>
                               
                               
                                <div class="form-floating mb-4">
                                    <input type="text" class="form-control" id="txtUsername" name="txtUsername" placeholder="Tên đăng nhập">
                                    <label for="txtUsername">Tên đăng nhập</label>
                                </div>
                               
                                <div class="form-floating mb-4">
                                    <input type="password" id="tetPassword" name="txtPassword" class="form-control" placeholder="Mật khẩu" />
                                    <label for="tetPassword">Mật khẩu</label>
                                </div>
                                <div class="d-flex justify-content-center pt-1 mb-4">
                                    <button  type="submit" name="dangnhap" class="btn" style="background-color: #494949 !important; color: #FFFFFF;"><i class="fa fa-sign-in" aria-hidden="true"></i></button>
                                </div>
                                <hr>
                                <a class="link float-end mx-2 btn" href="#!">Quên mật khẩu?  </a>
                                <a class="link float-end btn"  href="register.php">Đăng ký tài khoản </a>
                                </form>

                            </div>
                            </div>
                        </div>
                        </div>
                    </div>
                    </div>
                </div>
                </div>
            </div>
        </section>
        <section class="mt-4">
        
        </section>
    <?php
        include '../partials/footer.php'; 
    ?>
    	<script type="text/javascript" src="jquery.validate.js"></script>

        <script type="text/javascript" src="js/check.js"> </script>
    
</html>