<?php

    define('TITLE', 'Chi tiết');
    include '../partials/header.php';
    
    if (isset($_GET['id']) && ($_GET['id'] > 0) ) {
       
?>
<?php
        include '../partials/mysqli_connect.php';
        $query = "SELECT * FROM products WHERE proID ='{$_GET['id']}'";
                    if ($result = mysqli_query($dbc, $query)){
                        
                        while ($row = mysqli_fetch_array($result)) {
                    
                            
                            echo '<h1>'.$row['company'].'</h1>
                                <div class="container-fluid row mb-5">
                                    <div class="col-lg-6 container-fluid">
                                      <div >
                                        <img src="'.$row['frontImage'].'" class="d-block w-100" alt="...">
                                      </div>
                                    </div>
                                    <div class="col-lg-6 container-fluid">
                                        <h2>'.$row['proName'].'</h2>
                                        <p class="h4">'.number_format($row['price'],0,3).'đ</p>
                                        <p>'.$row['proDes'].'</p>
                                        <ol class="list-group list-group-numbered">
                                          <li class="list-group-item d-flex justify-content-between align-items-start">
                                            <div class="ms-2 me-auto">
                                              <div class="fw-bold">Giảm giá 50% gói bảo hành mở rộng thêm 1 năm (chính hãng)<a href="" class="text-decoration-none"> Xem chi tiết </a></div>
                                              
                                            </div>
                                           
                                          </li>
                                          <li class="list-group-item d-flex justify-content-between align-items-start">
                                            <div class="ms-2 me-auto">
                                              <div class="fw-bold">Giảm đến 1,500,000đ khi tham gia thu cũ đổi mới (Không áp dụng kèm giảm giá qua VNPAY, Moca) <a href="" class="text-decoration-none"> Xem chi tiết </a></div>
                                             
                                            </div>
                                           
                                          </li>
                                          <li class="list-group-item d-flex justify-content-between align-items-start">
                                            <div class="ms-2 me-auto">
                                              <div class="fw-bold">Giảm 50% giá gói cước 1 năm (Vina350/Vina500) cho Sim VinaPhone trả sau (Trị giá đến 3 triệu)<a href="" class="text-decoration-none"> Xem chi tiết </a></div>
                                              
                                            </div>
                                           
                                          </li>
                                          <li class="list-group-item d-flex justify-content-between align-items-start">
                                          <div class="ms-2 me-auto">
                                            <div class="fw-bold">Nhập mã TGDD giảm 5% tối đa 400.000đ cho đơn hàng từ 500.000đ trở lên khi thanh toán qua Ví Moca trên ứng dụng Grab <a href="" class="text-decoration-none"> Xem chi tiết </a></div>
                                            
                                          </div>
                                        
                                        </li>
                                        </ol>
                                    <div class="row my-3">
                                    <div class="col-6">
                                        <button class="btn-favorite"><i class="fa fa-heart-o">Yêu Thích</i></button>
                                    </div>
                                    <div class="col-6">
                                    <a href="checkout.php?id='.$row['proID'].'"  id="btn-cart" class="btn-custom"><i class="fa-solid fa-cart-shopping"></i>Đặt Hàng</a>
                                    </div>
                                            
                                      </div>
                                    <div class="row">

                                    </div>
                                    </div>
                                    <div class="row">

			
                                    <div id="carouselExampleFade" class="carousel slide carousel-fade" data-bs-ride="carousel">
                                    <div class="row" id="banner2">
                                      <div id="carouselExampleFade" class="carousel slide carousel-fade" data-ride="carousel" data-interval="3000">
                                        <div class="carousel-inner">
                                        <div class="carousel-item active">
                                          <img class="d-block w-100 " src="https://cdn.hoanghamobile.com/i/home/Uploads/2022/04/04/thucu-s22-web_637846863057152913.png" alt="First slide">
                                        </div>
                                        <div class="carousel-item">
                                          <img class="d-block w-100" src="https://cdn.hoanghamobile.com/i/home/Uploads/2022/04/08/iphone-11-banner-01.jpg" alt="Second slide">
                                        </div>
                                        <div class="carousel-item">
                                          <img class="d-block w-100" src="https://cdn.hoanghamobile.com/i/home/Uploads/2022/04/02/mi-fan-festival-2022-02.jpg" alt="Third slide">
                                        </div>
                                        </div>
                                      </div>
                                    </div>
                                    </div>
                                  </div>
                                </div';
                         
                        
                        }
                    } else {
                        echo '<p class="error">Không thể lấy dữ liệu vì: <br>' . mysqli_error($dbc) . 
                                '.</p><p>Câu truy vấn là: ' . $query . '</p>';
                    }
                    
                    mysqli_close($dbc);
    }



?>
<?php
    echo '</main>';
    include '../partials/footer.php';
?>