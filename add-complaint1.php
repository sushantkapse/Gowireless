<?php include "config.php"?>

<?php
	$compid = $_POST["compid"];
	$compdate = $_POST["compdate"];
	$comptext = $_POST["comptext"];
	$bid =$_POST["bid"];
	
	mysqli_query($con, "insert into complaints VALUES($compid,'$compdate', $bid, '$comptext', 'Pending')");
?>
<script>
	alert('Complaint posted successfully');
	location.href = 'post-complaints.php';
</script>

