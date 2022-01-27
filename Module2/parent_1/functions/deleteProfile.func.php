<?php 

session_start();
include("../include/db.inc.php");

$parent_id = intval($_GET["parent"]);

$sql = "DELETE FROM parent WHERE parID = '$parent_id'";

if(!mysqli_query($db, $sql)) {
    $_SESSION["message"] = "Delete Failed";
    header("Location: ../par_list_del.php");
    exit();
}

$_SESSION["message"] = "Delete Successfully";
header("Location: ../par_list_del.php");
exit();


?>