<?php include "config.php"?>

<?php
	$id = $_POST["id"];
	$name = $_POST["name"];
	
	$addr = $_POST["addr"];
	$phone =$_POST["phone"];
	$jdate = $_POST["jdate"];
	
	mysqli_query($con, "update employee set emp_name='$name', emp_addr='$addr', emp_phone='$phone', emp_join_date='$jdate' where emp_id=$id");
?>
<script>
	alert('Employee updated successfully');
	location.href = 'employee.php';
</script>

