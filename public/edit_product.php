<?php

define('TITLE', 'Sửa một Sản Phẩm');
include '../partials/header.php';

echo '<h2>Sửa một Sản phẩm</h2>';

include '../partials/check_admin.php';

include '../partials/mysqli_connect.php';

if (isset($_GET['id'])) {

    $query = "SELECT * FROM products WHERE proID ='{$_GET['id']}'";

    if ($result = mysqli_query($dbc, $query)) {

        while($row = mysqli_fetch_array($result)){

        echo '
            <form action="edit_product.php" method="post">
            <div class="form-group w-25">
                <label>Tên sản phẩm</label>
                <input type="text" name="proName" class="form-control" value="' . $row['proName'] . '">
            </div>
            <div class="form-group w-25">
                <label>Tên hãng</label>
                <input type="text" name="company" class="form-control" value="' . $row['company'] . '">
            </div>
            <div class="form-group w-50">
                <label>Hình ảnh</label>
                <input type="text" name="frontImage" class="form-control" value="' . $row['frontImage'] . '">
            </div>
            <div class="form-group w-50">
                <img width="150px" src="' . $row['frontImage'] . '">
            </div>
            <div class="form-group w-50">
                <label>Mô tả</label>
                <textarea type="text" name="proDes" class="form-control" rows="5">' .$row['proDes'] . '</textarea>
            </div>
            <div class="form-group w-25">
                <label>Màu</label>
                <input type="text" name="color" class="form-control" value="' . $row['color'] . '">
            </div>
            <div class="form-group w-25">
                <label>Số lượng</label>
                <input type="number" name="quantity" class="form-control" value="' .$row['quantity'] . '">
            </div>
            <div class="form-group w-25">
                <label>Giá</label>
                <input type="number" name="price"  class="form-control mb-2" value="' . $row['price'] . '">
            </div>
            <input class="btn-custom w-25" name="id" type="hidden" value="' .$_GET['id'] . '">
            <input class="btn-custom w-25" type="submit" name="submit" value="Sửa sản phẩm này!">
            </form>';
        }
    } else {
        echo '<p class="error">Không thể lấy được sản phẩm này vì:<br>' . mysqli_error($dbc) . 
                '.</p><p>Câu truy vấn này là: ' . $query . '</p>';
    }
} 
elseif (isset($_POST['id'])) {
    $problem = FALSE;
    if (empty($_POST['proName'])&& empty($_POST['company'])&& empty($_POST['frontImage'])&& empty($_POST['proDes'])&& empty($_POST['color'])&& empty($_POST['quantity'])&& empty($_POST['price'])) {
        echo '<p class="error">Hãy gõ vào tất cả các ô trống !</p>';
        $problem = TRUE;
    }

    if (!$problem) {
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
        if (mysqli_query($dbc," UPDATE products SET proName='$name', company='$company', frontImage='$img', proDes='$des', color='$color', quantity='$quantity', price='$price' WHERE proID='{$_POST['id']}'"))
        {   
			echo '<p class="text-success">Đã sửa được sản phẩm</p>';
		}else {
			echo '<p class="error ">Không thể sửa sản phẩm vì:<br>' . mysqli_error($dbc) . '.</p><p>Câu truy vấn là: ' . $query .'</p>';
		}
		mysqli_close($dbc);
    }
}
 else {
    echo '<p class="error text-danger">Đã có lỗi xảy ra.</p>';
}

include '../partials/footer.php';
?>