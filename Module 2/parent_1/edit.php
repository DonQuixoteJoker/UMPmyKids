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
	<title>Update Parent Profile</title>
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
    <h2>Update Parent Profile</h2>    
	<div class="input-group">
			<label>ID</label>
			<input type="text" name="parID" value="<?php echo $parID; ?>" disabled>
		</div>
		<div class="input-group">
			<label>Name</label>
			<input type="text" name="name" value="<?php echo $parName; ?>">
		</div>
		<div class="input-group">
			<label>Phone Number </label>
			<input type="number" name="phoneNum" value="<?php echo $parPhoneNum; ?>">
		</div>
		<div class="input-group">
			<label>Address</label>
			<input type="text" name="address" value="<?php echo $parAddress; ?>">
		</div>
		<div class="input-group">
			<label>Year Registered</label>
			<input type="number" name="yearReg" value="<?php echo $parYearReg; ?>">
		</div>
		<div class="input-group">
			<label>Status</label>
			<input type="text" name="status" value="<?php echo $parStatus; ?>">
		</div>
		<div class="input-group">
            <input type="hidden" value="<?php echo $row["parID"]; ?>" name="parent_id">
			<div class="flex-parent jc-center">
			<button class="btn" type="submit" name="update" >Update</button>
			<a href="par_list_upd.php" class="btn" type="submit" name="cancel" >Cancel</a>
</div>
		</div>
</div>
	</form>
	
</body>
</html>