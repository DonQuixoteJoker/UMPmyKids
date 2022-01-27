<?php 

session_start();
include("../include/db.inc.php");

if($_SERVER["REQUEST_METHOD"] == "POST") {

    extract($_POST);

    $parID = intval($parent_id);

    if(empty($name)) {
        echo "<script>alert('Please Enter Your Name.'); window.history.go(-1);</script>";
        exit();
    }

    if(empty($phoneNum)) {
        echo "<script>alert('Please Enter Your Phone Number.'); window.history.go(-1);</script>";
        exit();
    }

    if(empty($address)) {
        echo "<script>alert('Please Enter Your Address.'); window.history.go(-1);</script>";
        exit();
    }

    if(empty($yearReg)) {
        echo "<script>alert('Please Enter Your Year Registration.'); window.history.go(-1);</script>";
        exit();
    }

    if(empty($status)) {
        echo "<script>alert('Please Enter Your Status.'); window.history.go(-1);</script>";
        exit();
    }


    $sql = "UPDATE parent SET 
    parName = '$name', 
    parPhoneNum = '$phoneNum', 
    parAddress = '$address', 
    parYearReg = '$yearReg', 
    parStatus = '$status'
    WHERE parID = '$parID'";

    if(!mysqli_query($db, $sql)) {
        $_SESSION['message'] = "Update Failed!"; 
        header("Location: ../edit.php?id=$parID");
        exit();
    } 

    $_SESSION['message'] = "Update Profile Success!"; 
    header("Location: ../edit.php?id=$parID");
    exit();

}




?>