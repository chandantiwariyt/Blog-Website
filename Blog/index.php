<?php
include './config.php';
include './header.php';

$query = "SELECT * FROM articles";
$result = mysqli_query($link, $query);
?>
<body>
    <section>
        <div class="container" >
          <div class="d-flex flex-wrap pt-5">  
              <div>
                    <?php
                        if ($result) {
                            while ($row = mysqli_fetch_array($result)) {
                                echo '
                                <div class="col-md-3 col-12 m-2">
                                    <div class="card">
                                    <a href="http://localhost/blog/article.php"><img class="card-img-top" src='.$row['thumbnail'].' alt="Card image cap"></a>
                                    
                                    <div class="card-body">
                                    <h5 class="card-title">'.$row['headings'].'</h5>
                                    <p class="card-text">'.substr($row['description'], 0, 120).'...</p>
                                    <a href="http://localhost/blog/article.php" class="btn btn-primary">Read more...</a>
                                    </div>
                                    </div>
                                </div>';
                            }   
                        }
                    ?>
                </div>  
            </div>   
        </div>
    </section>
<?php
include './footer.php';
?>    
