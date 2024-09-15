<?php include("templates/header.php") ?>
<div class="col-md-9 mt-5">

    <table class="table table-bordered w-100%">
        <thead>
            <tr>
                <th scope="col">Publiction date</th>
                <th scope="col">Title</th>
                <th scope="col">Summary</th>
                <th scope="col">Description</th>
                <th scope="col">Actions</th>
            </tr>
        </thead>
        <tbody>
            <?php
            include("../connect.php");
            $query = "SELECT * FROM posts";
            $query_run = mysqli_query($connection, $query);
            if (mysqli_num_rows($query_run) > 0) {
                foreach ($query_run as $row) {
                    ?>
                    <tr>
                        <td scope="row"><?php echo $row['date'] ?></td>
                        <td scope="row"><?php echo $row['title'] ?></td>
                        <td scope="row"><?php echo $row['summary'] ?></td>
                        <td scope="row"><?php echo $row['description'] ?></td>
                        <td class="d-flex">
                            <a href="view.php?id=<?php echo $row['id']?>" class="btn btn-success me-1 btn-sm">view</a>
                            <a href="edit.php?id=<?php echo $row['id']?>" class="btn btn-primary me-1 btn-sm">edit</a>
                            <a href="delete.php?id=<?php echo $row['id']?>" class="btn btn-danger btn-sm">delete</a>
                        </td>

                    </tr>
                    <?php
                }
            }

            ?>


        </tbody>
    </table>
</div>

<?php include("templates/footer.php") ?>