<?php session_start()?>
<?php include "config.php"?>

<?php
	$uname = $_POST["uname"];
	$psw = $_POST["psw"];
	
	$rs = mysqli_query($con, "select * from admin where admin_id='$uname' and admin_pwd='$psw'");
	
	if($row = mysqli_fetch_row($rs)){
		$_SESSION["aid"] = $row[0];
		$_SESSION["uname"] = $row[2];
?>
<script>
	alert('Admin Login Successful!!!');
	location.href = 'admin-home.php';
</script>
<?php
	}
	else{
?>
<script>
	alert('Admin Login Failed!!!');
	location.href = 'index.php';
</script>
<?php
	}
?>