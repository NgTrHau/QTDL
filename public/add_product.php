<?php

define('TITLE', 'Thêm Sản Phẩm');
include '../partials/header.php';

echo '<h2>Thêm một Sản phẩm</h2>';

include '../partials/check_admin.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {

	if(!empty($_POST['proName'])&& !empty($_POST['company'])&& !empty($_POST['frontImage'])&& !empty($_POST['proDes'])&& !empty($_POST['color'])&& !empty($_POST['quantity'])&& !empty($_POST['price'])) {

		include "../partials/mysqli_connect.php";
		if (isset($_POST['proName'])){
			$name = $_POST['proName'];
		}
		if (isset($_POST['company'])){
			$company = $_POST['company'];
		}
		if (isset($_POST['frontImage'])){
			$img = $_POST['frontImage'];
		}
		if (isset($_POST['proDes'])){
			$des = $_POST['proDes'];
		}
		if (isset($_POST['color'])){
			$color = $_POST['color'];
		}
		if (isset($_POST['quantity'])){
			$quantity = $_POST['quantity'];
		}
		if (isset($_POST['price'])){
			$price = $_POST['price'];
		}

		if (mysqli_query($dbc,"INSERT INTO products (proName, company, frontImage, proDes, color, quantity, price) VALUES ('$name', '$company', '$img', '$des', '$color', '$quantity', '$price')")){
			echo '<p class="text-success">Đã thêm được sản phẩm</p>';
		}else {
			echo '<p class="error ">Không thể thêm sản phẩm vì:<br>' . mysqli_error($dbc) . '.</p><p>Câu truy vấn là: ' . $query .'</p>';
		}
		mysqli_close($dbc);

	} else {
		echo '<p class="error text-danger">Hãy gõ vào tất cả ô trống!</p>';
	}
}

?>
<form action="add_product.php" method="post">
  <div class="form-group w-25">
    <label>Tên sản phẩm</label>
    <input type="text" name="proName" class="form-control">
  </div>
  <div class="form-group w-25">
    <label>Tên hãng</label>
    <input type="text" name="company" class="form-control">
  </div>
  <div class="form-group w-50">
    <label>Hình ảnh</label>
    <input type="text" name="frontImage" class="form-control">
  </div>
  <div class="form-group w-50">
    <label>Mô tả</label>
	<textarea type="text" name="proDes" class="form-control" rows="5"></textarea>
  </div>
  <div class="form-group w-25">
    <label>Màu</label>
    <input type="text" name="color" class="form-control">
  </div>
  <div class="form-group w-25">
    <label>Số lượng</label>
    <input type="number" name="quantity" class="form-control">
  </div>
  <div class="form-group w-25">
    <label>Giá</label>
    <input type="number" name="price"  class="form-control mb-2">
  </div>

  <input class="btn-custom w-25" type="submit" name="submit" value="Thêm Sản phẩm này!">
</form>

<?php include '../partials/footer.php'; ?>