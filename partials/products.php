<div >
    <?php

    include '../partials/mysqli_connect.php';
    
  
?>
   
    <section class="company">
        <div>
            <h3>Apple</h3>
        </div>
        <?php 
        if(isset($message)){ 
            echo "<h2>$message</h2>"; 
        } 
    ?> 
        <div class="products row container-fluid">
            <?php 
                    $query = 'SELECT * FROM products where company="Apple"';
                    // href="cart.php?id=<?='.$row['proID'].'"
                    if ($result = mysqli_query($dbc, $query)){
                        
                        while ($row = mysqli_fetch_array($result)) {
                    
                            echo '<div class="product-item col-md-4 col-lg-3 col-sm-6 col-12">
                                <div class="card m-3 m-2 shadow p-3 mb-5 bg-white border-0" style="width: 18rem;" >
                                    <form class="form-horizontal" method="post" action="cart.php?action=addcart&id='.$row['proID'].'">
                                    <a href="product_detail.php?id='.$row['proID'].'">
                                    <img class="card-img-top" name="image" src="'.$row['frontImage'].'">
                                    </a>
                                    <div class="card-body">
                                        <h5 class="card-title" name="name">'.$row['proName'].'</h5>
                                        <span class="fa fa-star checked"></span>
                                        <span class="fa fa-star checked"></span>
                                        <span class="fa fa-star checked"></span>
                                        <span class="fa fa-star checked"></span>
                                        <span class="fa fa-star"></span>
                                        <div class="price" name="price">'. number_format($row['price'],0,3).' VNĐ</div>
                                        <div class="row">
                                            <div class="col-6">
                                                <a class="btn-favorite"><i class="fa fa-heart-o">Yêu Thích</i></a>
                                            </div>
                                            <div class="col-6">
                                            <button type="submit" name="addcart"  class="btn-custom "><i class="fa-solid fa-cart-shopping"></i>Đặt Hàng</button>
                                            </div>  
                                            
                                        </div>
                                    </div>
                                    </form>
                                </div>
                            </div>';
                            
                        }
                    } else {
                        echo '<p class="error">Không thể lấy dữ liệu vì: <br>' . mysqli_error($dbc) . 
                                '.</p><p>Câu truy vấn là: ' . $query . '</p>';
                    }

            ?>
        </div>
    </section> 
    <section class="company">
        <h3>Samsung</h3>
        <div class="products row">
            <?php 
                    $query = 'SELECT * FROM products where company="Samsung"';
                    // ORDER BY date_entered DESC
                    if ($result = mysqli_query($dbc, $query)){
                        
                        while ($row = mysqli_fetch_array($result)) {
                    
                            echo '<div class="product-item col-md-4 col-lg-3 col-sm-6 col-12">
                                <div class="card m-3 m-2 shadow p-3 mb-5 bg-white border-0" style="width: 18rem;" >
                                    <form class="form-horizontal" method="post" action="cart.php?action=addcart&id='.$row['proID'].'">
                                    <a href="product_detail.php?id='.$row['proID'].'">
                                    <img class="card-img-top" name="image" src="'.$row['frontImage'].'">
                                    </a>
                                    <div class="card-body">
                                        <h5 class="card-title" name="name">'.$row['proName'].'</h5>
                                        <span class="fa fa-star checked"></span>
                                        <span class="fa fa-star checked"></span>
                                        <span class="fa fa-star checked"></span>
                                        <span class="fa fa-star checked"></span>
                                        <span class="fa fa-star"></span>
                                        <div class="price" name="price">'. number_format($row['price'],0,3).' VNĐ</div>
                                        <div class="row">
                                            <div class="col-6">
                                                <a class="btn-favorite"><i class="fa fa-heart-o">Yêu Thích</i></a>
                                            </div>
                                            <div class="col-6">
                                            <button type="submit" name="addcart"  class="btn-custom "><i class="fa-solid fa-cart-shopping"></i>Đặt Hàng</button>
                                            </div>  
                                            
                                        </div>
                                    </div>
                                    </form>
                                </div>
                            </div>';
                        
                        }
                    } else {
                        echo '<p class="error">Không thể lấy dữ liệu vì: <br>' . mysqli_error($dbc) . 
                                '.</p><p>Câu truy vấn là: ' . $query . '</p>';
                    }
                    
            ?>
        </div>
    </section>
    <section class="company">
        <h3>Huawei</h3>
        <div class="products row">
            <?php 
                    $query = 'SELECT * FROM products where company="HUAWEI"';
                    // ORDER BY date_entered DESC
                    if ($result = mysqli_query($dbc, $query)){
                        
                        while ($row = mysqli_fetch_array($result)) {
                    
                            echo '<div class="product-item col-md-4 col-lg-3 col-sm-6 col-12">
                                <div class="card m-3 m-2 shadow p-3 mb-5 bg-white border-0" style="width: 18rem;" >
                                    <form class="form-horizontal" method="post" action="cart.php?action=addcart&id='.$row['proID'].'">
                                    <a href="product_detail.php?id='.$row['proID'].'">
                                    <img class="card-img-top" name="image" src="'.$row['frontImage'].'">
                                    </a>
                                    <div class="card-body">
                                        <h5 class="card-title" name="name">'.$row['proName'].'</h5>
                                        <span class="fa fa-star checked"></span>
                                        <span class="fa fa-star checked"></span>
                                        <span class="fa fa-star checked"></span>
                                        <span class="fa fa-star checked"></span>
                                        <span class="fa fa-star"></span>
                                        <div class="price" name="price">'. number_format($row['price'],0,3).' VNĐ</div>
                                        <div class="row">
                                            <div class="col-6">
                                                <a class="btn-favorite"><i class="fa fa-heart-o">Yêu Thích</i></a>
                                            </div>
                                            <div class="col-6">
                                            <button type="submit" name="addcart"  class="btn-custom "><i class="fa-solid fa-cart-shopping"></i>Đặt Hàng</button>
                                            </div>  
                                            
                                        </div>
                                    </div>
                                    </form>
                                </div>
                            </div>';
                        
                        }
                    } else {
                        echo '<p class="error">Không thể lấy dữ liệu vì: <br>' . mysqli_error($dbc) . 
                                '.</p><p>Câu truy vấn là: ' . $query . '</p>';
                    }
                    

            ?>
        </div>
    </section>
    <section class="company">
        <h3>Oppo</h3>
        <div class="products row">
            <?php 
                    $query = 'SELECT * FROM products where company="OPPO"';
                    // ORDER BY date_entered DESC
                    if ($result = mysqli_query($dbc, $query)){
                        
                        while ($row = mysqli_fetch_array($result)) {
                    
                            echo '<div class="product-item col-md-4 col-lg-3 col-sm-6 col-12">
                                <div class="card m-3 m-2 shadow p-3 mb-5 bg-white border-0" style="width: 18rem;" >
                                    <form class="form-horizontal" method="post" action="cart.php?action=addcart&id='.$row['proID'].'">
                                    <a href="product_detail.php?id='.$row['proID'].'">
                                    <img class="card-img-top" name="image" src="'.$row['frontImage'].'">
                                    </a>
                                    <div class="card-body">
                                        <h5 class="card-title" name="name">'.$row['proName'].'</h5>
                                        <span class="fa fa-star checked"></span>
                                        <span class="fa fa-star checked"></span>
                                        <span class="fa fa-star checked"></span>
                                        <span class="fa fa-star checked"></span>
                                        <span class="fa fa-star"></span>
                                        <div class="price" name="price">'. number_format($row['price'],0,3).' VNĐ</div>
                                        <div class="row">
                                            <div class="col-6">
                                                <a class="btn-favorite"><i class="fa fa-heart-o">Yêu Thích</i></a>
                                            </div>
                                            <div class="col-6">
                                            <button type="submit" name="addcart"  class="btn-custom "><i class="fa-solid fa-cart-shopping"></i>Đặt Hàng</button>
                                            </div>  
                                            
                                        </div>
                                    </div>
                                    </form>
                                </div>
                            </div>';
                        
                        }
                    } else {
                        echo '<p class="error">Không thể lấy dữ liệu vì: <br>' . mysqli_error($dbc) . 
                                '.</p><p>Câu truy vấn là: ' . $query . '</p>';
                    }
                    
                  //  mysqli_close($dbc);
            ?>
        </div>
    </section>  
</div>