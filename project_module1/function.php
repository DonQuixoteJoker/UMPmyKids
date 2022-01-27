<?php
// CD19046 LEE ZI XUAN
session_start();

	$errors = array();
	
	require_once("connection.php");

	$userID = null;
	$userName = null;
	$userPassword = null;
	$userType = null;
                          
                    
	
	if (isset($_POST['login'])) {
		$userID = mysqli_real_escape_string($con, $_POST['userID']);
		$userPassword = mysqli_real_escape_string($con, $_POST['userPassword']);
		$userType = mysqli_real_escape_string($con, $_POST['userType']);
		
		$query = "SELECT * FROM user WHERE userID='$userID' AND userPassword='$userPassword' AND userType='$userType'";
		$result = mysqli_query($con, $query) or die ("Could not execute query");
		
		if (mysqli_num_rows($result) == 1) 
        {
			while($row = mysqli_fetch_assoc($result)) 
            {
				$_SESSION["userID"] = $row['userID'];
				$_SESSION["userName"] = $row['userName'];
				$_SESSION["userPassword"] = $row['userPassword'];
				$_SESSION["userType"] = $row['userType'];
				if($userType == "admin") 
                {
					header('location: adminDashboard.php');
				} else if($userType == "owner") 
                {
					header('location: ../owner_dashboard.php');
				} else if($userType == "UMP Staff") 
                {
					;
				} 
			}
		} 
        else 
        {
			array_push($errors, "Wrong username or password !!!");
		}
	}

    if(isset($_GET['logout'])) {
		session_destroy();
		unset($_SESSION['userID']);
		unset($_SESSION['userName']);
		unset($_SESSION['userPassword']);
		unset($_SESSION['userType']);
		header('location: login.php');
	}

	if (isset($_POST['createUser'])) 
	{
		$userID = mysqli_real_escape_string($con, $_POST['userID']);
		$userName = mysqli_real_escape_string($con, $_POST['userName']);
		$userPassword = mysqli_real_escape_string($con, $_POST['userPassword']);
		$userType = mysqli_real_escape_string($con, $_POST['userType']);
		
		$query = "SELECT * FROM user WHERE userID='$userID'";
		$check = mysqli_query($con, $query) or die ("Could not execute query");
		
		if(mysqli_num_rows($check) != 0) 
		{
			array_push($errors, "The User ID already exist!");
		} 
		else 
		{
			if(count($errors) == 0) 
			{
				$query1 = "INSERT INTO user VALUES ('$userID', '$userType', '$userName','$userPassword')";
				$result = mysqli_query($con, $query1) or die ("Could not execute query");
				header('location: adminDashboard.php');
			}			
		}
	}

	if (isset($_POST['updateUser'])) 
	{
		$userID = mysqli_real_escape_string($con, $_POST['userID']);
		$userName = mysqli_real_escape_string($con, $_POST['userName']);
		$userPassword = mysqli_real_escape_string($con, $_POST['userPassword']);
		$userType = mysqli_real_escape_string($con, $_POST['userType']);
		
		$query = "UPDATE user SET userName = '$userName', userPassword = '$userPassword', userType = '$userType' WHERE userID = '$userID'";
	    $result = mysqli_query($con, $query);

		if($result){
			header('location: adminDashboard.php');
		}


	}

	if (isset($_POST['updateUser_userList'])) 
	{
		$userID = mysqli_real_escape_string($con, $_POST['userID']);
		$userName = mysqli_real_escape_string($con, $_POST['userName']);
		$userPassword = mysqli_real_escape_string($con, $_POST['userPassword']);
		$userType = mysqli_real_escape_string($con, $_POST['userType']);
		
		$query = "UPDATE user SET userName = '$userName', userPassword = '$userPassword', userType = '$userType' WHERE userID = '$userID'";
	    $result = mysqli_query($con, $query);

		if($result){
			header('location: userList.php');
		}


	}


	if (isset($_POST['deleteUser'])) 
	{
		$userID = $_POST['userID'];
        $query = "DELETE FROM user WHERE userID ='$userID'";
        $result = mysqli_query($con, $query);

        if(isset($result)) {
			header('location: adminDashboard.php');
		}
		

	}

	if (isset($_POST['deleteUser_userList'])) 
	{
		$userID = $_POST['userID'];
        $query = "DELETE FROM user WHERE userID ='$userID'";
        $result = mysqli_query($con, $query);

        if(isset($result)) {
			header('location: userList.php');
		}
		

	}

	if (isset($_POST['viewUser'])) 
	{
		$userID = $_POST['searchID'];
		$query = "SELECT * FROM user WHERE userID = '$userID'";
		$result = mysqli_query($con, $query) or die ("Could not execute query");
		
			
		
		if (mysqli_num_rows($result) == 1) 
        {
			$row = mysqli_fetch_assoc($result);
			$userID = $row['userID'];
		    $userName = $row['userName'];
	    	$userPassword = $row['userPassword'];
	    	$userType = $row['userType'];
		} 
        else 
        {
			array_push($errors, "The User ID dosn't exist!");
		}
		

	}




    ?>