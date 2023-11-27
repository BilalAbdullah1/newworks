<?php

$server = "localhost";
$user = "root";
$password = "";
$db = "lab_automation";
$conn = mysqli_connect($server,$user,$password,$db);
if($conn){
echo 'Connection Successfully';

}else{
    echo 'Not Connected';
}


?>