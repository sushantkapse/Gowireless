<?php include "config.php"?>

<?php
	mysqli_query($con, "delete from chats");
	header("Location: chatbot.php");
?>