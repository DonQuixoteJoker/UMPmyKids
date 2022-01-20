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
			Manpower
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

    <div >
			<div class="projects">
				<div class="card">
					<div class="card-body">
						<div class="table-responsive">
                        <table>
                                    <thead>
                                        <tr>
                                            <td>User ID</td>
                                            <td>Name</td>
                                            <td>Phone No</td>
                                            <td>Occupation</td>
                                            <td>Address</td>
                                            <td>Register Year</td>
                                            <td>Status</td>
                                            <td>Salary</td>
                                            <td>History</td>
                                            <td style="text-align:center;">Action</td>
                                        </tr>
                                    </thead>

                                    <?php 
                                        //database connection
                                        $con = mysqli_connect("localhost", "root") or die(mysqli_connect_error());

                                        // to select the targeted database
                                        mysqli_select_db($con,"umpmykids") or die(mysqli_error());

                                        $sql = "SELECT * from manpower";

                                        $result = $con->query($sql);
                                    
                                    ?>
                                    
                                    <tbody>
                                        <?php while($row = $result->fetch_assoc()){ ?>
                                        <tr>
                                            
                                            <td><?php echo $row["userID"]; ?></td>
                                            <td><?php echo $row["mpName"]; ?></td>
                                            <td><?php echo $row["mpPhoneNo"]; ?></td>
                                            <td><?php echo $row["mpOccupation"]; ?></td>
                                            <td><?php echo $row["mpAddress"]; ?></td>
                                            <td><?php echo $row["mpRegisterYear"]; ?></td>
                                            <td><?php echo $row["mpStatus"]; ?></td>
                                            <td><?php echo $row["mpSalary"]; ?></td>
                                            <td><?php echo $row["mpHistory"]; ?></td>
                                            <td>
                                                <form action="manpower_updateform.php" method="post"><button name="update" type="submit" value="submit">Update</button><input type="hidden" name="mpID" value="<?php echo $row["mpID"]; ?>"></form>
                                                <form action="manpower_operation.php" method="post"><button name="submitDelete" type="submit" value="delete">Delete</button><input type="hidden" name="mpID" value="<?php echo $row["mpID"]; ?>"></form>
                                            </td>
                                            
                                        </tr>
                                        <?php } ?>
                            </tbody>
                                </table>
                                </div>
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

</body>
</html>
