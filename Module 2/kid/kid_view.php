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
	<title>Kid Profile</title>
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
	<h2>Kid Profile</h2>
		
	<div class="input-group">
			<label>Kid Id : <?php echo $kidId; ?> </label>	
		</div>
		
		<div class="input-group">
			<label>Name : <?php echo $kidName; ?></label>		
		</div>
		
		<div class="input-group">			
			<label>Gender : <?php echo $kidGender; ?> </label>			
		</div>
		
		<div class="input-group">			
			<label>Date of Birth : <?php echo $kidDob; ?>  </label>
		</div>
		
		<div class="input-group">			
			<label>Race : <?php echo $kidRace; ?> </label>
		</div>
		
		<div class="input-group">			
			<label>Allergy : <?php echo $kidAllergy; ?></label>			
		</div>
		
		<div class="input-group">
            <input type="hidden" value="<?php echo $row["kidId"]; ?>" name="kid_id">
		</div>
		
	</form>
	
</body>
</html>
