<?php include "config.php"?>

<?php
	$id = $_GET["id"];
	
	mysqli_query($con, "delete from feedback where id=$id");
	
	header("Location: feedback.php");
?>