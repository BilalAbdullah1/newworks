<?php 

$server = "localhost";
$UserNmae = "root";
$Password = "";
$Database = "lab_automation";

$connection = mysqli_connect($server,$UserNmae,$Password,$Database);
if ($connection) {
}

else {
    die("Error". mysqli_connect_error());
}
?>