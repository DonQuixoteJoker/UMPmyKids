<?php
include 'config/dbcon.php';

//Payment Pending Count SQL
$a=mysqli_query($conn,"SELECT COUNT(*) as pending_payment from payment WHERE paymentStatus = 'Pending'");
$a_data=mysqli_fetch_assoc($a);

//Salary Pending Count SQL
$b=mysqli_query($conn,"SELECT COUNT(*) as pending_salary from salary WHERE salaryStatus = 'Pending'");
$b_data=mysqli_fetch_assoc($b);

//Total Worker Count SQL
$c=mysqli_query($conn,"SELECT COUNT(*) as total_worker from manpower");
$c_data=mysqli_fetch_assoc($c);

//Total Kids Count SQL
$d=mysqli_query($conn,"SELECT COUNT(*) as total_kids from kid");
$d_data=mysqli_fetch_assoc($d);

//Select all data from payment table
$payment=mysqli_query($conn,"SELECT *,parent_kid.parName from payment INNER JOIN parent_kid ON payment.parID=parent_kid.parID WHERE paymentStatus = 'Pending'");


//Select all data from salary table
$salary=mysqli_query($conn,"SELECT *,manpower.mpID from salary INNER JOIN manpower ON salary.mpID=manpower.mpID WHERE salaryStatus = 'Pending'");

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Owner Dashboard</title>
    <link rel="stylesheet"
        href="https://maxst.icons8.com/vue-static/landings/line-awesome/line-awesome/1.3.0/css/line-awesome.min.css">
    <meta name="viewport" content="width=device-width initial-scale =1">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"
        integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css2?family=Rajdhani:wght@300;400;500;600&display=swap" rel="stylesheet">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.18/css/dataTables.bootstrap4.min.css">
    <link rel="stylesheet" href="css/index.css">

</head>

<body>
    <!-- partial:index.partial.html -->
    <input type="checkbox" id="nav-toggle">

    <div class="sidebar">
        <div class="sidebar-brand">
            <h2><img src="img/ump.png" alt="" height="40" width="25">&nbsp;<span id="kleenpulse"
                    style="vertical-align: baseline; position:fixed; overflow: hidden;">UMP myKids</span></h2>
        </div>
        <div class="sidebar-menu">
            <ul>
                <li>
                    <a href="owner_dashboard.php" class="active" style="text-decoration:none"><span class="las la-igloo"></span>
                        <span>Dashboard</span>
                    </a>
                </li>
                <li>
                    <a href="Module4/payment_page.php" style="text-decoration:none"><span class="las la-users"></span>
                        <span>Payment</span>
                    </a>
                </li>
                <li>
                    <a href="Module_5/salaryMain.php" style="text-decoration:none"><span class="las la-shopping-bag"></span>
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
                <div class="card-single">
                    <div>
                        <h1 class="dataNo">
                            <?php echo $a_data['pending_payment']; ?>
                        </h1>
                        <span>Payment Pending</span>
                    </div>
                    <div>
                        <span class="las la-wallet"></span>
                    </div>
                </div>
                <div class="card-single">
                    <div>
                        <h1 class="dataNo">
                            <?php echo $b_data['pending_salary']; ?>
                        </h1>
                        <span>Salary Pending</span>
                    </div>
                    <div>
                        <span class="las la-hand-holding-usd"></span>
                    </div>
                </div>
                <div class="card-single">
                    <div>
                        <h1 class="dataNo">
                            <?php echo $c_data['total_worker']; ?>
                        </h1>
                        <span>Total Worker</span>
                    </div>
                    <div>
                        <span class="las la-chalkboard-teacher"></span>
                    </div>
                </div>
                <div class="card-single">
                    <div>
                        <h1 class="dataNo">
                            <?php echo $d_data['total_kids']; ?>
                        </h1>
                        <span>Total Kids</span>
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
                            <h3 class="heading">Payment Pending</h3>
                            <button onclick="window.location.href='Module4/payment_page.php'">See all<span class="las la-arrow-right"></span></button>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">

                                <table width="100%">
                                <col style="width: 20%;" />
                                <col style="width: 40%;" />
                                <col style="width: 20%;" />
                                <col style="width: 20%;" />
                                    <thead>
                                        <tr>
                                            <td>Parent ID</td>
                                            <td>Parent Name</td>
                                            <td>Amount</td>
                                        </tr>
                                    </thead>
                                    <?php while ($row = mysqli_fetch_array($payment)) {
                                    ?>
                                    <tbody>
                                        <tr>
                                            <td>
                                                <?php echo $row["parID"]; ?>
                                            </td>
                                            <td>
                                                <?php echo $row["parName"]; ?>
                                            </td>
                                            <td>RM
                                                <?php echo $row["paymentAmount"]; ?>
                                            </td>
                                        
                            
                            </td>
                            </tr>
                            </tbody>
                                <?php
                                        }
                                    ?>
                                </table>
                                </div>

                        </div>
                    </div>
                </div>
            </div>

            <div class="projects">
                <div class="card">
                    <div class="card-header">
                        <h3 class="heading">Salary Pending</h3>
                        <button onclick="window.location.href='Module_5/salaryMain.php'">See all <span class="las la-arrow-right"></span></button>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table width="100%">
                                <col style="width: 20%;" />
                                <col style="width: 40%;" />
                                <col style="width: 20%;" />
                                <col style="width: 20%;" />
                                <thead>
                                
                                    <tr>
                                        <td>Manpower ID</td>
                                        <td>Manpower Name</td>
                                        <td>Amount</td>
                                    </tr>
                                </thead>
                                <?php while ($row = mysqli_fetch_array($salary)) {
                                    ?>
                                <tbody>
                                    <tr>
                                        <td><?php echo $row["mpID"]; ?></td>
                                        <td><?php echo $row["mpName"]; ?></td>
                                    </tr>
                                </tbody>
                                <?php
                                        }
                                    ?>
                            </table>
                        </div>
                    </div>
                </div>
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
    <script>
        $(document).ready(function(){
            $('.editbtn').on('click',function(){
                $('#editmodal').modal('show');
            });
        });
    </script>

</body>

</html>