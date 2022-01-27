<?php 
include('php_code.php');
?>

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
input 
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
    align: center;
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
    padding: 100px;
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
    text-align: left;
}

.msg {
    margin: auto; 
    padding: 10px; 
    border-radius: 5px; 
    color: #3c763d; 
    background: #dff0d8; 
    border: 1px solid #3c763d;
    width: 30%;
    text-align: center;
}

.msg-danger {
    margin: 30px auto; 
    padding: 10px; 
    border-radius: 5px; 
    color: red; 
    background: #dff0d8; 
    border: 1px solid red;
    width: 50%;
    text-align: center;
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
	 			<a href="../../project_module1/adminDashboard.php" class="active"><span class="las la-igloo"></span>
	 				<span>Dashboard</span>
	 			</a>
	 		</li>
			<li>
	 			<a href="../../Module3/manpower.php"><span class="la la-user-circle"></span>
	 				<span>Manpower</span>
	 			</a>
	 		</li>
			 <li>
	 			<a href="index.php"><span class="la la-user-circle"></span>
	 				<span>Parent</span>
	 			</a>
	 		</li>
			 <li>
	 			<a href="../kids/index.php"><span class="la la-user-circle"></span>
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
			Parent Registration
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
	
<?php if (isset($_SESSION['message'])): ?>
	<div class="msg">
		<?php 
			echo $_SESSION['message']; 
			unset($_SESSION['message']);
		?>
	</div>
<?php endif ?>

        <div>
            <form action="functions/regProfile.func.php" method="post">
                <table>
                    <tr>
                        <td>
						<input type="hidden" name="id" value="<?php echo $id; ?>">
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <th>Name:</th>
                        </td>
                        <td>
						<input type="text" name="name" value="<?php echo $parName; ?>">
                        </td>
                    </tr>
					<tr>
                        <td>
                            <th>Phone Number:</th>
                        </td>
                        <td>
						<input type="number" name="phoneNum" value="<?php echo $parPhoneNum; ?>">
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <th>Address:</th>
                        </td>
                        <td>
						<input type="text" name="address" value="<?php echo $parAddress; ?>">
                        </td>
                    </tr>
                    
                    <tr>
                        <td>
                            <th>Registration Year:</th>
                        </td>
                        <td>
						<input type="number" name="yearReg" value="<?php echo $parYearReg; ?>">
                        </td>
                    </tr>
					<tr>
                        <td>
                            <th>Status:</th>
                        </td>
                        <td>
						<input type="text" name="status" value="<?php echo $parStatus; ?>">
                        </td>
                    </tr>

                    
					<tr>	
					<?php if ($update == true): ?>
			<button class="btn" type="submit" name="update" >update</button>
		<?php else: ?>
		    <div class="flex-parent jc-center">
			<td><button class="button" type="submit" name="save" >Save</button></td>
			<td><button class="button" type="reset" name="clear" >Clear</button></td>
		</div>
		<?php endif ?>
		</tr>
                </table>


	</form>
		</main>
	<footer id="footer">
	<p>Copyright 2021, All Right Reserved</p>

</footer>
</div>
<!-- partial -->
  <script src='https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js'></script><script  src="js/index.js"></script>
</body>
</html>
