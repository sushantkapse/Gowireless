<?php include "config.php"?>

<?php
	$id = $_GET["pid"];
	
	mysqli_query($con, "delete from plans where plan_id=$id");
	
	header("Location: create-plan.php");
?>