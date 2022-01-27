<?php 

session_start();
include("db.php");

if($_SERVER["REQUEST_METHOD"] == "POST") {

    extract($_POST);

    if(empty($name)) {
        echo "<script>alert('Please Enter Your Kid Name.'); window.history.go(-1);</script>";
        exit();
    }

    if(empty($gender)) {
        echo "<script>alert('Please Enter Your Kid Gender.'); window.history.go(-1);</script>";
        exit();
    }

    if(empty($dob)) {
        echo "<script>alert('Please Enter Your Kid Date of Birth.'); window.history.go(-1);</script>";
        exit();
    }

    if(empty($race)) {
        echo "<script>alert('Please Enter Your Kid Race.'); window.history.go(-1);</script>";
        exit();
    }
    if(empty($allergy)) {
        echo "<script>alert('Please Enter Your Kid Allergy.'); window.history.go(-1);</script>";
        exit();
    }


    $sql = "INSERT INTO kid (kidName, kidGender, kidDob, kidRace, kidAllergy) 
    VALUES ('$name', '$gender', '$dob', '$race', '$allergy')";
    

    if(!mysqli_query($db, $sql)) {
        $_SESSION['message'] = "Profile Failed To Register!"; 
        header("Location: register.php");
        exit();
    } 

    $_SESSION['message'] = "Profile Registered!"; 
    header("Location: register.php");
    exit();

}




?>