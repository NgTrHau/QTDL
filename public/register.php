<?php
define('TITLE', 'Đăng Ký');
include '../partials/header.php';
?>
        <h1>Đăng ký</h1>
        <section class="intro">
            <div class="bg-image h-100">
                <div class="mask d-flex align-items-center h-100 " >
                <div class="container">
                    <div class="row d-flex justify-content-center align-items-center">
                    <div class="col-12 col-lg-9 col-xl-8">
                        <div class="card border-0" style="border-radius: 1rem;">
                        <div class="row">
                        
                            <div class="col-lg-8 offset-lg-2 d-flex align-items-center ">
                            <div class="card-body py-5 px-4 p-md-5">

                            <form id="signupForm" form action="request.php" method="POST">
                                <h4 class="fw-bold mb-4" style="color: #494949;">Đăng Ký Tài Khoản</h4>
                               
                                <div class="form-floating mb-4">
                                    <input type="text" id="txtUsername" name="txtUsername" class="form-control" placeholder="Tên đăng nhập" />
                                    <label class="form-label" for="txtUsername">Tên đăng nhập</label>
                                </div>
                               
                                <div class="form-floating mb-4">
                                    <input type="password" id="txtPassword" name="txtPassword" class="form-control" placeholder="Mật khẩu" />
                                    <label class="form-label" for="txtPassword">Mật khẩu</label>
                                </div>
                                <div class="form-floating mb-4">
                                    <input type="password" id="confirm_password" name="confirm_password" class="form-control" placeholder="Nhập lại mật khẩu"/>
                                    <label class="form-label" for="confirm_password">Nhập lại mật khẩu</label>
                                </div>
                                <div class="form-floating mb-4">
                                    <input type="email" id="txtEmail" name="txtEmail" class="form-control" placeholder="floating"/>
                                    <label class="form-label" for="txtEmail">Email</label>
                                </div>
                                <div class="d-flex justify-content-center pt-1 mb-4">
                                    <button  type="submit" name="dangky" class="btn" style="background-color: #494949 !important; color: #FFFFFF;">Đăng ký</button>
                                </div>
                                <hr>
                                    <p class="link float-end mx-2 btn" >Đã có tài khoản? <a style="text-decoration: none;"  href="login.php">Đăng nhập ngay </a> </p>  
                              
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
    </body>
    <script type="text/javascript" src="jquery.validate.js"></script>
    <script type="text/javascript" src="js/checkregister.js"> </script>
    <?php
         include '../partials/footer.php';
    ?>
</html>