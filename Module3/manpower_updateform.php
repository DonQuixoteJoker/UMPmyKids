<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>Manpower Dashboard</title>
  <link rel="stylesheet" href="https://maxst.icons8.com/vue-static/landings/line-awesome/line-awesome/1.3.0/css/line-awesome.min.css">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
<link href="https://fonts.googleapis.com/css2?family=Rajdhani:wght@300;400;500;600&display=swap" rel="stylesheet">
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<link rel="stylesheet" href="../css/index.css">
<link rel="stylesheet" href="../css/manpower.css">

</head>
<body>
<!-- partial:index.partial.html -->
<input type="checkbox" id="nav-toggle"> 

<div class="sidebar">
 	<div class="sidebar-brand">
 		 	<h2><img src="../img/ump.png" alt="" height="40" width="25">&nbsp;<span id="kleenpulse" style="vertical-align: baseline;">UMP myKids</span></h2>
 	</div>
	 <div class="sidebar-menu">
	 	<ul>
	 		<li>
	 			<a href="index.html" class="active"><span class="las la-igloo"></span>
	 				<span>Dashboard</span>
	 			</a>
	 		</li>
			<li>
	 			<a href="#"><span class="las la-users"></span>
	 				<span>Student</span>
	 			</a>
	 		</li>
			<li>
	 			<a href="manpower.php"><span class="la la-user-circle"></span>
	 				<span>Manpower</span>
	 			</a>
	 		</li>
			<li>
	 			<a href="#"><span class="las la-shopping-bag"></span>
	 				<span>Payment</span>
	 			</a>
	 		</li>
	 	</ul>
	 </div>
 </div>

<div class="main-content">
	<header>
		<h2 class="heading" id="dashboard">
			<label for="nav-toggle">
				<span class="las la-bars"></span>
			</label>
			Create New Manpower
		</h2>
		
		<div class="user-wrapper">
			<img src="https://pbs.twimg.com/media/EItl_WGU0AAEf3i.jpg" alt="" height="40" width="40">
			<div>
				<h4>MUHD AFIF</h4>
				<small>Admin</small>
			</div>
		</div>
	</header>
	<main>

    <div>
			<div style="width:100%;">
				<div >
					<div class="card center"  style="width:400px;background:rgba(255,255,255,.4);">
						<div class="table-responsive">
                            <form action="manpower_operation.php" method="post">
                        <table action="manpower_operation.php" method="post">
                            <?php 
                                //database connection
                                $con = mysqli_connect("localhost", "root") or die(mysqli_connect_error());

                                // to select the targeted database
                                mysqli_select_db($con,"umpmykids") or die(mysqli_error());
                                $mpID = $_POST['mpID'];

                                $sqlView = "SELECT * FROM manpower WHERE mpID = '$mpID'";

                                $resultView = $con->query($sqlView);

                                if($resultView->num_rows>0){
                                    while($rowView = $resultView->fetch_assoc()){

                            ?>                            
                        <tr>
                            <td>Name:</td>
                            <td><input style="color:black;" type="text" name="mpName" placeholder="Name" value="<?php echo $rowView["mpName"]; ?>" required></td>
                        </tr>
                        <tr>
                            <td>Staff ID:</td>
                            <td>
                                <select name="userID">
                                    <label>Staff ID</label>
                                    <?php 
                                        
                                        $userID = $rowView["userID"];

                                        //select user table
                                        $sql = "SELECT * from user WHERE NOT userID='$userID'";

                                        $result = $con->query($sql);

                                        echo "<option value='".$rowView["userID"]."'>".$rowView["userID"]."</option>";
                                        if($result->num_rows>0){
                                            while($row = $result->fetch_assoc()){
                                                echo "<option value='".$row["userID"]."'>".$row["userID"]."</option>";
                                            }
                                        }
                                    ?>
                                </select>
                            </td>
                        </tr>
                        <tr>
                            <td>Phone No:</td>
                            <td><input style="color:black;" type="text" name="mpPhoneNo" placeholder="Phone Number" value="<?php echo $rowView["mpPhoneNo"]; ?>" required></td>
                        </tr>
                        <tr>
                            <td>Occupation:</td>
                            <td>
                                <select name="mpOccupation">
                                    <?php
                                        if($rowView["mpOccupation"]=="Teacher"){
                                            echo "<option value='Teacher'>Teacher</option>";
                                            echo "<option value='Caretaker'>Caretaker</option>";
                                            echo "<option value='Staff'>Staff</option>";
                                        }
                                        if($rowView["mpOccupation"]=="Caretaker"){                                            
                                            echo "<option value='Caretaker'>Caretaker</option>";
                                            echo "<option value='Teacher'>Teacher</option>";
                                            echo "<option value='Staff'>Staff</option>";
                                        }
                                        if($rowView["mpOccupation"]=="Staff"){
                                            echo "<option value='Staff'>Staff</option>";
                                            echo "<option value='Teacher'>Teacher</option>";
                                            echo "<option value='Caretaker'>Caretaker</option>";                                            
                                        }                                        
                                    ?>
                                </select>
                        
                            </td>
                        </tr>
                        <tr>
                            <td>Address:</td>
                            <td><input style="color:black;" type="text" name="mpAddress" placeholder="Home Address" value="<?php echo $rowView["mpAddress"]; ?>" required></td>
                        </tr>
                        <tr>
                            <td>Year Registered:</td>
                            <td><input style="color:black;" type="text" name="mpRegisterYear" placeholder="Year Registered" value="<?php echo $rowView["mpRegisterYear"]; ?>" required></td>
                        </tr>
                        <tr>
                            <td>Status:</td>
                            <td>
                                <select name="mpStatus">
                                <?php
                                        if($rowView["mpStatus"]=="Active"){
                                            echo "<option value='Active'>Active</option>";
                                            echo "<option value='Terminated'>Terminated</option>";
                                        }
                                        if($rowView["mpStatus"]=="Terminated"){                                            
                                            echo "<option value='Terminated'>Terminated</option>";
                                            echo "<option value='Active'>Active</option>";
                                        }                                       
                                    ?>
                                </select>
                        
                            </td>
                        </tr>
                        <tr>
                            <td>Salary:</td>
                            <td><input style="color:black;" type="text" name="mpSalary" placeholder="Salary" value="<?php echo $rowView["mpSalary"]; ?>" required></td>
                        </tr>
                        <tr>
                            <td>History:</td>
                            <td><input style="color:black;" type="text" name="mpHistory" placeholder="Medical History" value="<?php echo $rowView["mpHistory"]; ?>" required></td>
                        </tr>
                        <tr>
                            <td></td>
                            <td>
                                <input type="hidden" name="mpID" value="<?php echo $mpID; ?>">
                                <input style="color:black;" type="submit" name="submitUpdate">
                            </td>
                        </tr>
                        <?php 
                            }
                        } ?>

                    </table>
                    </form>
						</div>
					</div>
				</div>
			</div>
	</div>
		
	</main>
	<footer id="footer">
  
</footer>
</div>
<!-- partial -->
  <script src='https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js'></script><script  src="js/index.js"></script>
  <style>
.center{
    margin: auto;
    width: 50%;
    border: 3px solid green;
    padding: 10px;
}
      </style>

</body>
</html>
