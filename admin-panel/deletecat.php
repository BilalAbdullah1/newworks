<?php
include('dbconnect.php');



if(isset($_GET['id'])){
    $categoryId = $_GET['id'];
    $deleteQuery = "DELETE FROM `catagorytb` WHERE cid = '$categoryId'";
    $deleteResult = mysqli_query($connection, $deleteQuery);
    if($deleteResult) {
        echo "<script> alert('Category Deleted')</script>";
        header("Location: test.php"); 

    } else {
        echo "<script> alert('Error deleting category')</script>";
    }
}
?>