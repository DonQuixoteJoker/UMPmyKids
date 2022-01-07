<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
  <title>Salary</title>
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
<body>
<input type="checkbox" id="nav-toggle"> 

<div class="sidebar">
        <div class="sidebar-brand">
            <h2><img src="img/ump.png" alt="" height="40" width="25">&nbsp;<span id="kleenpulse"
                    style="vertical-align: baseline; position:fixed; overflow: hidden;">UMP myKids</span></h2>
        </div>
	 <div class="sidebar-menu">
	 	<ul>
	 		<li>
	 			<a href="adminDashboard.php" class="active"><span class="las la-igloo"></span>
	 				<span>Dashboard</span>
	 			</a>
	 		</li>
             <li>
                    <a href="../Module4/payment_page.php" style="text-decoration:none"><span class="las la-users"></span>
                        <span>Payment</span>
                    </a>
            </li>
            <li>
                 <a href="salaryMain.php" style="text-decoration:none"><span class="las la-shopping-bag"></span>
                    <span>Salary</span>
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
            <div class="user-wrapper">
                <img src="https://pbs.twimg.com/media/EItl_WGU0AAEf3i.jpg" alt="" height="40" width="40">
                <div>
                    <h4>User</h4>
                    <small>Owner UMP-myKids</small>
                </div>
            </div>
            <div>
                <a style="color: black;" href="function.php?logout='1'"><b>Log Out</b></a>
            </div>
        </div>
	</header>
	<main>

		<!--<div class="cards">
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
					<span class="las la-clipboard"></span>
				</div>
			</div>
            </a>

            <a href="deleteUser.php" >
			<div class="card-single">
				<div>
					<span>Delete User Profile</span>
					</div>
				<div>
					<span class="las la-shopping-bag"></span>
				</div>
			</div>
            </a>

            <a href="viewUser.php" >
			<div class="card-single">
				<div>
					<span>View User Profile</span>
					</div>
				<div>
					<span class="lab la-google-wallet"></span>
				</div>
			</div>
            </a>
		</div>-->


	</main>
    
	<footer id="footer">
	<p>Copyright 2021, All Right Reserved</p>

</footer>
</div>
<!-- partial -->
  <script src='https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js'></script><script  src="js/index.js"></script>

</body>
</html>