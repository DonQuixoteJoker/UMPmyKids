<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>Admin Dashboard</title>
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
}

th
{
    text-align: left;
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
			Update User Profile
		</h2>
		
		<div class="user-wrapper">
			<img src="https://pbs.twimg.com/media/EItl_WGU0AAEf3i.jpg" alt="" height="40" width="40">
			<div>
				<h4>MUHD AFIF</h4>
				<small>Admin</small>
			</div>
            <div>
                <a style="color: black;" href="function.php?logout='1'"><b>Log Out</b></a>
            </div>
        </div>
	</header>
	<main>
        <div>

            <form action="updateUser.php" method="post">
                <table>
                    
                    <tr style="background-color: white">
                        <td>
                            <th style="text-align: left;">Enter User ID:</th>
                        </td>
                        <td colspan="2">
                            <input type="text" placeholder="Enter User ID" name="searchID" id="searchID">
                        </td>
                        <td>
                            <button name="viewUser" value="SEARCH" class="button">SEARCH</button>
                        </td>                    
                    </tr>

                    <tr><td></td></tr>
            


                    <tr style="background-color: #B0B8FC">
                        <td>
                            <th colspan="2">Search Result:</th>
                        </td>
                    </tr>
                    <tr style="background-color: #B0B8FC">
                        <td>
                            <td style="text-align: left;">User ID:</td>
                        </td>
                        <td>
                            <?php echo $userID; ?>
                        </td>                   
                    </tr>
                    <tr style="background-color: #B0B8FC">
                        <td>
                            <td style="text-align: left;">Name:</td>
                        </td>
                        <td>
                            <?php echo $userName;  ?>
                        </td>                   
                    </tr>
                    <tr style="background-color: #B0B8FC">
                        <td>
                            <td style="text-align: left;">User Type:</td>
                        </td>
                        <td>
                            <?php echo $userType;  ?>
                        </td>                   
                    </tr>
                    <tr style="background-color: #B0B8FC">
                        <td>
                            <td style="text-align: left;">Password:</td>
                        </td>
                        <td>
                            <?php echo $userPassword;  ?>
                        </td>                   
                    </tr>

                    <tr><td></td></tr>

                    
                    <tr>
                        <td>
                            <th colspan="2">Edit User Profile:</th>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <th style="text-align: left;">User ID:</th>
                        </td>
                        <td>
                            <input type="text" placeholder="Enter User ID" name="userID" id="userID" value="<?php echo $userID; ?>" readonly required>
                        </td>                   
                    </tr>
                    <tr>
                        <td>
                            <th>Name:</th>
                        </td>
                        <td>
                            <input type="text" placeholder="Enter Username" name="userName" id="userName">
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <th>User Type:</th>
                        </td>
                        <td>
                            <select id="userType" name="userType">
                                <option value="admin">Admin</option>
			                    <option value="owner">Owner</option>
			                    <option value="UMP Staff">UMP Staff</option>
		                    </select>
                        </td>
                    </tr>
                    
                    <tr>
                        <td>
                            <th>Password:</th>
                        </td>
                        <td>
                            <input type="password" placeholder="Enter Password" name="userPassword" id="userPassword">
                        </td>
                    </tr>


                </table>
                
					
				<?php include ('error.php'); ?>
                <br>
                <button name="updateUser" value="SUBMIT" class="button">SUBMIT</button>
                <input type="button" class="button" value="RESET" onclick="reset()">
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
