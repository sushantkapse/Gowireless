<?php include "config.php"?>

<?php
	if(isset($_POST['submit'])){
		$name = $_POST['name'];
		$phone = $_POST['phone'];
		$email = $_POST['email'];
		$message = $_POST['message'];
		mysqli_query($con, "insert into feedback(name, phone, email, message) values('$name', '$phone', '$email', '$message')");
		echo "<script>alert('Thank you for your valuable feedback.');</script>";
	}
?>

<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>GoWireless Network</title>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
<link rel="stylesheet" href="css/style.css">
<link rel="stylesheet" href="css/feedback.css">

<style>
	body {
		background-image: url("images/background1.png");
		background-position: center center;
		background-repeat: no-repeat;
		background-attachment: fixed;
		background-size: cover;
	}
	
	.center {
  		display: flex;
  		justify-content: center;
  		align-items: center;
  		height: 400px;
  		width: 100%;
  		font-family: Georgia;
  		font-size: 40px;
  		color: red;
  		text-shadow: 2px 2px 2px yellow;
	}
	
</style>
</head>
<body >
	<?php include "header.php"?>
	
	<div class="center">

  		<p>GoWireless Network Internet Service Providers(ISP)... </p>

	</div>

	<?php include "footer.php"?>


<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Feedback</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form method="POST">
          <div class="form-group">
            <label for="recipient-name" class="col-form-label">Name:</label>
            <input type="text" name="name" class="form-control" id="recipient-name" required>
          </div>
          <div class="form-group">
            <label for="recipient-name" class="col-form-label">Phone:</label>
            <input type="text" name="phone" class="form-control" id="recipient-name" pattern="^[6789]\d{9}$" required>
          </div>
          <div class="form-group">
            <label for="recipient-name" class="col-form-label">Email:</label>
            <input type="email" name="email" class="form-control" id="recipient-name" required>
          </div>
          <div class="form-group">
            <label for="message-text" class="col-form-label">Feedback:</label>
            <textarea class="form-control" id="message-text" name="message" required></textarea>
          </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="submit" name="submit" class="btn btn-primary">Send message</button>
      </div>
        </form>
    </div>
  </div>
</div>
</body>
</html>