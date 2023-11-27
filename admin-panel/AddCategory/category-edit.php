<?php
include ("connection.php" );
$name= $_POST['catname' ];
// $email= $_POST['email' ];
// $address= $_POST['address' ];
// $phone= $_POST['phone' ];
$id= $_POST['cid' ];
$sql= "UPDATE `catagorytb`  SET  `catname` = '". $name."' WHERE `cid` = $id " ;

if(mysqli_query($conn , $sql)){
    $response = [
        'status'=>'ok',
        'success'=>true,
        'message'=>'Record updated succesfully!'
    ];
    print_r(json_encode($response));
}else{
    $response = [
        'status'=>'ok',
        'success'=>false,
        'message'=>'Record updated failed!'
    ];
    print_r(json_encode($response));
} 
?>