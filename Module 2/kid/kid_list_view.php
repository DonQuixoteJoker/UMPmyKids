<?php 
session_start();
include("db.php");
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Kid List </title>
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
  <li><a href="dashboard.php">Dashboard</a></li>
  <li><a href="../parent_1/Dashboard.php">Parent</a></li>
  <li><a href="dashboard.php">Kid</a></li>
</ul>

<div style="margin-left:25%;padding:1px 16px;height:1000px;">
<h2>Kid List</h2>
<table style= "width : 100%">
	<thead>
		<tr>
            <th>Kid ID</th>
			<th>Name</th>
			<th>Gender</th>
			<th>Date Of Birth</th>
			<th>Race</th>
			<th>Allergy</th>
			<th colspan="2">Action</th>
		</tr>
	</thead>
</div>
	

	<?php 
        $results = mysqli_query($db, "SELECT * FROM kid"); 
        while ($row = mysqli_fetch_array($results)) { 
    ?>
		<tr>
            <td>K<?php echo $row['kidId']; ?></td> 
			<td><?php echo $row['kidName']; ?></td>
			<td><?php echo $row['kidGender']; ?></td>
			<td><?php echo $row['kidDob']; ?></td>
			<td><?php echo $row['kidRace']; ?></td>
			<td><?php echo $row['kidAllergy']; ?></td>
				
			<td align="center">
				<a href="kid_view.php?id=<?php echo $row["kidId"]; ?>" class="view_btn">View</a>
			</td>
		</tr>
	<?php } ?>
</table>

</body>
</html>