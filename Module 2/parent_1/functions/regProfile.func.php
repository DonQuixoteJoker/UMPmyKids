<?php 

session_start();
include("../include/db.inc.php");

if($_SERVER["REQUEST_METHOD"] == "POST") {

    extract($_POST);


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


    $sql = "INSERT INTO parent (parName, parPhoneNum, parAddress, parYearReg, parStatus)
    VALUES( '$name', '$phoneNum', '$address', '$yearReg', '$status')";
    

    if(!mysqli_query($db, $sql)) {
        $_SESSION['message'] = "Profile Failed To Register!"; 
        header("Location: ../par_registration.php");
        exit();
    } 

    $_SESSION['message'] = "Profile Registered!"; 
    header("Location: ../par_registration.php");
    exit();

}