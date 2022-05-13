<?php
    define('TITLE', 'Tin Tức');
    include '../partials/header.php';
    if (isset($_GET['id']) ) {
        include '../partials/mysqli_connect.php';
        $query = "SELECT * FROM news WHERE nID ='{$_GET['id']}'";
                    if ($result = mysqli_query($dbc, $query)){
                        
                        while ($row = mysqli_fetch_array($result)) {
                    
                            echo '<h1 style="text-align: center">'.$row['title'].
                            '</h1>
                            <img style="padding-left: 200px;padding-right: 200px;width:100%;" src="'.$row['image'].'">
                            '.$row['content'];
                         
                        
                        }
                    } else {
                        echo '<p class="error">Không thể lấy dữ liệu vì: <br>' . mysqli_error($dbc) . 
                                '.</p><p>Câu truy vấn là: ' . $query . '</p>';
                    }
                    
                    mysqli_close($dbc);
    }
    echo '</main>'



?>
<?php
    include '../partials/footer.php';
?>