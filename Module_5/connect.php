<?php

$db = mysqli_connect("localhost","root","","umpmykids");

if(!$db)
{
    die("Connection failed: " . mysqli_connect_error());
}

?>