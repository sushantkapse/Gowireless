<?php include "config.php"?>

<?php
	$id = $_POST["id"];
	$question = $_POST["question"];
	$answer = $_POST["answer"];
	
	mysqli_query($con, "update question set question='$question', answer='$answer' where id=$id");
?>
<script>
	alert('Question updated successfully');
	location.href = 'faqs.php';
</script>

