<?php

include("dbcon.php");

if(isset($_POST['save_contact']))
{
    $first_name = $_POST['first_name'];
    $last_name = $_POST['last_name'];

    $postData = [
        'first_name'=>$first_name,
        'last_name'=>$last_name,
    ];

    $ref_table = "contacts";
    $postRef = $database->getReference($ref_table)->push($postData);

    header('Location: index.php');
}

?>