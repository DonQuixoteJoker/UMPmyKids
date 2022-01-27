<?php 
	session_start();
	include("../include/db.inc.php");

	// initialize variables
	$parName = "";
    $parPhoneNum = "";
	$parAddress = "";
	$parYearReg ="";
	$parStatus = "";
	$id = 0;
	$update = false;

	if (isset($_POST['save'])) {
		$parName = $_POST['name'];
		$parPhoneNum = $_POST['phoneNum'];
		$parAddress = $_POST['address'];
		$parYearReg = $_POST['yearReg'];
		$parStatus = $_POST['status'];

		$sql = "INSERT INTO parent (parName, parPhoneNum, parAddress, parYearReg, parStatus) VALUES ('$parName', '$parPhoneNum', '$parAddress', '$parYearReg', '$parStatus')";
		if(!mysqli_query($db, $sql)) {
			$_SESSION['message'] = "Profile Failed To Register"; 
		} 

		$_SESSION['message'] = "Profile Registered"; 
		header('location: par_registration.php');
	}
		
	if (isset($_POST['update'])) {
		$id = $_POST['id'];
		$parName = $_POST['name'];
        $parPhoneNum = $_POST['phoneNum'];
	    $parAddress = $_POST['address'];
	    $parYearReg = $_POST['yearReg'];
	    $parStatus = $_POST['status'];
	
		mysqli_query($db, "UPDATE parent SET name='$parName', phoneNum='$parPhoneNum', address='$parAddress', yearReg='$parYearReg', status='$parStatus' WHERE id=$id");
		$_SESSION['message'] = "Profile updated!"; 
		header('location: par_registration.php');
	}
	if (isset($_GET['del'])) {
		$id = $_GET['del'];
		mysqli_query($db, "DELETE FROM parent WHERE id=$id");
		$_SESSION['message'] = "Profile deleted!"; 
		header('location: par_registration.php');
	}
	

		
