<?php 
include('php_code.php');
?>

<!DOCTYPE html>
<html>
<head>
	<title>Parent Registration</title>
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
	<form method="post" action="functions/regProfile.func.php" >
		<h2>Parent Registration</h2>
		<input type="hidden" name="id" value="<?php echo $id; ?>">
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
			<label>Registration Year</label>
			<input type="number" name="yearReg" value="<?php echo $parYearReg; ?>">
		</div>
		<div class="input-group">
			<label>Status</label>
			<input type="text" name="status" value="<?php echo $parStatus; ?>">
		</div>
		<div class="input-group">
		<?php if ($update == true): ?>
			<button class="btn" type="submit" name="update" >update</button>
		<?php else: ?>
		    <div class="flex-parent jc-center">
			<button class="btn" type="submit" name="save" >Save</button>
			<button class="btn" type="reset" name="clear" >Clear</button>
		</div>
		<?php endif ?>
		</div>
		</div>
	</form>
	
</body>
</html>