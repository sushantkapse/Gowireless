<?php
	session_start();
	if(!isset($_SESSION["cid"])){
		header("Location: index.php");
		return;
	}
?>

<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>Customer Profile</title>
<link rel="stylesheet" href="css/admin-home.css"/>
<link rel="stylesheet" href="css/customer-register.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

</head>
<body>
	<div class="grid-container">
	  <header class="header">
	  	<div>Welcome Customer - <span style="color:yellow;"><?=$_SESSION["cname"]?></span></div>
	  </header>
	  <aside class="sidenav">
	    <ul class="sidenav__list">
	    	<li class="sidenav__list-item"><i class="fa fa-home"></i> <a href="customer-home.php">Home</a></li>
			<li class="sidenav__list-item"><i class="fa fa-user"></i> <a href="view-profile.php">View Profile</a></li>
		    <li class="sidenav__list-item"><i class="fa fa-tasks"></i><a href="view-plans.php">View Plans</a></li>
		    <li class="sidenav__list-item"><i class="fa fa-comments"></i><a href="post-complaints.php">My Complaints</a></li>
		    <li class="sidenav__list-item"><i class="fa fa-files-o"></i><a href="my-plans.php">My Plans</a></li>
		    <li class="sidenav__list-item"><i class="fa fa-sign-out"></i><a href="logout.php">Logout</a></li>
  		</ul>
	  
	  </aside>
	  <main class="main">
<?php include "config.php"?>
<?php
	$cid = $_SESSION["cid"];
	$rs = mysqli_query($con, "select * from customer where c_id=$cid");
	$row = mysqli_fetch_row($rs);
?>	  
	  	<form action="edit-profile.php" method="POST" style="border:1px solid #ccc">
  <div class="container">
    <h1>View Profile</h1>
    <hr>
    <label for="id"><b>ID</b></label>
    <input type="text" name="id" value="<?=$row[0]?>" readonly>

    <label for="email"><b>Email</b></label>
    <input type="email" placeholder="Enter Email" name="email" value="<?=$row[1]?>" required>

    <label for="psw"><b>Password</b></label>
    <input type="text" placeholder="Enter Password" name="psw" value="<?=$row[2]?>" required>

    <label for="name"><b>Full Name</b></label>
    <input type="text" placeholder="Enter Full Name" name="name" value="<?=$row[3]?>" required>

    <label for="addr"><b>Address</b></label>
    <input type="text" placeholder="Enter Address" name="addr" value="<?=$row[4]?>" required>

    <label for="phone"><b>Phone</b></label>
    <input type="text" placeholder="Enter Full Name" name="phone" value="<?=$row[5]?>" required pattern="^[6789]\d{9}$">

    <label for="aadhar"><b>Aadhar Card Number</b></label>
    <input type="text" placeholder="Enter Aadhar Card Number" name="aadhar" value="<?=$row[6]?>" required pattern="^\d{12}$">

    <div class="clearfix">
      <button type="button" class="cancelbtn" onclick="location.href='customer-home.php'">Cancel</button>
      <button type="submit" class="signupbtn">Update</button>
    </div>
  </div>
</form>
	  	
	  	
	  </main>
	  <footer class="footer">
	    <div>&copy; <?=date('Y')?> - GoWireless Networks</div>
	  </footer>
	</div>
</body>
</html>