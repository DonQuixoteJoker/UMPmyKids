<?php 
session_start();
include("db.php");

$kidId = intval($_GET["id"]);
$sql = "SELECT * FROM kid WHERE kidId = '$kidId'";
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
	<title>Update Kid Profile</title>
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
  <li><a href="dashboard.php">Dashboard</a></li>
  <li><a href="../parent_1/Dashboard.php">Parent</a></li>
  <li><a href="dashboard.php">Kid</a></li>
</ul>

<div style="margin-left:25%;padding:1px 16px;height:1000px;">
	<form method="post" action="edit_kid_func.php" >
	<h2>Update Kid Profile</h2>
        <div class="input-group">
			<label>ID</label>
			<input type="text" name="kidId" value="<?php echo $kidId; ?>" disabled>
		</div>
		<div class="input-group">
			<label>Name</label>
			<input type="text" name="name" value="<?php echo $kidName; ?>">
		</div>
		<div class="input-group">
			<label>Gender </label>
			<input type="text" name="gender" value="<?php echo $kidGender; ?>">
		</div>
		<div class="input-group">
			<label>Date of Birth</label>
			<input type="date" name="dob" value="<?php echo $kidDob; ?>">
		</div>
		<div class="input-group">
			<label>Race</label>
			<input type="text" name="race" value="<?php echo $kidRace; ?>">
		</div>
		<div class="input-group">
			<label>Allergy</label>
			<input type="text" name="allergy" value="<?php echo $kidAllergy; ?>">
		</div>
		<div class="input-group">
            <input type="hidden" value="<?php echo $row["kidId"]; ?>" name="kid_id">
			<div class="flex-parent jc-center">
			<button class="btn" type="submit" name="update">Update</button>
			<a href="kid_list_upd.php" class="btn" type="submit" name="cancel">Cancel</a>
</div>
		</div>
	</form>
	
</body>
</html>