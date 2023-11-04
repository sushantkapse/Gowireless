<?php include "config.php"?>

<?php
	$id = $_GET["bid"];
	
	mysqli_query($con, "update bill set status='Closed' where bill_id=$id");
	
	header("Location: bill.php");
?>