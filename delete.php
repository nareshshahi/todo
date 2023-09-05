<?php

include("db.php");


session_start();

ini_set('display_errors', 1);

if(!isset($_SESSION['email'])){
    header('Location:login.php');
}


if($_GET['id']){
    $id = $_GET['id'];

    $conn->query("DELETE FROM `tbl_task` WHERE `id` = $id") or die(mysqli_errno($conn));
    header("location: index.php"); 
}	
?>
