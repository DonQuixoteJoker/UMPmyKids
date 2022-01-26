<?php
/* Database connection settings */
session_start();

$host = 'localhost';
$user = 'root';
$pass = '';
$database = 'umpmykids';
//$mysqli = new mysqli($host,$user,$pass,$db) or die($mysqli->error);
$con=mysqli_connect($host,$user,$pass,$database);
if($con){
}else{
     echo"Connection not successful" . mysqli_error($con);
     die($con);
}
?>