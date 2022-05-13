<?php
define('TITLE', 'Admin');
include '../partials/header.php';

include '../partials/mysqli_connect.php';
include '../partials/check_admin.php';
echo '<div   class="container skin-light">
<h1 style="text-align: center;">Sản phẩm</h1>
<a type="button" style="width:200px;" class="btn-admin" href="add_product.php">Thêm sản phẩm (+) </a>
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
          </th>
        </tr>
  </thead>
  <tbody scope="col">';
  $query = 'SELECT * FROM products';
                    // ORDER BY date_entered DESC
                    if ($result = mysqli_query($dbc, $query)){
                        
                        while ($row = mysqli_fetch_array($result)) {
                    
                            // $htmlspecialchars = 'htmlspecialchars';
                            echo'<tr>
                        <th scope="col">
                            <img width="100px" src="'.$row['frontImage'].'">
                        </th>
                        <th scope="col">
                            '.$row['proName'].'
                        </th>
                        <th scope="col">
                            '.$row['quantity'].'
                        </th>
                        <th scope="col">
                            '.number_format($row['price'],0,3,".").'
                        </th>

                        <th scope="col">
                        <div class="row">
                        <div class="col-6" style="text-align: center;">
                        <a type="button" style="width:100px;" class="btn-admin" href="edit_product.php?id='.$row['proID'].'">Sửa</a>
                        </div
                        <div class="col-6 style="text-align: center;"">
                        <a type="button" style="width:100px;" class="btn-admin" href="delete_product.php?action=deleteP&id=' . $row['proID'] . '" >Xóa</a>
                        </div
                        </div>
			            
                        </th>
                        </tr>';
                            
                        }
                    } else {
                        echo '<p class="error">Không thể lấy dữ liệu vì: <br>' . mysqli_error($dbc) . 
                                '.</p><p>Câu truy vấn là: ' . $query . '</p>';
                    }
                    
                    mysqli_close($dbc);

  echo'</tbody>
  <tfoot scope="col">  
            
  </tfoot>
</table>
</div>';
if (isset($_GET['action'])) {
    if($_GET['action'] == 'deleteP') {
        echo'<script>alert("Sản phẩm đã được xóa!")</script>';
    }

}

include '../partials/footer.php';
?>
<script type="text/javascript">
		function deletesp(id) {
			console.log(id);
			// var option = confirm('Bạn có muốn xóa không?')
			// if (!option) {
			// 	return;
			// }
            // else {
                
            // }
            mysqli_query($dbc," DELETE FROM products WHERE proID={$row['proID']}'")
			$.post('delete_product.php', {
				'id': id,
				'action': 'deleteP'
			}, function(data) {
				location.reload()
			})
		}
</script>