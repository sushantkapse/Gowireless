<?php include "config.php"?>

<?php
	$id = $_POST["id"];
	$name = $_POST["name"];
	
	$pwd = mt_rand(1111,9999);;  
	$addr = $_POST["addr"];
	$phone =$_POST["phone"];
	$jdate = $_POST["jdate"];
	
	mysqli_query($con, "insert into employee(emp_name, emp_pwd, emp_addr, emp_phone, emp_join_date) values('$name','$pwd','$addr','$phone','$jdate')");
?>
<script>
	alert('Employee added successfully');
	location.href = 'employee.php';
</script>

