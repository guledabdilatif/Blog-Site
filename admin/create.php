<?php
include("templates/header.php")
?>
        <div class="col-md-9 mt-5">
            <form action="code.php" method="POST">
                <div class="mb-3">
                    <input type="text" class="form-control" name="title" placeholder="title...">
                </div>
                <div class="mb-3">
                    <textarea name="summary" class="form-control" id="" placeholder="enter summary..."></textarea>
                </div>
                <div class="mb-3">
                    <textarea name="description" cols="30" rows="10" class="form-control" id=""
                        placeholder="enter description..."></textarea>
                </div>
                <input type="hidden" name="date" value="<?php echo date("y/m/d"); ?>">
                <div class="mb-3">
                    <input type="submit" value="submit" class="btn btn-primary" name="create">
                </div>

            </form>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
        crossorigin="anonymous"></script>
        <?php
include("templates/footer.php")
?>