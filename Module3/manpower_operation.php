<?php 
//database connection
$con = mysqli_connect("localhost", "root") or die(mysqli_connect_error());

// to select the targeted database
mysqli_select_db($con,"umpmykids") or die(mysqli_error());


//button submit create new manpower
if(isset($_POST["submitCreate"])){
    //echo "submitCreate";
    //post from create manpower
    $mpName = $_POST["mpName"];
    $userID = $_POST["userID"];
    $mpPhoneNo = $_POST["mpPhoneNo"];
    $mpOccupation = $_POST["mpOccupation"];
    $mpAddress = $_POST["mpAddress"];
    $mpRegisterYear = $_POST["mpRegisterYear"];
    $mpStatus = $_POST["mpStatus"];
    $mpSalary = $_POST["mpSalary"];
    $mpHistory = $_POST["mpHistory"];

    //form checked

    

    //create mpID from last row mpid
    

    $queryLastID = "SELECT * FROM manpower" or die(mysqli_error());

    $resultLastID = $con->query($queryLastID) or die($con->error);

    if($resultLastID->num_rows>0){

        while ($row = $resultLastID->fetch_assoc()) {
            $LastID = $row['mpID'];
        }

        $lastID_arr = str_split($LastID);

        $lastIDString = $lastID_arr[2].$lastID_arr[3].$lastID_arr[4];

        $lastIDString++;

        if((int)$lastIDString>99){
            $mpID = "MP".(int)$lastIDString;
        }
        elseif((int)$lastIDString>9){
            $mpID = "MP0".(int)$lastIDString;
        }
        else{
            $mpID = "MP00".(int)$lastIDString;
        }

        //$mpID = "MP00".(int)$lastIDString + 1;

        //echo $LastID;
        //print_r($lastID_arr);
        //print_r($lastIDString);
        //echo $mpID;  
    
    }else{
        $mpID = "MP001";
    }



    //insert into manpower table
    $queryInsert = "INSERT INTO manpower VALUES('$mpID', '$userID', '$mpName','$mpPhoneNo', '$mpOccupation', '$mpAddress', '$mpRegisterYear', '$mpStatus', '$mpSalary', '$mpHistory' )" or die(mysqli_error());

    $resultInsert = mysqli_query($con, $queryInsert);

    $con->close();

    header("Location:manpower_register.php");
}

//submit update form
if(isset($_POST["submitUpdate"])){

    $mpName = $_POST["mpName"];
    $userID = $_POST["userID"];
    $mpPhoneNo = $_POST["mpPhoneNo"];
    $mpOccupation = $_POST["mpOccupation"];
    $mpAddress = $_POST["mpAddress"];
    $mpRegisterYear = $_POST["mpRegisterYear"];
    $mpStatus = $_POST["mpStatus"];
    $mpSalary = $_POST["mpSalary"];
    $mpHistory = $_POST["mpHistory"];
    $mpID = $_POST["mpID"];

    $queryUpdate = "UPDATE manpower SET userID ='$userID', mpName='$mpName', mpPhoneNo='$mpPhoneNo', mpOccupation='$mpOccupation', mpAddress='$mpAddress', mpRegisterYear= '$mpRegisterYear', mpStatus= '$mpStatus', mpSalary= '$mpSalary', mpHistory= '$mpHistory' WHERE mpID='$mpID'" or die(mysqli_error());

    $resultUpdate = mysqli_query($con, $queryUpdate);

    $con->close();

    header("Location:manpower_view.php");
}

if(isset($_POST["submitDelete"])){

    $mpID = $_POST['mpID'];

    $queryDelete = "DELETE FROM manpower WHERE mpID='$mpID'" or die(mysqli_error());

    $resultDelete = mysqli_query($con, $queryDelete);

    $con->close();

    header("Location:manpower_view.php");
}
?>