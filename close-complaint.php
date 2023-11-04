<?php include "config.php"?>

<?php
	$id = $_GET["compid"];
	
	mysqli_query($con, "update complaints set status='Closed' where comp_id=$id");
	
	header("Location: complaints.php");
?>