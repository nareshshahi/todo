<?php
include("db.php");
    $conn->query("DELETE FROM `tbl_task`") or die(mysqli_errno($conn));
    header("location: index.php");
	
?>
