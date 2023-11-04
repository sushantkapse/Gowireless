<?php include "config.php"?>

<?php
	$id = $_GET["eid"];
	
	mysqli_query($con, "delete from employee where emp_id=$id");
	
	header("Location: employee.php");
?>