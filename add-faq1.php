<?php include "config.php"?>

<?php
	$id = $_POST["id"];
	$question = $_POST["question"];
	$answer = $_POST["answer"];
	
	mysqli_query($con, "insert into question(question, answer) values('$question','$answer')");
?>
<script>
	alert('FAQ added successfully');
	location.href = 'faqs.php';
</script>

