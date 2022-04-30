<?php

if (!is_administrator()) {
	//echo '<h2>Truy cập bị từ chối!</h2><p class="error">Bạn không có quyền truy xuất trang này.</p>';
	echo '<div class="row container-fluid h-50 ">
		<div class="col d-flex justify-content-center shadow h-50" style="background-color:#F8F8F8; border-radius:30px; margin-top: 100px; margin-bottom:100px;"  >
	<h1 >
		Bạn không có quyền truy cập trang này. 
	</h1>
			
		</div>
	</div>';
	include 'footer.php';
	exit();
}