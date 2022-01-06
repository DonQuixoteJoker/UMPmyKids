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

		<div class="cards">
			<div class="card-single">
				<div>
                    <a href="manpower_register.php">
					<h1 id="manpower_register"></h1>
					<span>Register Manpower</span>
                    </a>
				</div>
				<div>
					<span class="las la-users"></span>
				</div> 
			</div>
            <div class="card-single">
				<div>
                    <a href="#">
					<h1 id="manpower_update"></h1>
					<span>Update Manpower</span>
                    </a>
				</div>
				<div>
					<span class="las la-users"></span>
				</div> 
			</div>
            <div class="card-single">
				<div>
                    <a href="#">
					<h1 id="manpower_delete"></h1>
					<span>Delete Manpower</span>
                    </a>
				</div>
				<div>
					<span class="las la-users"></span>
				</div> 
			</div>
            <div class="card-single">
				<div>
                    <a href="#">
					<h1 id="manpower_view"></h1>
					<span>View Manpower</span>
                    </a>
				</div>
				<div>
					<span class="las la-users"></span>
				</div> 
			</div>
            <div class="card-single">
				<div>
                    <a href="#">
					<h1 id="manpower_task"></h1>
					<span>Manpower Task</span>
                    </a>
				</div>
				<div>
					<span class="las la-users"></span>
				</div> 
			</div>
            <div class="card-single">
				<div>
                    <a href="#">
					<h1 id="manpower_report"></h1>
					<span>Report</span>
                    </a>
				</div>
				<div>
					<span class="las la-users"></span>
				</div> 
			</div>			
		</div>
		<div class="recent-grid">
			<div class="projects">
				<div class="card">
					<div class="card-header">
						<h3 class="heading">Users List</h3>
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
									<td>Admin</td>
									<td>5</td>
								</tr>
								<tr>
									<td>UMP Staff</td>
									<td>10</td>
								</tr>
								<tr>
									<td>Owner</td>
									<td>1</td>
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
						graph here
						
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
