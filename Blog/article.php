<?php
include './config.php';
include './header.php';


$query = "SELECT * FROM articles";
$result = mysqli_query($link, $query);
?>
    <section>
        <div class="container pt-5">
            <?php
                if ($result) {
                    while($row = mysqli_fetch_array($result)) {
                        echo '
                        <div class="text-center">
                        <div class="col-8 mx-auto">
                        <h1>'.$row['headings'].'</h1>
                        </div>

                        <div class="my-5">
                        <img src="'.$row['thumbnail'].'" alt="" width="50%">
                        </div>
                        <p>'.$row['description'].'</p>
                        </div>';
                    }    
                }
            ?>
            
        </div>
    </section>
<?php
include './footer.php';
?>