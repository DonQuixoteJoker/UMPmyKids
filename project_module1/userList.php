<!--// CD19046 LEE ZI XUAN-->
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
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1"><link rel="stylesheet" href="css/index.css">

<script>


</script>

</head>


<style>
input[type=text], input[type=password], select 
{
	width: 100%;
	padding: 15px 50px;
	margin: 8px 0;
	display: inline-block;
	box-sizing: border-box;
    color:black;
    font-size: 15px;

}

.button {
    background-color: #C3C3C3;
    border: none;
    color: white;
    padding: 10px 20px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 15px;
    margin: 2px 2px;
    cursor: pointer;
    border-radius: 4px;
}

.container 
{
	padding: 20px;
}

form
{
    background-color: #E5E5E5;
    text-align: center;
    border-radius: 9px;
    padding: 50px;
    font-size: 20px;
    margin-left:15%;
    margin-right:20%;
    align-items: center;
}

table
{
    padding: 20px;
	width: 100%;
}

th
{
    text-align: center;
}

.userList
{
	width: 100%;
    background-color: #B0B8FC;
    text-align: center;

}

</style>

<?php include('function.php'); ?>

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
	 			<a href="adminDashboard.php" class="active"><span class="las la-igloo"></span>
	 				<span>Dashboard</span>
	 			</a>
	 		</li>
			<li>
	 			<a href="#"><span class="la la-user-circle"></span>
	 				<span>Manpower</span>
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
			User List
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
        <div>
            <form action="userList.php" method="post">

            <?php $userType = 'all' ?>
                
            <table>
                    <tr style="background-color: white" >
                        <td>
                            <th style="text-align: left;">User Type:</th>
                        </td>
                        <td>  
                            <select id="userType" name="userType">
                                <option value="all">ALL</option>
                                <option value="admin">Admin</option>
			                    <option value="owner">Owner</option>
			                    <option value="UMP Staff">UMP Staff</option>
		                    </select>
                        </td>
                        <td>
                            <button name="clickButton" id="clickButton" value="clickButton" class="button">SEARCH</button>
                        </td> 
                    </tr>
                    <tr><td></td></tr>
                </table>
                

                <table>
                <tr>
                    <th style="text-align: left;">Total Number of Admin: </th>
                    <th>
                        <?php
                        $query2 = "SELECT COUNT(userID) as totalAdmin FROM user WHERE userType = 'admin'";
                        $result2 = mysqli_query($con, $query2);
                        $totalAdmin = mysqli_fetch_assoc($result2);
                        ?>
                        <input style="text-align: center;" type="text" id="totalAdimn" value="<?php echo $totalAdmin['totalAdmin']; ?>" readonly required>
                    </th>
                </tr>
                <tr>
                    <th style="text-align: left;">Total Number of Owner: </th>
                    <th>
                        <?php
                        $query3 = "SELECT COUNT(userID) as totalOwner FROM user WHERE userType = 'owner'";
                        $result3 = mysqli_query($con, $query3);
                        $totalOwner = mysqli_fetch_assoc($result3);
                        ?>
                        <input style="text-align: center;" type="text" id="totalOwner" value="<?php echo $totalOwner['totalOwner']; ?>" readonly required>
                    </th>
                </tr>
                <tr>
                    <th style="text-align: left;">Total Number of UMP Staff: </th>
                    <th>
                        <?php
                        $query4 = "SELECT COUNT(userID) as totalStaff FROM user WHERE userType = 'UMP Staff'";
                        $result4 = mysqli_query($con, $query4);
                        $totalStaff = mysqli_fetch_assoc($result4);
                        ?>
                        <input style="text-align: center;" type="text" id="totalStaff" value="<?php echo $totalStaff['totalStaff']; ?>" readonly required>
                    </th>
                </tr>
                <tr>
                    <th style="text-align: left;">Total Number of User: </th>
                    <th>
                        <?php
                        $query5 = "SELECT COUNT(userID) as totalUser FROM user";
                        $result5 = mysqli_query($con, $query5);
                        $totalUser = mysqli_fetch_assoc($result5);
                        ?>
                        <input style="text-align: center;" type="text" id="totalUser" value="<?php echo $totalUser['totalUser']; ?>" readonly required>
                    </th>
                </tr>
                <tr><td></td></tr>
                </table>



                    <table style="background-color: #B0B8FC;">

                    <tr>
                        <th colspan="4" style="text-align: left; padding: 20px;">Search Result:</th>
                    </tr>
                    <tr class = "userList">
                        <th>User ID</th>
                        <th>User Name</th>  
                        <th>User Type</th>
                        <th>Password</th>                
                    </tr>

                    <?php
                    if (isset($_POST['clickButton'])) {

                    $userType =  $_POST['userType']; 

                    if ($userType == 'all')
                    {
                        $query1 = "SELECT * FROM user ORDER BY userID";
		            }
		             else
		            {
                        $query1 = "SELECT * FROM user WHERE userType = '$userType' ORDER BY userID";
		            }
                

                   

                    $result1 = mysqli_query($con, $query1);

                    
                    
                    while($row = mysqli_fetch_assoc($result1)) {
					$userID = $row['userID'];
					$userName = $row['userName'];
					$userPassword = $row['userPassword'];
					$userType = $row['userType'];                
				    ?>

					<tr>
						<td><?php echo $userID  ?></td>
						<td><?php echo $userName ?></td>
						<td><?php echo $userPassword ?></td>
						<td><?php echo $userType?></td>
						<td style="border: 2px solid #B0B8FC; background-color: #575d94;"><a href="userList_edit.php?editID=<?php echo $userID ?>"><font color="white"><u>Edit</u></font></a></td>
						<td style="border: 2px solid #B0B8FC; background-color: #575d94;"><a href="userList_delete.php?delID=<?php echo $userID ?>"><font color="white"><u>Delete</u></font></a></td>
                        <td></td>
					</tr>

			        <?php
                    }
                }
                    ?>

                <tr><td></td></tr> 
             
                </table>
                
					
				<?php include ('error.php'); ?>
                
			</form>
        </div>


	

	</main>
    
	<footer id="footer">
    <p>Copyright 2021, All Right Reserved</p>

</footer>
</div>
<!-- partial -->
  <script src='https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js'></script><script  src="js/index.js"></script>

</body>
</html>
