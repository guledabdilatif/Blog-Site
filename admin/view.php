<?php include('../connect.php'); ?>
<?php include("templates/header.php") ?>
<?php

if (isset($_GET['id'])) {
    
    $post_id = $_GET['id'];
    $query = "SELECT * FROM posts where id= '$post_id'";
    $query_run = mysqli_query($connection, $query);
    

    if(mysqli_num_rows($query_run)>0){
        $row = mysqli_fetch_array($query_run);
        // print_r($row);
        ?>
         <div class="col-md-9 mt-5">
            <form action="code.php" method="POST">
                <input type="hidden" name="id" value="<?= $row['id']?>">
                <div class="mb-3">
                <p class="form-control"><?php echo $row['title']?></p>
                </div>
                <div class="mb-3">
                    <p class="form-control"><?php echo $row['summary']?></p>

                </div>
                <div class="mb-3">
                        <p class="form-control"><?php echo $row['description']?></p>

                    </div>
                <input type="hidden" name="date" value="<?php echo date("y/m/d"); ?>">
               

            </form>
        </div>
        <?php

    }


}
?>
<?php include("templates/footer.php") ?>