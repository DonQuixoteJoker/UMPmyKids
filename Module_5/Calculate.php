<?php
    include 'connect.php';//use connection file
?>

<?php
    $id=$_GET['mpID'];
    $c= mysqli_query($db,"SELECT overTime FROM salary where mpID='$id'");
    $row = mysqli_fetch_row($c);
    $c   = $row[0];
    $calc = $c * 10;
?>