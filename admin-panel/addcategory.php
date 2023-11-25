<?php 

include('dbconnect.php');


if(isset($_POST['AddCategory'])){
    $categoryname = $_POST['categoryname'];
    $query = "INSERT INTO `catagorytb` (`catname`) VALUES ('$categoryname')";
    $result = mysqli_query($connection, $query);
    if($result) {
        echo "<script> alert('Category Add')</script>";
     }else {
        echo "<script> alert('Error')</script>";
     };
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Colorlib Templates">
    <meta name="author" content="Colorlib">
    <meta name="keywords" content="Colorlib Templates">

    <!-- Title Page-->
    <title>Product</title>

    <!-- Icons font CSS-->
    <link href="vendor/mdi-font/css/material-design-iconic-font.min.css" rel="stylesheet" media="all">
    <link href="vendor/font-awesome-4.7/css/font-awesome.min.css" rel="stylesheet" media="all">
    <!-- Font special for pages-->
    <link href="https://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i"
        rel="stylesheet">

    <!-- Vendor CSS-->
    <link href="vendor/select2/select2.min.css" rel="stylesheet" media="all">
    <link href="vendor/datepicker/daterangepicker.css" rel="stylesheet" media="all">

    <link rel="stylesheet" href="css/catagory.css">

    <!-- Main CSS-->
    <link href="css/main.css" rel="stylesheet" media="all">
</head>

<body>
    <div class="page-wrapper bg-blue p-t-100 p-b-100 font-robo">
        <div class="wrapper wrapper--w680">
            <div class="card card-1">
                <!-- <div class="card-heading"></div> -->
                <div class="card-body">
                    <h2 class="title">Add Catagory</h2>
                    <form action="<?php echo $_SERVER["PHP_SELF"]; ?>" method="POST">
                        <div class="input-group">
                            <input class="input--style-1" type="text" placeholder="Catagory Name" name="categoryname">
                        </div>

                        <div class="p-t-20">
                            <button class="btn btn--radius btn--green" type="submit" name= "AddCategory">Add Catagory</button>
                        </div>
                    </form>
            
                </div>
            </div>
        </div>
    </div>




    


    
    <!-- Jquery JS-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <!-- Vendor JS-->
    <script src="vendor/select2/select2.min.js"></script>
    <script src="vendor/datepicker/moment.min.js"></script>
    <script src="vendor/datepicker/daterangepicker.js"></script>

    <!-- Main JS-->
    <script src="js/global.js"></script>

</body>

</html>
<!-- end document-->