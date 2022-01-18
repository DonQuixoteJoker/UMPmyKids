<?php 
include('php_code.php');

// if (isset($_GET['edit'])) {
// 	$id = $_GET['edit'];
// 	$update = true;
// 	$record = mysqli_query($db, "SELECT * FROM kid WHERE id=$id");

// 	if (count($record) == 1 ) {
// 		$n = mysqli_fetch_array($record);
// 		$kidName = $n['name'];
// 		$kidGender = $n['gender'];
// 		$kidDob = $n['dob'];
// 		$kidRace = $n['race'];
// 		$kidAllergy = $n['allergy'];
// 	}
// }
?>
<!DOCTYPE html>
<html>
<head>
	<title>Kid Registration</title>
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
	<form method="post" action="reg_kid_function.php" >
		<h2>Kid Registration</h2>
    
		<div class="input-group">
			<label>Name</label>
			<input type="text" name="name">
		</div>
		<div class="input-group">
			<label>Gender </label>
			<input type="text" name="gender">
		</div>
		<div class="input-group">
			<label>Date of Birth</label>
			<input type="date" name="dob">
		</div>
		<div class="input-group">
			<label>Race</label>
			<input type="text" name="race">
		</div>
		<div class="input-group">
			<label>Allergy</label>
			<input type="text" name="allergy">
		</div>
			<div class="flex-parent jc-center">
			<button class="btn" type="submit" name="save" >Save</button>
			<button class="btn" type="reset" name="clear" >Clear</button>
		</div>
		</div>
		</div>
	</form>
	
</body>
</html>