<?php
    include 'connect.php';//use connection file
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
    padding: 10px 30px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 15px;
    margin: 15px 30px;
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

.bigbox
{
    text-align: center;
    width: 100%;
    background-color: #E5E5E5;
}

.head{
    font-family: Bahnschrift;
    text-align: left;
    margin-left: 15px;
    margin-top: 15px;
    font-weight: 500;
    font-size: 25px;
    width: 30%;
    float: left;
}

.float-child2 {
    width: 30%;
    float: right;
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
                <a style="color: black;" href="function.php?logout='1'"><b>Log Out</b></a>
            </div>
        </div>
	</header>
	<main>

        <div class="bigbox">
            <div class="head">
                <!--<form action="salaryMain.php" method="post">
                    <table>
                        
                        
                        <tr style="background-color: #D3D3D3">
                            <td>
                                <th style="text-align: left;">Enter MP ID:</th>
                            </td>
                            <td colspan="2">
                                <input type="text" placeholder="Search Worker ID" name="searchID" id="searchID">
                            </td>
                            <td>
                                <button name="viewWorker" value="SEARCH" class="button">SEARCH</button>
                            </td>                    
                        </tr>            
                    
                    </table>
                                                                    
                </form>-->
                SALARY DETAILS                            
            </div>
            <div class="float-child2">
                    <button onclick="window.location.href='../Module_5/salaryMain.php'" name="backbutton" value="BACK" class="button">BACK</button>
            </div>

            <div class="cent">
                <div class="recent-grid">
                    <div class="projects">
                        <div class="card">
                        
                            <div class="card-body">
                                <div class="table-responsive">                                

                                    <table width="100%">
                                    <col style="width: 50%;" />
                                    <col style="width: 50%;" />
                                        <tr>
                                            <td>Worker name: </td>
                                            <td>Nicole</td>
                                        </tr>
                                        <tr>
                                            <td>Manpower ID: </td>
                                            <td></td>
                                        </tr>
                                        <tr>
                                            <td>Base salary: </td>
                                            <td></td>
                                        </tr>
                                        <tr>
                                            <td>Overtime hour(s): </td>
                                            <td></td>
                                        </tr>
                                        <tr>
                                            <td>Overtime payment: </td>
                                            <td>RM</td>
                                        </tr>
                                        <tr>
                                            <td>Total salary: </td>
                                            <td>RM</td>
                                        </tr>
                                    </table>

                                </div>

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