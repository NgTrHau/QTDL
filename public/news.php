<?php
define('TITLE', 'Tin Tức');
    include '../partials/header.php';
        include '../partials/mysqli_connect.php';

        echo '<h1 style="text-align: center">Tin tức</h1>';

        $query = "SELECT * FROM news";
                    if ($result = mysqli_query($dbc, $query)){
                        echo '<div class="row">';
                        while ($row = mysqli_fetch_array($result)) {
                    
                            echo'<div class=" col-md-4 col-lg-3 col-sm-6 col-4 m-3 p-3 border">
                            <a href="news_detail.php?id='.$row['nID'].'">
                            <img width="200px" height="150px" src="'.$row['image'].'" class="d-block w-100 rounded border border-light"></a>
                            <h5 class="mt-3 mx-3 ">'.$row['title'].'</h5>
                            </div>';
                        }
                        echo '</div>';
                    } else {
                        echo '<p class="error">Không thể lấy dữ liệu vì: <br>' . mysqli_error($dbc) . 
                                '.</p><p>Câu truy vấn là: ' . $query . '</p>';
                    }
                    
                    mysqli_close($dbc);



?>
<?php
    include '../partials/footer.php';
?>