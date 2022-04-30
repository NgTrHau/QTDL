<?php

include '../partials/header.php';

include '../partials/mysqli_connect.php';

?>
	
	
	<div class="row container-fluid my-3">
		<div class="col-lg-9 order-lg-1 order-2 ">
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
			
		</div>
		<div class="col-lg-3 order-lg-2 order-1 ">
			<div class="row">
				<div>
					<img class="d-block w-100 rounded mb-3" src="https://cdn.hoanghamobile.com/i/home/Uploads/2022/02/18/chuyen-trang-samsung2.png" alt="">
				</div>
			</div>
			<div class="row">
			<img class="d-block w-100 rounded" src="https://cdn.hoanghamobile.com/i/home/Uploads/2022/03/15/1200x628-01-1.jpg" alt="">
			</div>
		</div>
	</div> 
	<div class="container-fluid row">
		<div class="col-9">
					<div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
					<div class="banner2">
			<div class="carousel-inner">
				<div class="carousel-item active">
				<img src="https://images.fpt.shop/unsafe/fit-in/800x300/filters:quality(90):fill(white)/fptshop.com.vn/Uploads/Originals/2022/4/14/637855722891895145_F-H1_800x300.png" class="d-block w-100" alt="...">
				</div>
				<div class="carousel-item">
				<img src="https://images.fpt.shop/unsafe/fit-in/800x300/filters:quality(90):fill(white)/fptshop.com.vn/Uploads/Originals/2022/4/19/637859639769118655_F-H1_800x300.png" class="d-block w-100" alt="...">
				</div>
				<div class="carousel-item">
				<img src="https://images.fpt.shop/unsafe/fit-in/800x300/filters:quality(90):fill(white)/fptshop.com.vn/Uploads/Originals/2022/4/11/637852645197208865_F-H1_800x300.png" class="d-block w-100" alt="...">
				</div>
			</div>
			<button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
				<span class="carousel-control-prev-icon" aria-hidden="true"></span>
				<span class="visually-hidden">Previous</span>
			</button>
			<button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
				<span class="carousel-control-next-icon" aria-hidden="true"></span>
				<span class="visually-hidden">Next</span>
			</button>
			</div>
			</div>
		</div>
		<div class="col-3">
			<div class="row" id="sidebarfrist">
                        <h3>Xu Hướng</h3>
                        <div class="container" id="box">
						<button type="button" class="btn btn-sm btn-light"><a class="text-decoration-none" href="">#Camera</a></button>
                            <button type="button" class="btn btn-sm btn-light"><a class="text-decoration-none" href="">#Mànhình</a></button>
                            <button type="button" class="btn btn-sm btn-light"><a class="text-decoration-none" href="">#Pin</a></button>
                            <button type="button" class="btn btn-sm btn-light"><a class="text-decoration-none" href="">#Sạc nhanh</a></button>
                            <button type="button" class="btn btn-sm btn-light"><a class="text-decoration-none" href="">#IOS</a></button>
                            
                        </div>
            </div>
			<div class="row" id="sidebar">
                        <h3>Bán Chạy</h3>
                        <div class="container" id="box">
                        <nav>
                            <div class="nav nav-tabs" id="nav-tab" role="tablist">
                              <button class="nav-link active btn-sm" id="nav-home-tab" data-bs-toggle="tab" data-bs-target="#nav-home" type="button" role="tab" aria-controls="nav-home" aria-selected="true">Ngày</button>
                              <button class="nav-link btn-sm" id="nav-profile-tab" data-bs-toggle="tab" data-bs-target="#nav-profile" type="button" role="tab" aria-controls="nav-profile" aria-selected="false">Tuần</button>
                              <button class="nav-link btn-sm" id="nav-contact-tab" data-bs-toggle="tab" data-bs-target="#nav-contact" type="button" role="tab" aria-controls="nav-contact" aria-selected="false">Năm</button>
                            </div>
                        </nav>
                          <div class="tab-content" id="nav-tabContent">
                            <div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">
                                <ul class="list-group list-group-flush" id="sidebarlist">
                                    <li class="list-group-item"> <a class="text-decoration-none" href="">Iphone 13 ProMax </a></li>
                                    <li class="list-group-item"><a class="text-decoration-none" href="">Iphone 13 Pro </a></li>
                                    <li class="list-group-item"><a class="text-decoration-none" href="">Iphone 11 </a></li>
                             
                                  </ul>
                            </div>
                            <div class="tab-pane fade" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab">
                                <ul class="list-group list-group-flush"  id="sidebarlist">
                                    <li class="list-group-item"><a class="text-decoration-none" href="">Iphone 13 ProMax</a></li>
                                    <li class="list-group-item"><a class="text-decoration-none" href="">Iphone 13 </a></li>
                                    <li class="list-group-item"><a class="text-decoration-none" href="">Iphone 13 Pro </a></li>
                                
                                  </ul>
                            </div>
                            <div class="tab-pane fade" id="nav-contact" role="tabpanel" aria-labelledby="nav-contact-tab">
                                <ul class="list-group list-group-flush"  id="sidebarlist">
                                    <li class="list-group-item"><a class="text-decoration-none" href="">Iphone 12 </a></li>
                                    <li class="list-group-item"><a class="text-decoration-none" href="">Iphone 13 Pro Max </a></li>
                                    <li class="list-group-item"><a class="text-decoration-none" href="">Iphone 11 </a></li>
                              
                                  </ul>
                            </div>
                          </div>
                        </div>
                    </div>
		</div>
	</div>
	<div class="cotainer-fluid row">

	</div>
	
<?php

include '../partials/products.php';



include '../partials/footer.php';
?>