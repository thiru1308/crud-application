<?php 
    include("dbconn.php");
    $delete = $_GET["del"];
    $sql = "DELETE FROM student WHERE id = '$delete'";
    if(mysqli_query($conn,$sql)){
        header("location: index.php");
    }
    else{
        echo"Can't delete the data";
    }
?>