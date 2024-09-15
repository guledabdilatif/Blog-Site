<?php
$connection = mysqli_connect("localhost", "root", "", "blog");
if(!$connection){
    die("connection failed". mysqli_connect_error());
}

?>