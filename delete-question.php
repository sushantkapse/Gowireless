<?php include "config.php"?>

<?php
	$id = $_GET["id"];
	
	mysqli_query($con, "delete from question where id=$id");
	
	header("Location: faqs.php");
?>