<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>Manpower Dashboard</title>
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
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<link rel="stylesheet" href="../css/index.css">
<link rel="stylesheet" href="../css/manpower.css">
<?php 
	//database connection
	$con = mysqli_connect("localhost", "root") or die(mysqli_connect_error());

	// to select the targeted database
	mysqli_select_db($con,"umpmykids") or die(mysqli_error());

	//total admin
	$resultTeacher = mysqli_query($con, "SELECT COUNT(*) AS totalTeacher FROM manpower WHERE mpOccupation='Teacher'");
	$num_rowsTeacher = mysqli_fetch_assoc($resultTeacher);

	//total staff
	$resultCaretaker = mysqli_query($con, "SELECT COUNT(*) AS totalCaretaker FROM manpower WHERE mpOccupation='Caretaker'");
	$num_rowsCaretaker = mysqli_fetch_assoc($resultCaretaker);

	//total owner
	$resultStaff = mysqli_query($con, "SELECT COUNT(*) AS totalStaff FROM manpower WHERE mpOccupation='Staff'");
	$num_rowsStaff = mysqli_fetch_assoc($resultStaff);
?>
<!-- google chart javascrip -->
<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
      google.charts.load('current', {'packages':['corechart']});
      google.charts.setOnLoadCallback(drawChart);

      function drawChart() {

		  var teacher = <?php echo $num_rowsTeacher['totalTeacher']; ?>;
		  var caretaker = <?php echo $num_rowsCaretaker['totalCaretaker']; ?>;
		  var staff = <?php echo $num_rowsStaff['totalStaff']; ?>;

        var data = google.visualization.arrayToDataTable([
          ['Task', 'Hours per Day'],
          ['Teacher',     teacher],
          ['Caretaker',      caretaker],
          ['Staff',  staff]
        ]);

        var options = {
          title: 'UMPMYKIDS Manpower List'
        };

        var chart = new google.visualization.PieChart(document.getElementById('piechart'));

        chart.draw(data, options);
      }
    </script>

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
			Dashboard
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

		<div class="cards" style="width: 100%;">
			<a href="manpower_register.php">
			<div class="card-single" style="width: 100%;">
				<div>
                    
					<h1 id="manpower_register"></h1>
					<span>Register Manpower</span>
                    
				</div>
				<div>
					<span class="las la-users"></span>
				</div>
			</div>
			</a> 
			<a href="manpower_view.php">
            <div class="card-single">
				<div>
                    
					<h1 id="manpower_update"></h1>
					<span>View Manpower</span>
                    
				</div>
				<div>
					<span class="las la-users"></span>
				</div> 
			</div>	
			</a>
			<a href="manpower_report.php">
            <div class="card-single">
				<div>
                    
					<h1 id="manpower_report"></h1>
					<span>Manpower Report</span>
                    
				</div>
				<div>
					<span class="las la-users"></span>
				</div> 
			</div>	
			</a>	
		</div>
		<div class="recent-grid">
			<div class="projects">
				<div class="card">
					<div class="card-header">
						<h3 class="heading">Manpower List</h3>
					</div>
					<div class="card-body">
						<div class="table-responsive">
							<table width="100%">
							<thead>
								<tr>
									<td>User</td>
									<td>Total</td>
								</tr>
								
							</thead>
							<tbody>
                                <tr>
									<td>Teacher</td>
									<td><?php echo $num_rowsTeacher['totalTeacher']; ?></td>
								</tr>
								<tr>
									<td>Caretaker</td>
									<td><?php echo $num_rowsCaretaker['totalCaretaker']; ?></td>
								</tr>
								<tr>
									<td>Staff</td>
									<td><?php echo $num_rowsStaff['totalStaff']; ?></td>
								</tr>
							</tbody>
						</table>
						</div>
					</div>
				</div>
			</div>
			<div class="customers">
				<div class="card">
					<div class="card-header">
						<h3 class="heading">Report</h3>
					</div>
					
					<div class="card-body">
						<!-- google graph -->
						<div class="center" id="piechart" style="width: 100%; height: 100%;"></div>
						
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
