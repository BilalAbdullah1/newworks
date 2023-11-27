<?php
include 'dbconn.php';
if(isset($_POST['submit'])){

    $categoryname = mysqli_real_escape_string($conn, $_POST['categoryname']);
  

      $insertquery =  "INSERT INTO `catagorytb`(catname)
                     VALUES ('$categoryname')";
        $mysqliquery = mysqli_query($conn, $insertquery);
    if($insertquery){
        ?>
    <script>
        window.location.replace("index.php");
    </script>

<?php 

    }else{
        echo 'Not Inserted';
    }



}



?>