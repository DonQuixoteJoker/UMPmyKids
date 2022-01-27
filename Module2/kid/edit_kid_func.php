<?php 

session_start();
include("db.php");

if($_SERVER["REQUEST_METHOD"] == "POST") {

    extract($_POST);

    $kidId = intval($kid_id);

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


    $sql = "UPDATE kid SET 
    kidName = '$name', 
    kidGender = '$gender',  
    kidDob = '$dob', 
    kidRace = '$race',
    kidAllergy = '$allergy'
    WHERE kidId = '$kidId'";

    if(!mysqli_query($db, $sql)) {
        $_SESSION['message'] = "Update Failed!"; 
        header("Location: edit_kid.php?id=$kidId");
        exit();
    } 

    $_SESSION['message'] = "Update Profile Success!"; 
    header("Location: edit_kid.php?id=$kidId");
    exit();

}




?>