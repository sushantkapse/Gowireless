<?php
	session_start();
	$_SESSION = array();
	session_destroy();
?>
<script>
	alert("Logout Successfully.");
	location.href= "index.php";
</script>