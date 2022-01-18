<?php 
session_start();
include("include/db.inc.php");
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Delete Parent Profile</title>
        <link rel="stylesheet" type="text/css" href="style.css">
    </head>
	<style>
		table, th, td {
    border: 1px solid black;
    border-collapse: collapse;
	
  }
	</style>
<body>

<ul>
  <li><img src="logo.png" width="150px"></li>
  <li><a href="Dashboard.php">Dashboard</a></li>
  <li><a href="Dashboard.php">Parent</a></li>
  <li><a href="../kid/dashboard.php">Kid</a></li>
  
</ul>

<?php if (isset($_SESSION['message'])): ?>
	<div class="<?php if(str_contains($_SESSION['message'], "Delete Failed")) { echo 'msg-danger';} else {echo 'msg';} ?>">
		<?php 
			echo $_SESSION['message']; 
			unset($_SESSION['message']);
		?>
	</div>
<?php endif ?>

<div style="margin-left:25%;padding:1px 16px;height:1000px;">
<h2>Delete Parent Profile</h2>
<table style= "width : 100%">
	<thead>
		<tr>
            <th>Parent ID</th>
			<th>Name</th>
			<th>Phone Number</th>
			<th>Address</th>
			<th>Registration Year</th>
			<th>Status</th>
			<th colspan="2">Action</th>
		</tr>
	</thead>
	
	<?php 
        $results = mysqli_query($db, "SELECT * FROM parent"); 
        while ($row = mysqli_fetch_array($results)) { 
    ?>
		<tr>
            <td>P<?php echo $row['parID']; ?></td> 
			<td><?php echo $row['parName']; ?></td>
			<td><?php echo $row['parPhoneNum']; ?></td>
			<td><?php echo $row['parAddress']; ?></td>
			<td><?php echo $row['parYearReg']; ?></td>
			<td><?php echo $row['parStatus']; ?></td>
			
			<td align="center">
				<a href="functions/deleteProfile.func.php?parent=<?php echo $row['parID']; ?>" class="del_btn">Delete</a>
			</td>
		</tr>
	<?php } ?>
</table>
		</div>

</body>
</html>