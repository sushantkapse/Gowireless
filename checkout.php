<?php session_start()?>
<?php include "config.php"?>

<?php
	$cid = $_SESSION["cid"];
	$pid = $_POST["pid"];
	$cardholder = $_POST["cardholder"];
	$cardno = $_POST["cardno"];
	mysqli_query($con, "insert into bill(bill_date, c_id, plan_id, card_holder, card_number) values(current_date, $cid, $pid, '$cardholder', '$cardno')");	
?>
<script>
	alert('Payment accepted successfully. Soon our service engineer will contact you. For detailed bill check your My Plans section.');
	location.href = 'customer-home.php';
</script>