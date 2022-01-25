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
                        <div  style="width:100%; ">
                            <table class="card center" style="width:600px;height:300px;background:rgba(255,255,255,.4);">
                                <tr>
                                    <td colspan="2"><h1 style="text-align:center;">Manpower by Status</h1></td>
                                    <td></td>
                        
                                </tr>
                                <tr>
                                    <td>
                                        <!-- manpower all status active/terminate-->
                                        <?php 
                                            //database connection
	                                        //$con = mysqli_connect("localhost", "root") or die(mysqli_connect_error());

	                                        // to select the targeted database
	                                        //mysqli_select_db($con,"umpmykids") or die(mysqli_error());

                                            include 'dbConn.php';

                                            // all status
                                            $resultActive = mysqli_query($con, "SELECT COUNT(*) AS active FROM manpower WHERE mpStatus='Active'");
	                                        $num_rowsResultActive = mysqli_fetch_assoc($resultActive);

                                            $resultTerminate = mysqli_query($con, "SELECT COUNT(*) AS terminate FROM manpower WHERE mpStatus='Terminated'");
	                                        $num_rowsResultTerminate = mysqli_fetch_assoc($resultTerminate);                                            

                                        ?>
                                        <table style="border: 1px solid black;">
                                            <tr>
                                                <td style="border: 1px solid black;">Status</td>
                                                <td style="border: 1px solid black;">Total</td>
                                            </tr>
                                            <tr>
                                                <td style="border: 1px solid black;">Active</td>
                                                <td style="border: 1px solid black;"><?php echo $num_rowsResultActive['active']; ?></td>
                                            </tr>
                                            <tr>
                                                <td style="border: 1px solid black;">Terminated</td>
                                                <td style="border: 1px solid black;"><?php echo $num_rowsResultTerminate['terminate']; ?></td>
                                            </tr>
                                        </table>                                        
                                        <!-- manpower terminate all type -->
                                    </td>
                                    <td>
                                        <!-- manpower all status active/terminate-->
                                        <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
                                            <script type="text/javascript">
                                            google.charts.load('current', {'packages':['corechart']});
                                            google.charts.setOnLoadCallback(drawChart);

                                            function drawChart() {

                                                var data = google.visualization.arrayToDataTable([
                                                    ['Task', 'Hours per Day'],
                                                    ['Active', <?php echo $num_rowsResultActive['active']; ?>],
                                                    ['Terminated', <?php echo $num_rowsResultTerminate['terminate']; ?>]
                                                ]);

                                                var options = {
                                                    title: 'UMPMYKIDS Manpower by Status'
                                                };

                                                var chart = new google.visualization.PieChart(document.getElementById('piechartAllStatus'));
                                    
                                                chart.draw(data, options);
                                            }
                                          </script>
                                            <div id="piechartAllStatus" style="width: 500px; height: 100%;"></div>
                                        <!-- manpower active all type -->
                                        <!-- manpower terminate all type -->
                                    </td>
                                </tr>
                            </table>








                            <table class="card center" style="width:600px;height:300px;background:rgba(255,255,255,.4);">
                                
                                <tr>
                                    <td colspan="2"><h1 style="text-align:center;">Active Manpower</h1></td>
                                    <td></td>
                        
                                </tr>
                                <tr>
                                    <td>
                                    <!-- manpower active all type -->
                                    <?php
                                            $resultActiveTeacher = mysqli_query($con, "SELECT COUNT(*) AS activeTeacher FROM manpower WHERE mpOccupation='Teacher' and mpStatus='Active'");
	                                        $num_rowsResultActiveTeacher = mysqli_fetch_assoc($resultActiveTeacher);

                                            $resultActiveCaretaker = mysqli_query($con, "SELECT COUNT(*) AS activeCaretaker FROM manpower WHERE mpOccupation='Caretaker' and mpStatus='Active'");
	                                        $num_rowsResultActiveCaretaker = mysqli_fetch_assoc($resultActiveCaretaker);

                                            $resultActiveStaff = mysqli_query($con, "SELECT COUNT(*) AS activeStaff FROM manpower WHERE mpOccupation='Staff' and mpStatus='Active'");
	                                        $num_rowsResultActiveStaff = mysqli_fetch_assoc($resultActiveStaff);
                                    ?>
                                    <table style="border: 1px solid black;">
                                            <tr>
                                                <td style="border: 1px solid black;">Manpower</td>
                                                <td style="border: 1px solid black;">Total</td>
                                            </tr>
                                            <tr>
                                                <td style="border: 1px solid black;">Teacher</td>
                                                <td style="border: 1px solid black;"><?php echo $num_rowsResultActiveTeacher['activeTeacher']; ?></td>
                                            </tr>
                                            <tr>
                                                <td style="border: 1px solid black;">Caretaker</td>
                                                <td style="border: 1px solid black;"><?php echo $num_rowsResultActiveCaretaker['activeCaretaker']; ?></td>
                                            </tr>
                                            <tr>
                                                <td style="border: 1px solid black;">Staff</td>
                                                <td style="border: 1px solid black;"><?php echo $num_rowsResultActiveStaff['activeStaff']; ?></td>
                                            </tr>
                                        </table>
                                    </td>
                                    <td>
                                    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
                                            <script type="text/javascript">
                                            google.charts.load('current', {'packages':['corechart']});
                                            google.charts.setOnLoadCallback(drawChart);

                                            function drawChart() {

                                                var data = google.visualization.arrayToDataTable([
                                                    ['Task', 'Hours per Day'],
                                                    ['Teacher', <?php echo $num_rowsResultActiveTeacher['activeTeacher']; ?>],
                                                    ['Caretaker', <?php echo $num_rowsResultActiveCaretaker['activeCaretaker']; ?>],
                                                    ['Staff', <?php echo $num_rowsResultActiveStaff['activeStaff']; ?>]
                                                ]);

                                                var options = {
                                                    title: 'UMPMYKIDS Active Manpower'
                                                };

                                                var chart = new google.visualization.PieChart(document.getElementById('piechartActive'));
                                    
                                                chart.draw(data, options);
                                            }
                                          </script>
                                    <div id="piechartActive" style="width: 500px; height: 100%"></div>
                                    </td>
                                </tr>
                                
                            </table>
                        </div>











                        <table class="card center" style="width:600px;height:300px;background:rgba(255,255,255,.4);">
                                
                                <tr>
                                    <td colspan="2"><h1 style="text-align:center;">Terminated Manpower</h1></td>
                                    <td></td>
                        
                                </tr>
                                <tr>
                                    <td>
                                        <!-- manpower all status active/terminate-->
                                        <?php 

                                            // all status
                                            $resultTerminateTeacher = mysqli_query($con, "SELECT COUNT(*) AS terminatedTeacher FROM manpower WHERE mpOccupation='Teacher' and mpStatus='Terminated'");
	                                        $num_rowsResultTerminateTeacher = mysqli_fetch_assoc($resultTerminateTeacher);

                                            $resultTerminateCaretaker = mysqli_query($con, "SELECT COUNT(*) AS terminatedCaretaker FROM manpower WHERE mpOccupation='Caretaker' and mpStatus='Terminated'");
	                                        $num_rowsResultTerminateCaretaker = mysqli_fetch_assoc($resultTerminateCaretaker);
                                            
                                            $resultTerminateStaff = mysqli_query($con, "SELECT COUNT(*) AS terminatedStaff FROM manpower WHERE mpOccupation='Staff' and mpStatus='Terminated'");
	                                        $num_rowsResultTerminateStaff = mysqli_fetch_assoc($resultTerminateStaff); 

                                        ?>
                                        <table style="border: 1px solid black;">
                                            <tr>
                                                <td style="border: 1px solid black;">Manpower</td>
                                                <td style="border: 1px solid black;">Total</td>
                                            </tr>
                                            <tr>
                                                <td style="border: 1px solid black;">Teacher</td>
                                                <td style="border: 1px solid black;"><?php echo $num_rowsResultTerminateTeacher['terminatedTeacher']; ?></td>
                                            </tr>
                                            <tr>
                                                <td style="border: 1px solid black;">Caretaker</td>
                                                <td style="border: 1px solid black;"><?php echo $num_rowsResultTerminateCaretaker['terminatedCaretaker']; ?></td>
                                            </tr>
                                            <tr>
                                                <td style="border: 1px solid black;">Staff</td>
                                                <td style="border: 1px solid black;"><?php echo $num_rowsResultTerminateStaff['terminatedStaff']; ?></td>
                                            </tr>
                                        </table>                                        
                                        <!-- manpower terminate all type -->
                                    </td>
                                    <td>
                                        <!-- manpower all status active/terminate-->
                                        <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
                                            <script type="text/javascript">
                                            google.charts.load('current', {'packages':['corechart']});
                                            google.charts.setOnLoadCallback(drawChart);

                                            function drawChart() {

                                                var data = google.visualization.arrayToDataTable([
                                                    ['Task', 'Hours per Day'],
                                                    ['Teacher', <?php echo $num_rowsResultTerminateTeacher['terminatedTeacher']; ?>],
                                                    ['Caretaker', <?php echo $num_rowsResultTerminateCaretaker['terminatedCaretaker']; ?>],
                                                    ['Staff', <?php echo $num_rowsResultTerminateStaff['terminatedStaff']; ?>]
                                                ]);

                                                var options = {
                                                    title: 'UMPMYKIDS Terminated Manpower'
                                                };

                                                var chart = new google.visualization.PieChart(document.getElementById('piechartTerminated'));
                                    
                                                chart.draw(data, options);
                                            }
                                          </script>
                                            <div id="piechartTerminated" style="width: 500px; height: 100%;"></div>
                                        <!-- manpower active all type -->
                                        <!-- manpower terminate all type -->
                                    </td>
                                </tr>
                            </table>
	</main>
	<footer id="footer">
  
</footer>
</div>
<!-- partial -->
  <script src='https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js'></script><script  src="js/index.js"></script>

</body>
<style>
    .center{
    margin: auto;
    width: 50%;
    padding: 10px;
}
</style>
</html>
