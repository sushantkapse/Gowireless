<?php include "config.php"?>

<?php
	$id = $_POST["id"];
	$name = $_POST["name"];
	$speed = $_POST["speed"];
	$data =$_POST["data"];
	$duration = $_POST["duration"];
	$cost = $_POST["cost"];
	
	mysqli_query($con, "update plans set plan_name='$name', speed='$speed', data='$data', duration='$duration', cost=$cost where plan_id=$id");
?>
<script>
	alert('Plan updated successfully');
	location.href = 'create-plan.php';
</script>

