<?php include "config.php"?>

<?php
	$email = $_POST["email"];
	$psw = $_POST["psw"];
	$name = $_POST["name"];
	$addr = $_POST["addr"];
	$phone = $_POST["phone"];
	$aadhar = $_POST["aadhar"];
	
	$rs = mysqli_query($con, "select * from customer where c_email='$email'");
	
	if(mysqli_num_rows($rs)>0){
?>
<script>
	alert("Email already registered");
	location.href = "customer-login.php";
</script>
<?php
	}
	else{
		mysqli_query($con, "insert into customer(c_email, c_pwd, c_name, c_addr, c_phone, c_aadhar) values('$email','$psw','$name','$addr','$phone','$aadhar')");
?>
<script>
	alert("Customer registered successfully");
	location.href = "customer-login.php";
</script>
<?php
	}
?>
