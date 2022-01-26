<!--// CD19046 LEE ZI XUAN-->
<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>UMP-myKids</title>
  <link rel="stylesheet" href="https://maxst.icons8.com/vue-static/landings/line-awesome/line-awesome/1.3.0/css/line-awesome.min.css">
<meta name="viewport" content="width=device-width initial-scale =1">
    <meta name="description" content="how to create a toggle for light and dark mode using html,css and javascript">
<meta name="description" content="toggle dark/light mode">
<meta name="tags" content="toggle,darkmode,web design,admin dashboard,glassmorphism,codepen">
<meta name="description" content="design a website">
<meta name="description" content="create a glassmorphism website">
    <meta name="keyword" content="dark mode, html,css,javascript, coding, programming, how to,learn">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
<link href="https://fonts.googleapis.com/css2?family=Rajdhani:wght@300;400;500;600&display=swap" rel="stylesheet">
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1"><link rel="stylesheet" href="css/index.css">

</head>

<?php
	include('function.php');
	error_reporting(E_ALL & ~E_NOTICE);
	
    $query = "SELECT *, count(userType) as number FROM user GROUP BY userType"; 
	$result = mysqli_query($con, $query);
?>

<script src="https://www.gstatic.com/charts/loader.js"></script>  
<script>
    google.charts.load('current', {'packages':['corechart']});  
        google.charts.setOnLoadCallback(drawChart);  
		function drawChart() {  
            var data = google.visualization.arrayToDataTable([['type', 'number'],  
            <?php  
                while($row = mysqli_fetch_array($result)) {  
                    echo "['".$row["userType"]."', ".$row["number"]."],";  
                }  
            ?>  
            ]);  
            var option = {   
				title: 'THE TOTAL NUMBER OF USER BASED ON USER TYPE',
				is3D:true,
            };  
            var chart = new google.visualization.PieChart(document.getElementById('piechart'));  
            chart.draw(data, option);  
		}

</script>

<body>
<!-- partial:index.partial.html -->
<input type="checkbox" id="nav-toggle"> 

<div class="sidebar">
 	<div class="sidebar-brand">
 		 	<h2><img src="img/ump.png" alt="" height="40" width="25">&nbsp;<span id="kleenpulse" style="vertical-align: baseline;">UMP myKids</span></h2>
 	</div>
	 <div class="sidebar-menu">
	 	<ul>
	 		<li>
	 			<a href="adminDashboard.php" class="active"><span class="las la-igloo"></span>
	 				<span>Dashboard</span>
	 			</a>
	 		</li>
			<li>
	 			<a href="manpower.php"><span class="la la-user-circle"></span>
	 				<span>Manpower</span>
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
			Dashboard
		</h2>
		
		<div class="user-wrapper">
			<img src="https://simg.nicepng.com/png/small/128-1280406_view-user-icon-png-user-circle-icon-png.png" alt="" height="40" width="40">
			<div>
				<h4>USER TYPE</h4>
				<small>Admin</small>
			</div>
            <div style="margin-left: 20px;">
                <h3><a style="color: black;" href="function.php?logout='1'">Log Out</a></h3>
            </div>
        </div>
	</header>
	<main>

		<div class="cards">
            <a href="createUser.php" >
            <div class="card-single">
				<div>
					<span>Create New User</span>
				</div>
				<div>
					<span class="las la-users"></span>
				</div>
            </div>
            </a>

			<a href="updateUser.php" >
                <div class="card-single">
				<div>
					<span>Update User Profile</span>
					</div>
				<div>
					<span class="las la-users"></span>
				</div>
			</div>
            </a>

            <a href="deleteUser.php" >
			<div class="card-single">
				<div>
					<span>Delete User Profile</span>
					</div>
				<div>
					<span class="las la-users"></span>
				</div>
			</div>
            </a>

            <a href="viewUser.php" >
			<div class="card-single">
				<div>
					<span>View User Profile</span>
					</div>
				<div>
					<span class="las la-users"></span>
				</div>
			</div>
            </a>
		</div>

		

 
		
		<div class="recent-grid">
		<a href="userList.php" >
			<div class="projects">
				<div class="card">
					<div class="card-header">
						<h3 class="heading">User List</h3>
						<button>See all <span class="las la-arrow-right"></span></button>
					</div>
					<div class="card-body">
						<div class="table-responsive">
							<table width="100%">
							<thead>
								<tr>
									<td>User Type</td>
									<td>Number of User</td>
								</tr>
							</thead>
							<tbody>
								<tr>
									<td>System Adminstrator</td>
									<td>
									<?php
									$query2 = "SELECT COUNT(userID) as totalAdmin FROM user WHERE userType = 'admin'";
                                    $result2 = mysqli_query($con, $query2);
                                    $totalAdmin = mysqli_fetch_assoc($result2);
									echo $totalAdmin['totalAdmin'];
                                    ?>
									</td>
								</tr>
								<tr>
									<td>UMP Staff</td>
									<td>
									<?php
                                    $query4 = "SELECT COUNT(userID) as totalStaff FROM user WHERE userType = 'UMP Staff'";
                                    $result4 = mysqli_query($con, $query4);
                                    $totalStaff = mysqli_fetch_assoc($result4);
									echo $totalStaff['totalStaff'];
                                    ?>
									</td>
									
								</tr>
								<tr>
									<td>Owner</td>
									<td>
									<?php
                                    $query3 = "SELECT COUNT(userID) as totalOwner FROM user WHERE userType = 'owner'";
                                    $result3 = mysqli_query($con, $query3);
                                    $totalOwner = mysqli_fetch_assoc($result3);
									echo $totalOwner['totalOwner'];
                                    ?>
									</td>
									
								</tr>
							</tbody>
						</table>
						</div>
					</div>
				</div>
			</div>
		</a>



		<a href="report.php" >
			<div class="customers">
				<div class="card">
					<div class="card-header">
						<h3 class="heading">Report</h3>
						<button>See all<span class="las la-arrow-right"></span></button>
					</div>
					
					<div class="card-body">
						<div class="customer">
							<div id="piechart" style="width: 80%; height: 200px; margin: 0 10%; border: 1px solid #ccc"></div>
						</div>
						
						
						
					</div>
				</div>
			</div>
		</a>
		</div>
	
	</main>
    
	<footer id="footer">
	<p>Copyright 2021, All Right Reserved</p>

</footer>
</div>
<!-- partial -->
  <script src='https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js'></script><script  src="js/index.js"></script>

</body>
</html>
