
<?php 
//database connection
$con = mysqli_connect("localhost", "root") or die(mysqli_connect_error());

// to select the targeted database
mysqli_select_db($con,"umpmykids") or die(mysqli_error());



//button sumit create new manpower
if(isset($_POST["submitCreate"])){
    //echo "submitCreate";
    //post from create manpower
    $mpName = $_POST["mpName"];
    $mpPhoneNo = $_POST["mpPhoneNo"];
    $mpOccupation = $_POST["mpOccupation"];
    $mpAddress = $_POST["mpAddress"];
    $mpRegisterYear = $_POST["mpRegisterYear"];
    $mpStatus = $_POST["mpStatus"];
    $mpSalary = $_POST["mpSalary"];
    $mpHistory = $_POST["mpHistory"];

    $query = "INSERT INTO manpower VALUES('', '$name', '$age', '$gender', '$title', '$hobby', '$comment' )" or die(mysqli_error());

    $result = mysqli_query($con, $query);
}

//close/terminate server connection
$con->close();
?>