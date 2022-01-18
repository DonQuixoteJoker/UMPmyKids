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
	<table>
        <div class="input-group">
			<tr>
			<td>Kid Id : </td>
			<td><?php echo $kidId; ?></td>
        </tr>
		</div>
		<div class="input-group">
			<tr>
			<td>Name : </td>
			<td><?php echo $kidName; ?></td>
</tr>
		</div>
		<div class="input-group">
			<tr>
			<td>Gender : </td>
			<td><?php echo $kidGender; ?></td>
</tr>
		</div>
		<div class="input-group">
			<tr>
			<td>Date of Birth : </td>
			<td> <?php echo $kidDob; ?> </td>
</tr>
		</div>
		<div class="input-group">
			<tr>
			<td>Race : </td>
			<td><?php echo $kidRace; ?></td>
</tr>
		</div>
		<div class="input-group">
			<tr>
			<td>Allergy : </td>
			<td><?php echo $kidAllergy; ?> </td>
</tr>
		</div>
		<div class="input-group">
            <input type="hidden" value="<?php echo $row["kidId"]; ?>" name="kid_id">
		</div>
</table>
	</form>
	
</body>
</html>