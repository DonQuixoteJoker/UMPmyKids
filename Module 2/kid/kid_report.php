<!DOCTYPE html>
<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Kid Report</title>
    <link rel="stylesheet" type="text/css" href="style.css">

    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
      google.charts.load('current', {'packages':['corechart']});
      google.charts.setOnLoadCallback(drawChart);

        <?php 
        include("db.php");

        $sql = "SELECT
        COUNT(CASE WHEN kidGender='Male' THEN 1 END) AS male_count,
        COUNT(CASE WHEN kidGender='Female' THEN 1 END) AS female_count,
        COUNT(*) AS total_count
        FROM kid";
        $result = mysqli_query($db, $sql);
        $resultCount = mysqli_query($db, $sql);
        ?>

      function drawChart() {

        var data = google.visualization.arrayToDataTable([
          ['Gender Type', 'Gender Count'],
          <?php while($row = mysqli_fetch_assoc($result)) {?>
            ['Male',    <?php echo $row["male_count"]; ?>],
            ['Female',    <?php echo $row["female_count"]; ?>],
          <?php } ?>
          
        ]);

        var options = {
          title: 'Popularity of Kid Gender'
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
  <li><a href="../parent_1/Dashboard.php">Parent</a></li>
  <li><a href="dashboard.php">Kid</a></li>
  
</ul>

<div id="piechart" style="margin: auto; width: 700px; height: 500px;"></div>

<table width="50%">
    <tr>
        <th>Gender</th>
        <td>Total</td>
    </tr>
    <?php if($fetch = mysqli_fetch_assoc($resultCount)) { ?>
    <tr>
        <th>Male</th>
        <td><?php echo $fetch["male_count"]; ?></td>
    </tr>
    <tr>
        <th>Female</th>
        <td><?php echo $fetch["female_count"]; ?></td>
    </tr>
    <tr>
        <th>Total Kids</th>
        <td><?php echo $fetch["total_count"]; ?></td>
    </tr>

        
    <?php } ?>
    

</table>

</body>
</html>