<?php
define('TITLE', 'Giỏ Hàng');
include '../partials/header.php';

include '../partials/mysqli_connect.php';

    
    if (isset($_GET['id']) && isset($_POST['addcart']) ) {
        $sql_s="SELECT * FROM products WHERE proID={$_GET['id']}"; 
        $query_s=mysqli_query($dbc, $sql_s); 
        $row_s=mysqli_fetch_array($query_s); 
        if (isset($_SESSION['cart']) ) {
             
            $session_array_id = array_column($_SESSION['cart'], 'id');

            if (!in_array($_GET['id'], $session_array_id)) {
                
                if(mysqli_num_rows($query_s)!=0){ 
                    $id= count($_SESSION['cart']);
                    $session_array= array(
                        'id' => $_GET['id'],
                        "name" => $row_s['proName'],
                        "image" => $row_s['frontImage'],
                        "price" => $row_s['price'],
                        "quantity" => 1,
                    );
                      
                }
                
    
                $_SESSION['cart'][$id] = $session_array;
            }else {
                echo '<script>alert("Sản phẩm đã được thêm vào giỏ hàng")</script>';
                echo '<script>window.location="cart.php"</script>';

            }
    
        }else{

            $session_array = array(
                'id' => $_GET['id'],
                "name" => $row_s['proName'],
                "image" => $row_s['frontImage'],
                "price" => $row_s['price'],
                "quantity" => 1,
            );

            $_SESSION['cart'][] = $session_array;
        }
    
    }
echo '<div class="container skin-light">
<h1 style="text-align: center;">GIỎ HÀNG</h1>
<table class="table">
  <thead scope="col">
      <tr>
          <th scope="col" colspan="2" style="text-align: center;">
              Sản Phẩm
          </th>
          <th scope="col" style="text-align: center;">
              Số lượng
          </th>
          <th scope="col" style="text-align: center;">
              Giá
          </th>
          <th scope="col" style="text-align: center; width:202px;">
              Thành Tiền
          </th>
          <th scope="col">
          </th>
        </tr>
  </thead>
  <tbody scope="col">';

    // var_dump($_SESSION['cart']);
    if(!empty($_SESSION['cart']) ){
        

        $total = 0;
        foreach($_SESSION['cart'] as $key => $value){
            echo '<div class="container-fluid row">
                <div ="container"> 
                <tr>
                    <td scope="col">
                        <img width="250px" src="'.$value['image'].'">
                    </td>
                    <td scope="col">
                        '.$value['name'].'
                    </td>
                    <td scope="col" style="text-align: center;">
                        <input class="iquantity" type="number" onchange="subTotal()" value="'.$value['quantity'].'" min="1" max="100">
                    </td>
                    <td scope="col" style="text-align: center;">
                        '.number_format($value['price'],0,3,".",).'
                        <input class="iprice" type="hidden" value="'.$value['price'].'">
                        
                    </td>
                    <td scope="col" class="itotal" style="text-align: center;width:202px;">
                         <p style="font-weight: italic;">'.number_format($value['price']*$value['quantity'],0,3,".").' đ</p>
                    </td>
                    <td scope="col">
                        <a href="cart.php?action=remove&id='.$value['id'].'">
                            <button class="btn-custom"><i class="fa-solid fa-trash"></i></button>
                        </a>
                    </td>
                </tr>
                </div>';
            $total = $total + ($value['quantity'] * $value['price']);
        }
        $ids = array_keys($_SESSION['cart']);
        echo '</tbody>
        <tfoot scope="col"> 
        <tr>
            <td scope="col" colspan="3"></td>
            <td scope="col" style="text-align: center;font-weight:bold;">Tổng tiền</td>
            <td id="gtotal" scope="col" style="font-weight:bold;text-align: center;"><p style="font-weight: italic;margin: 0px;">'.number_format($total,0,3,".").' đ</p></td>
            <td scope="col" >
            <a href="cart.php?action=clearall">
            <button width="100px" class="btn-custom">Xóa hết</button>
            </a>
            </td>
        </a>
            </th>
        </tr>
        <tr>
            <th scope="col" colspan="5"></th>
            <th scope="col" style="text-align: center;">
                <button width="100px" class="btn-custom"><i class="fa-solid fa-cart-shopping"></i>Đặt Hàng</a> 
            </th>
        </tr>
        
        </tfoot>
        ';

    }
    echo '</table>
    </div>';

if (isset($_GET['action'])) {
    if($_GET['action'] == 'clearall') {
        unset($_SESSION['cart']);
        echo '<script>window.location="cart.php"</script>';
    }
    if($_GET['action'] == 'remove') {
        foreach($_SESSION['cart'] as $key => $value) {
            if($value['id'] == $_GET['id']){
                unset($_SESSION['cart'][$key]);
            }
        }
        echo '<script>window.location="cart.php"</script>';
    }
}

include '../partials/footer.php';
?>
<script>
    var gt = 0;
    var iquantity =document.getElementsByClassName('iquantity');
    var iprice =document.getElementsByClassName('iprice');
    var itotal =document.getElementsByClassName('itotal');
    var gtotal =document.getElementById('gtotal');
    function subTotal() {
        for(i=0;i<iprice.length;i++) {
            
            itotal[i].innerText=((iprice[i].value)*(iquantity[i].value)).toLocaleString("vi-VN", {
                style: "currency",
                currency: "VND",
            });
            gt+=(iprice[i].value)*(iquantity[i].value);
        }
        gtotal.innerText=gt.toLocaleString("vi-VN", {
                style: "currency",
                currency: "VND",
            });
    }
</script>
