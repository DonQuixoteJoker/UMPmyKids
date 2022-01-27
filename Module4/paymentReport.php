<?php
include '../config/dbcon.php';

//Payment Pending Count SQL
$a=mysqli_query($conn,"SELECT (SELECT SUM(paymentAmount) from payment WHERE paymentStatus = 'Received')-(SELECT SUM(paymentAmount) from payment WHERE paymentStatus = 'Overdue') as profit");
$a_data=mysqli_fetch_assoc($a);

//Salary Pending Count SQL
$b=mysqli_query($conn,"SELECT COUNT(*) as kids_registered from kid");
$b_data=mysqli_fetch_assoc($b);

//Total Worker Count SQL
$c=mysqli_query($conn,"SELECT SUM(paymentAmount) as total_paid from payment WHERE paymentStatus = 'Received'");
$c_data=mysqli_fetch_assoc($c);

//Total Kids Count SQL
$d=mysqli_query($conn,"SELECT SUM(paymentAmount) as total_overdue from payment WHERE paymentStatus = 'Overdue'");
$d_data=mysqli_fetch_assoc($d);

//Select all data from payment table
$payment=mysqli_query($conn,"SELECT *,parent_kid.parName from payment INNER JOIN parent_kid ON payment.parID=parent_kid.parID");


//RECEIVED
$received=mysqli_query($conn,"SELECT SUM(paymentAmount) as received from payment WHERE paymentStatus='Received'");
$receivedChart=mysqli_fetch_assoc($received);

//PENDING
$pending=mysqli_query($conn,"SELECT SUM(paymentAmount) as pending from payment WHERE paymentStatus='Pending'");
$pendingChart=mysqli_fetch_assoc($pending);

//OVERDUE
$overdue=mysqli_query($conn,"SELECT SUM(paymentAmount) as overdue from payment WHERE paymentStatus='Overdue'");
$overdueChart=mysqli_fetch_assoc($overdue);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Payment</title>
    <link rel="stylesheet"
        href="https://maxst.icons8.com/vue-static/landings/line-awesome/line-awesome/1.3.0/css/line-awesome.min.css">
    <meta name="viewport" content="width=device-width initial-scale =1">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"
        integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css2?family=Rajdhani:wght@300;400;500;600&display=swap" rel="stylesheet">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.18/css/dataTables.bootstrap4.min.css">
    <link rel="stylesheet" href="../css/index.css">
    <link rel="stylesheet" type="text/css" href="path/to/chartjs/dist/Chart.min.css">

</head>

<body>
    <!-- partial:index.partial.html -->
    <input type="checkbox" id="nav-toggle">

    <div class="sidebar">
        <div class="sidebar-brand">
            <h2><img src="../img/ump.png" alt="" height="40" width="25">&nbsp;<span id="kleenpulse"
                    style="vertical-align: baseline; position:fixed; overflow: hidden;">UMP myKids</span></h2>
        </div>
        <div class="sidebar-menu">
            <ul>
                <li>
                    <a href="../owner_dashboard.php" class="active" style="text-decoration:none"><span class="las la-igloo"></span>
                        <span>Dashboard</span>
                    </a>
                </li>
                <li>
                    <a href="payment_page.php" style="text-decoration:none"><span class="las la-users"></span>
                        <span>Payment</span>
                    </a>
                </li>
                <li>
                    <a href="#" style="text-decoration:none"><span class="las la-shopping-bag"></span>
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
                <img src="https://pbs.twimg.com/media/EItl_WGU0AAEf3i.jpg" alt="" height="40" width="40">
                <div>
                    <h4>User</h4>
                    <small>Owner UMP-myKids</small>
                </div>
            </div>
        </header>
        <main>

            <div class="cards">

                <a href="paymentReport.php" style="text-decoration:none;color:black"><div class="card-single">
                    <div>
                        <h1 class="dataNo">
                            RM <?php echo $a_data['profit']; ?>
                        </h1>
                        <span>Profit</span>
                    </div>
                    <div>
                        <span class="las la-wallet"></span>
                    </div>
                </div>
                </a>
                <a href="paymentReport.php" style="text-decoration:none;color:black"><div class="card-single">
                    <div>
                        <h1 class="dataNo">
                            <?php echo $b_data['kids_registered']; ?>
                        </h1>
                        <span>Kids Registered</span>
                    </div>
                    <div>
                        <span class="las la-hand-holding-usd"></span>
                    </div>
                </div></a>
                <a href="paymentReport.php" style="text-decoration:none;color:black"><div class="card-single">
                    <div>
                        <h1 class="dataNo">
                            RM <?php echo $c_data['total_paid']; ?>
                        </h1>
                        <span>Total Paid</span>
                    </div>
                    <div>
                        <span class="las la-chalkboard-teacher"></span>
                    </div>
                </div></a>
                <a href="paymentReport.php" style="text-decoration:none;color:black"><div class="card-single">
                    <div>
                        <h1 class="dataNo">
                            RM <?php echo $d_data['total_overdue']; ?>
                        </h1>
                        <span>Total Overdue</span>
                    </div>
                    <div>
                        <span class="las la-users"></span>
                    </div>
                </div></a>
            </div>

            <br>

            <div style="background-color:white;">            
                <div id="columnchart_material" style="width: 100%; height: 500px;padding:50px;"></div>
            </div>


    </main>
    <footer id="footer">

    </footer>
    </div>
    <!-- partial -->
    <script src='https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js'></script>
    <script src="js/index.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js"></script>

    <script src="https://cdn.datatables.net/1.10.18/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.18/js/dataTables.bootstrap4.min.js"></script>
 
<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
      google.charts.load('current', {'packages':['bar']});
      google.charts.setOnLoadCallback(drawChart);

      function drawChart() {

        var received = <?php echo $receivedChart['received']; ?>;
        var pending = <?php echo $pendingChart['pending']; ?>;
        var overdue = <?php echo $overdueChart['overdue']; ?>;

        var data = google.visualization.arrayToDataTable([
          ['Payment Status', 'Amount'],
          ['Received', received],
          ['Pending', pending],
          ['Overdue', overdue],

        ]);

        var options = {
          chart: {
            title: '',
          }
        };

        var chart = new google.charts.Bar(document.getElementById('columnchart_material'));

        chart.draw(data, google.charts.Bar.convertOptions(options));
      }
    </script>
    

</body>

</html>