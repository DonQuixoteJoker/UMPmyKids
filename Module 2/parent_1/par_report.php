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
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1"><link rel="stylesheet" href="../css/index.css">
</head>

<style>

th, td
{
	background-color:"white";
    padding: 20px;
	width: 80%;
	border:1px solid black;
  border-collapse:collapse;
	text-align: left;
  margin-align: center;
}

.center {
  margin-left: auto;
  margin-right: auto;
}
</style>

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
	 			<a href="adminDashboard.php" class="active"><span class="las la-igloo"></span>
	 				<span>Dashboard</span>
	 			</a>
	 		</li>
			<li>
	 			<a href="index.php"><span class="la la-user-circle"></span>
	 				<span>Parent</span>
	 			</a>
	 		</li>
             <li>
	 			<a href="../kid/index.php"><span class="la la-user-circle"></span>
	 				<span>Kid</span>
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
			 Parent Report
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
  <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
      google.charts.load('current', {'packages':['corechart']});
      google.charts.setOnLoadCallback(drawChart);

        <?php 
        include("include/db.inc.php");

        $sql = "SELECT parYearReg, COUNT(parID) AS total_year_registered
        FROM parent
        GROUP BY parYearReg";
        $result = mysqli_query($db, $sql);
        $resultCount = mysqli_query($db, $sql);
        ?>

      function drawChart() {

        var data = google.visualization.arrayToDataTable([
          ['Gender Type', 'Gender Count'],
          <?php while($row = mysqli_fetch_assoc($result)) {?>
            ['<?php echo $row["parYearReg"]?>',    <?php echo $row["total_year_registered"]; ?>],
          <?php } ?>
          
        ]);

        var options = {
          title: 'Total Year of Parent Registered'
        };

        var chart = new google.visualization.PieChart(document.getElementById('piechart'));

        chart.draw(data, options);
      }
    </script>

<div id="piechart" style="margin: auto; width: 750px; height: 500px;"></div><br><br>

<table class="center" width="50%">

    <tr>
        <th>Year Registered</th>
        <td>Total</td>
    </tr>
    <?php while($fetch = mysqli_fetch_assoc($resultCount)) { ?>
    <tr>
        <th><?php echo $fetch["parYearReg"]; ?></th>
        <td><?php echo $fetch["total_year_registered"]; ?></td>
    </tr>
        
    <?php } ?>
    

</table>
    </main>
</body>
</html>