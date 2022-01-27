<?php 

session_start();
include("db.php");

$kid_id = intval($_GET["kid"]);

$sql = "DELETE FROM kid WHERE kidId = '$kid_id'";

if(!mysqli_query($db, $sql)) {
    $_SESSION["message"] = "Delete Failed";
    header("Location:kid_list_del.php");
    exit();
}

$_SESSION["message"] = "Delete Successfully";
header("Location:kid_list_del.php");
exit();



?>