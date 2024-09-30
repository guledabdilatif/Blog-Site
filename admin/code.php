<?php
include("../connect.php");
if (isset($_POST['create'])) {
    $title = mysqli_real_escape_string($connection, $_POST['title']);
    $summary = mysqli_real_escape_string($connection, $_POST['summary']);
    $description = mysqli_real_escape_string($connection, $_POST['description']);
    $date = mysqli_real_escape_string($connection, $_POST['date']);
    // echo $title, $summary, $description, $date;
    $query = "INSERT INTO posts(date, title, summary, description) VALUES('$date', '$title', '$summary','$description')";
    $query_run = mysqli_query($connection, $query);
    if (!$query_run) {
        die('data not inserted');
    } else {
        header("Location: create.php");
    }

}
if (isset($_POST['update'])) {
    $id = mysqli_real_escape_string($connection, $_POST['id']);
    $title = mysqli_real_escape_string($connection, $_POST['title']);
    $summary = mysqli_real_escape_string($connection, $_POST['summary']);
    $description = mysqli_real_escape_string($connection, $_POST['description']);
    $date = mysqli_real_escape_string($connection, $_POST['date']);
    // echo $title, $summary, $description, $date;
    $query = "UPDATE posts SET title= '$title',  summary=' $summary', description='$description' WHERE id = '$id'";

    $query_run = mysqli_query($connection, $query);
    if (!$query_run) {
        die('data not update');
    } else {
        echo 'data updated';
        header("Location: index.php");
    }

}
if (isset($_POST['login'])) {
    $username = mysqli_real_escape_string($connection, $_POST['username']);
    $password = mysqli_real_escape_string($connection, $_POST['password']);

    $query = "SELECT * FROM posts WHERE username= '$username' AND password= '$password'";
    $query_run = mysqli_query($connection, $query);

    if (mysqli_num_rows($query_run) > 0) {
        session_start();
        $_SESSION['uname'] = $username;
        $_SESSION['upass'] = $password;
        header("Location: index.php");
    } else {
        header("Location: ../index.php");
    }

}

?>