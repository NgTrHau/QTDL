<?php 
    include '../partials/mysqli_connect.php';
    
    if (isset($_POST['addcart']) ) {
        if (isset($_SESSION['cart']) ) {
            
            $session_array_id = array_column($_SESSION['cart'], 'id');

            if (!in_array($_GET['id'], $session_array_id)) {
               
                $session_array = array(
                    'id' => $_GET['id'],
                    "name" => $_POST['name'],
                    "image" => $_POST['image'],
                    "price" => $_POST['price'],
                    "quantity" => $_POST['quantity'],
                );
    
                $_SESSION['cart'][] = $session_array;
            }
    
        }else{

            $session_array = array(
                'id' => $_GET['id'],
                "name" => $_POST['name'],
                "image" => $_POST['image'],
                "price" => $_POST['price'],
                "quantity" => $_POST['quantity'],
            );

            $_SESSION['cart'][] = $session_array;
        }
    
    }


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
?>
