<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Blog: login</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<style>

</style>

<body>
  <?php 
    session_start();
    $error_message = "";
    
    // Check if there's an error message in the session
    if (isset($_SESSION['login_error'])) {
        $error_message = $_SESSION['login_error'];
        unset($_SESSION['login_error']); // Clear the error message after displaying it
    }
    
  ?>
  <h1 class="text-center">Login</h1>
  <div class="container">
    <form action="admin/code.php" method="POST" class="mt-4 col-md-6">
      <div class="mb-2">
        <input type="text" class="form-control" name="username">
      </div>
      <div class="mb-2">
        <input type="password" class="form-control my-4" name="password">
      </div>
      <input class="btn btn-primary btn-sm" type="submit" value="login" name="login">
    </form>
  </div>
  <p style="color: red;"><?php echo $error_message; ?></p>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
    crossorigin="anonymous"></script>
</body>

</html>