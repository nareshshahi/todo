<?php
include('db.php');
$id=$_GET['id'];
$status=$_GET['status'];
// $sql="UPDATE tbl_task set status=$status where id=$id";
// mysql_query($conn,$sql);
$updateQuery = "UPDATE tbl_task SET status='$status' WHERE id = $id";
    $result = $conn->query($updateQuery);

header('Location:index.php');

?>