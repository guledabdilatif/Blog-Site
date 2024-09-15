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
                    <input type="text" value="<?= $row['title']?>" class="form-control" name="title" placeholder="title...">
                </div>
                <div class="mb-3">
                    <textarea name="summary" class="form-control" id="" placeholder="enter summary..."><?php echo $row['summary']?></textarea>
                </div>
                <div class="mb-3">
                    <textarea name="description" cols="30" rows="10" class="form-control" id=""
                        placeholder="enter description..."><?php echo $row['description']?></textarea>
                </div>
                <input type="hidden" name="date" value="<?php echo date("y/m/d"); ?>">
                <div class="mb-3">
                    <input type="submit" value="update" class="btn btn-primary" name="update">
                </div>

            </form>
        </div>
        <?php

    }


}
?>
<?php include("templates/footer.php") ?>