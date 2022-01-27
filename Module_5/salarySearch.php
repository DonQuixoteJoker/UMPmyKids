<?php
    $cleardb_url = parse_url(getenv("CLEARDB_DATABASE_URL"));
    $cleardb_server = $cleardb_url["host"];
    $cleardb_username = $cleardb_url["user"];
    $cleardb_password = $cleardb_url["pass"];
    $cleardb_db = substr($cleardb_url["path"],1);
    $active_group = 'default';
    $query_builder = TRUE;


    define("DB_HOST", $cleardb_server);
    define("DB_NAME", $cleardb_db);
    define("DB_CHARSET", "utf8");
    define("DB_USER", $cleardb_username);
    define("DB_PASSWORD", $cleardb_password);

    //connect db
    try {
        $pdo = new PDO(
          "mysql:host=".DB_HOST.";charset=".DB_CHARSET.";dbname=".DB_NAME,
          DB_USER, DB_PASSWORD, [
            PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
            PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC
          ]
        );
      } catch (Exception $ex) { exit($ex->getMessage()); }
?>

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
<link rel="stylesheet" href="../css/index.css">

<style>
table{
	padding: 20px;
	width: 100%;
}

input[type=text], input[type=password], select 
{
	width: 90%;
	padding: 15px 50px;
	margin: 8px 0;
	display: inline-block;
	box-sizing: border-box;
    color:black;
    font-size: 15px;
    background-color: #F5F5F5;
}

::placeholder {
  color: #A9A9A9;
}

.button {
    background-color: #808080;
    border: none;
    color: white;
    padding: 10px 10px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 15px;
    margin: 15px 20px;
    cursor: pointer;
    border-radius: 4px;
}

form
{
    background-color: #E5E5E5;
    text-align: center;
    border-radius: 9px;
    padding: 10px;
    font-size: 20px;
    margin-left:15%;
    margin-right:20%;
    align-items: center;
}

.cent
{
	margin: auto;
	width: 100%;
	padding: 10px;    
}

.remindbutton
{
    cursor: pointer;
}

a{
    color: black;
}
a:hover{
    color: #6495ED;
}

</style>

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
	 			<a href="../owner_dashboard.php" class="active"><span class="las la-igloo"></span>
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
			Salary
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
                <a style="color: black;" href="../project_module1/function.php?logout='1'"><b>Log Out</b></a>
            </div>
        </div>
	</header>
	<main>


		<div>
			<form action="salarySearch.php" method="post">
                <table>
                    
                    
                    <tr style="background-color: #D3D3D3">
                        <td colspan="2">
                            <input type="text" placeholder="Search Worker ID" name="searchID" id="searchID">
                        </td>
                        <td>
                            <button name="viewWorker" value="SEARCH" class="button">SEARCH</button>
                        </td>                    
                    </tr>            
                
                </table>
                								                
			</form>
		</div>

		<div class="cent">
			<div class="recent-grid">
                <div class="projects">
                    <div class="card">
                       
                        <div class="card-body">
                            <div class="table-responsive">
                                
                                <form action="" method="POST" class="cent">

                                <table width="100%">
                                <col style="width: 20%;" />
                                <col style="width: 20%;" />
                                <col style="width: 20%;" />
                                <col style="width: 20%;" />
                                <col style="width: 10%;" />
                                    <thead>
                                        <tr>
                                            <td>Manpower ID</td>
                                            <td>Amount</td>
                                            <td>Date</td>
                                            <td>Status</td>
                                            <td>Reminder</td>
                                        </tr>
                                    </thead>
                                    
                                    <?php
                                        //Search
                                        
                                        if (isset($_POST["searchID"]))
                                        {
                                            $stmt = $pdo->prepare("SELECT * FROM `salary` WHERE `mpID` LIKE ?");
                                            $stmt->execute(["%".$_POST["searchID"]."%"]);
                                            $results = $stmt->fetchAll();
                                            if (isset($_POST["ajax"])) { echo json_encode($results); }

                                            //Display
                                            if (count($results) > 0) { foreach ($results as $data) {                                                
                                                ?>
                                                <tr>
                                                    <?php echo '<td><a href=\'salaryDetail.php?mpID='.$data['mpID'].'\'>'.$data['mpID']. '</td>'; ?>
                                                    <td><?php echo $data['totalSalary'] ?></td>
                                                    <td><?php echo $data['paidDate'] ?></td>
                                                    <td><?php echo $data['salaryStatus'] ?></td>
                                                    <?php if($data['salaryStatus']=="Paid"){ ?> 
                                                        <td>PAID</td>
                                                    <?php } else { ?>
                                                        
                                                        <td><button type="button" onclick='window.location.replace("../project_module1/adminDashboard.php")' id="myButton" class="remindbutton">Remind</button></td>
                                                    <?php } ?>
                                                </tr>
                                                <?php
                                              }} else { echo "No results found"; }
                                              
                                        }
                                        
                                        
                                    ?>                                    

                                </table>

                                </form>

                            </div>

                        </div>
                    </div>
                </div>
            </div>
		</div>

	</main>
    
	<footer id="footer">
	<p>Copyright 2021, All Right Reserved</p>

</footer>
</div>

</body>
</html>