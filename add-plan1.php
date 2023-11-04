<?php include "config.php"?>

<?php
	$id = $_POST["id"];
	$name = $_POST["name"];
	$speed = $_POST["speed"];
	$data =$_POST["data"];
	$duration = $_POST["duration"];
	$cost = $_POST["cost"];
	
	mysqli_query($con, "insert into plans (plan_name, speed, data, duration, cost) VALUES('$name','$speed', '$data', '$duration', $cost)");
?>
<script>
	alert('Plan added successfully');
	location.href = 'create-plan.php';
</script>

