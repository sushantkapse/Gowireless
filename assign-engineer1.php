<?php include "config.php"?>

<?php
	$bid = $_POST["bid"];
	$eid = $_POST["eid"];
	
	mysqli_query($con, "update bill set emp_id=$eid where bill_id=$bid");
?>

<script>
	alert('Service engineer assigned successfully');
	location.href = 'bill.php';
</script>
