<?php  
include("../connect.php") ;
 if(isset($_GET['id'])){
    $id= $_GET['id'];
    $query= "DELETE from posts WHERE id = '$id'";
     $query_run = mysqli_query($connection, $query);

     if($query_run){
        header("Location: index.php");
     }else{
        echo "not deleted";
     }
 }

?>