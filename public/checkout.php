<?php
define('TITLE', 'Giỏ Hàng');
include '../partials/header.php';

include '../partials/mysqli_connect.php';

echo '<div   class="container skin-light">
<h1 style="text-align: center;">GIỎ HÀNG</h1>
<table class="table">
  <thead scope="col">
      <tr>
          <th scope="col" colspan="2" style="text-align: center;">
              Sản Phẩm
          </th>
          <th scope="col">
              Số lượng
          </th>
          <th scope="col">
              Giá
          </th>
          <th scope="col">
              Thành Tiền
          </th>
          <th scope="col">
          </th>
        </tr>
  </thead>
  <tbody scope="col">';
    if (isset($_GET['id']) && ($_GET['id'] > 0) ) {
        include '../partials/mysqli_connect.php';
        $query = "SELECT * FROM products WHERE proID ='{$_GET['id']}'";
                if ($result = mysqli_query($dbc, $query)){
                    $row = mysqli_fetch_array($result);
                        echo'<div class="container-fluid row">
                        <div ="container"> 
                        <tr>
                        <th scope="col">
                            <img width="250px" src="'.$row['frontImage'].'">
                        </th>
                        <th scope="col">
                            '.$row['proName'].'
                        </th>
                        <th scope="col">
                        <input type="number" name="price" value="1">
                        </th>
                        <th scope="col">
                            '.number_format($row['price'],0,3).'
                        </th>
                        <th scope="col">
                            '.number_format($row['price'],0,3).'
                        </th>
                        
                    </tr>
                      
                   
                    </div>'
                    ;
                    
                    
                } else {
                    echo '<p class="error">Không thể lấy dữ liệu vì: <br>' . mysqli_error($dbc) . 
                            '.</p><p>Câu truy vấn là: ' . $query . '</p>';
                }
                
                mysqli_close($dbc);
        
    }
  echo'</tbody>
  <tfoot scope="col">  
  <tr>
          <th scope="col" colspan="6" style="text-align: center;">
          <button width="100px" class="btn-custom"><i class="fa-solid fa-cart-shopping"></i>Đặt Hàng</a> 
          </th>
    </tr>
  </tfoot>
</table>
</div>';


include '../partials/footer.php';
?>