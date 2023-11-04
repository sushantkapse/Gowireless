<?php include "config.php"?>

<?php
	$id = $_POST["id"];
	$email = $_POST["email"];
	$psw = $_POST["psw"];
	$name = $_POST["name"];
	$addr = $_POST["addr"];
	$phone = $_POST["phone"];
	$aadhar = $_POST["aadhar"];
	
	$rs = mysqli_query($con, "select * from customer where c_email='$email' and c_id<>$id");
	
	if(mysqli_num_rows($rs)>0){
?>
<script>
	alert("Email already registered");
	location.href = "view-profile.php";
</script>
<?php
	}
	else{
		mysqli_query($con,"update customer set c_email='$email', c_pwd='$psw', c_name='$name', c_addr='$addr', c_phone='$phone', c_aadhar='$aadhar' where c_id=$id");
?>
<script>
	alert("Customer profile updated successfully");
	location.href = "customer-home.php";
</script>
<?php
	}
?>

