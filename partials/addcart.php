<?php 
    include '../partials/mysqli_connect.php';
   
    if (isset($_GET['idproduct']) && ($_GET['idproduct'] > 0) ) {
        echo $_GET['idproduct'];
        $id=$_GET['idproduct'];
        echo $id;
        
             $_SESSION['cart'] = 'green'; 
            $sql_s="SELECT * FROM products 
                WHERE proID='$id'"; 
            $query_s=mysqli_query($dbc, $sql_s); 
            if(mysqli_num_rows($query_s)!=0){ 
                $row_s=mysqli_fetch_array($query_s); 
                  
                $_SESSION['cart'][$row_s['proID']]=array( 
                        "quantity" => 1, 
                        "price" => $row_s['price'] 
                    ); 
                  
                  
            }
    
}
  
?>