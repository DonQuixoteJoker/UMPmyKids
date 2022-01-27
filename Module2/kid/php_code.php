<?php 
	session_start();
	include("db.php");
    
	// initialize variables
	$kidName = "";
    $kidGender = "";
	$kidDob = "";
	$kidRace ="";
	$kidAllergy = "";
	$id = 0;
	$update = false;

	if (isset($_POST['save'])) {
		$kidName = $_POST['name'];
		$kidGender = $_POST['gender'];
		$kidDob = $_POST['dob'];
		$kidRace = $_POST['race'];
		$kidAllergy = $_POST['allergy'];

		$sql = "INSERT INTO kid (kidName,kidGender,kidDob,kidRace,kidAllergy) VALUES ('$kidName','$kidGender','$kidDob','$kidRace','$kidAllergy')";
		if(!mysqli_query($db, $sql)) {
			$_SESSION['message'] = "Profile Failed To Register"; 
		} 

		$_SESSION['message'] = "Profile Registered"; 
		header('location: register.php');
	}
    
	if (isset($_POST['update'])) {
		$id = $_POST['id'];
		$kidName = $_POST['name'];
		$kidGender = $_POST['gender'];
		$kidDob = $_POST['dob'];
		$kidRace = $_POST['race'];
		$kidAllergy = $_POST['allergy'];
	
		mysqli_query($db, "UPDATE kid SET name='$kidName', gender='$kidGender', dob='$kidDob', race='$kidRace', allergy='$kidAllergy' WHERE id=$id");
		$_SESSION['message'] = "Profile updated!"; 
		header('location: register.php');
	}
	if (isset($_GET['del'])) {
		$id = $_GET['del'];
		mysqli_query($db, "DELETE FROM kid WHERE id=$id");
		$_SESSION['message'] = "Profile deleted!"; 
		header('location: kid_list_del.php');
	}

		
