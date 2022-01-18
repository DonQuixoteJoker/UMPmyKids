<?php 
session_start();
include("include/db.inc.php");

$parID = intval($_GET["id"]);
$sql = "SELECT * FROM parent WHERE parID = '$parID'";
$result = mysqli_query($db, $sql);
$row = mysqli_fetch_assoc($result);

extract($row);

if(!$row) {
    echo "<script>alert('Invalid Page'); window.history.go(-1);</script>";
    exit();
}
?>

<!DOCTYPE html>
<html>
<head>
	<title>Parent Profile</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
<?php if (isset($_SESSION['message'])): ?>
	<div class="msg">
		<?php 
			echo $_SESSION['message']; 
			unset($_SESSION['message']);
		?>
	</div>
<?php endif ?>

<ul>
  <li><img src="logo.png" width="150px"></li>
  <li><a href="Dashboard.php">Dashboard</a></li>
  <li><a href="Dashboard.php">Parent</a></li>
  <li><a href="../kid/dashboard.php">Kid</a></li>
  
</ul>

<div style="margin-left:25%;padding:1px 16px;height:1000px;">
	<form method="post" action="functions/editProfile.func.php" >
    <h2>Parent Profile</h2>
	
	<div class="input-group">
			
			<label>Parent Id : <?php echo $parID; ?></label>
			

		</div>
		<div class="input-group">
			<tr>
			<td>Name :</label>
			<td><?php echo $parName; ?>
</tr>
		</div>
		<div class="input-group">
			<tr>
		<td>Phone Number : </td>
		<td><?php echo $parPhoneNum; ?></td>
		</tr>
		</div>

		<div class="input-group">
		<tr>
		<td>Address :</td>
		<td><?php echo $parAddress; ?></td>
		</tr>
		</div>

		<div class="input-group">
		<tr>
		<td>Year Registered :</td>
		<td><?php echo $parYearReg; ?></td>
		</tr>
		</div>

		<div class="input-group">
		<tr>
		<td>Status :</td>
		<td><?php echo $parStatus; ?></td>
		</tr>
		</div>
		<div class="input-group">
            <input type="hidden" value="<?php echo $row["parID"]; ?>" name="parent_id">
		</div>
</div>
</table>
</div>
	</form>

</body>
</html>