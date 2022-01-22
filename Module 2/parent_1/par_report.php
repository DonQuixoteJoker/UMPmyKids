<!DOCTYPE html>
<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Parent Report</title>
    <link rel="stylesheet" type="text/css" href="style.css">

    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
      google.charts.load('current', {'packages':['corechart']});
      google.charts.setOnLoadCallback(drawChart);

        <?php 
        include("include/db.inc.php");

        $sql = "SELECT parYearReg, COUNT(parID) AS total_year_registered
        FROM parent
        GROUP BY parYearReg";
        $result = mysqli_query($db, $sql);
        $resultCount = mysqli_query($db, $sql);
        ?>

      function drawChart() {

        var data = google.visualization.arrayToDataTable([
          ['Gender Type', 'Gender Count'],
          <?php while($row = mysqli_fetch_assoc($result)) {?>
            ['<?php echo $row["parYearReg"]?>',    <?php echo $row["total_year_registered"]; ?>],
          <?php } ?>
          
        ]);

        var options = {
          title: 'Total Year of Parent Registered'
        };

        var chart = new google.visualization.PieChart(document.getElementById('piechart'));

        chart.draw(data, options);
      }
    </script>
</head>
<body>

<ul>
  <li><img src="logo.png" width="150px"></li>
  <li><a href="Dashboard.php">Dashboard</a></li>
  <li><a href="Dashboard.php">Parent</a></li>
  <li><a href="../kid/dashboard.php">Kid</a></li>
  
</ul>

<div id="piechart" style="margin: auto; width: 750px; height: 500px;"></div>

<table width="40%">

    <tr>
        <th>Year Registered</th>
        <td>Total</td>
    </tr>
    <?php while($fetch = mysqli_fetch_assoc($resultCount)) { ?>
    <tr>
        <th><?php echo $fetch["parYearReg"]; ?></th>
        <td><?php echo $fetch["total_year_registered"]; ?></td>
    </tr>
        
    <?php } ?>
    

</table>

</body>
</html>