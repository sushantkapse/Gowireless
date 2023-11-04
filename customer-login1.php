<?php session_start()?>
<?php include "config.php"?>

<?php
	$email = $_POST["email"];
	$psw = $_POST["psw"];
	
	$rs = mysqli_query($con, "select * from customer where c_email='$email' and c_pwd='$psw'");
	
	if($row = mysqli_fetch_row($rs)){
		$_SESSION["cid"] = $row[0];;
		$_SESSION["cname"] = $row[3];
?>
<script>
	alert('Customer Login Successful!!!');
	location.href = 'customer-home.php';
</script>
<?php
	}
	else{
?>
<script>
	alert('Customer Login Failed!!!');
	location.href = 'customer-login.php';
</script>
<?php
	}
?>