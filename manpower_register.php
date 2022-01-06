<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>Manpower Dashboard</title>
  <link rel="stylesheet" href="https://maxst.icons8.com/vue-static/landings/line-awesome/line-awesome/1.3.0/css/line-awesome.min.css">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
<link href="https://fonts.googleapis.com/css2?family=Rajdhani:wght@300;400;500;600&display=swap" rel="stylesheet">
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<link rel="stylesheet" href="css/index.css">
<link rel="stylesheet" href="css/manpower.css">

</head>
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

    <div class="recent-grid">
			<div class="projects">
				<div class="card">
					<div class="card-body">
						<div class="table-responsive">
                            <form action="manpower_operation.php" method="post">
                        <table action="manpower_operation.php" method="post">
                        <tr>
                            <td>Name:</td>
                            <td><input style="color:black;" type="text" name="mpName" placeholder="Name"></td>
                        </tr>
                        <tr>
                            <td>Staff ID:</td>
                            <td>
                                <select name="userID">
                                    <label>Staff ID</label>
                                    <option value="staff1">staff1</option>
                                    <option value="staff2">staff2</option>
                                    <option value="staff3">staff3</option>
                                    <option value="staff4">staff4</option>

                                </select>
                            </td>
                        </tr>
                        <tr>
                            <td>Phone No:</td>
                            <td><input style="color:black;" type="text" name="mpPhoneNo" placeholder="Phone Number"></td>
                        </tr>
                        <tr>
                            <td>Occupation:</td>
                            <td><input style="color:black;" type="text" name="mpOccupation" placeholder="Occupation"></td>
                        </tr>
                        <tr>
                            <td>Address:</td>
                            <td><input style="color:black;" type="text" name="mpAddress" placeholder="Home Address"></td>
                        </tr>
                        <tr>
                            <td>Year Registered:</td>
                            <td><input style="color:black;" type="text" name="mpRegisterYear" placeholder="Year Registered"></td>
                        </tr>
                        <tr>
                            <td>Status:</td>
                            <td><input style="color:black;" type="text" name="mpStatus" placeholder="Status"></td>
                        </tr>
                        <tr>
                            <td>Salary:</td>
                            <td><input style="color:black;" type="text" name="mpSalary" placeholder="Salary"></td>
                        </tr>
                        <tr>
                            <td>History:</td>
                            <td><input style="color:black;" type="text" name="mpHistory" placeholder="Medical History"></td>
                        </tr>
                        <tr>
                            <td></td>
                            <td>
                                <input style="color:black;" type="submit" name="submitCreate">
                                <input style="color:black;" type="reset" name="reset" value="Reset">
                            </td>
                        </tr>

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

</body>
</html>
