<?php
	session_start();

	if(!isset($_SESSION['aid'])){
		header("Location: index.php");
		exit();
	}
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>Admin Home</title>
<link rel="stylesheet" href="css/admin-home.css"/>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
	<div class="grid-container">
	  <header class="header">
	  	<div>Welcome Admin - <span style="color:yellow;"><?=$_SESSION["uname"]?></span></div>
	  </header>
	  <aside class="sidenav">
	    <ul class="sidenav__list">
	    	<li class="sidenav__list-item"><i class="fa fa-home"></i> <a href="admin-home.php">Home</a></li>
			<li class="sidenav__list-item"><i class="fa fa-tasks" aria-hidden="true"></i>
<a href="create-plan.php">Create Plan</a></li>
		    <li class="sidenav__list-item"><i class="fa fa-users" aria-hidden="true"></i>
 <a href="customer.php">Customer</a></li>
		    <li class="sidenav__list-item"><i class="fa fa-user" aria-hidden="true"></i> <a href="employee.php">Employees</a> </li>
		    <li class="sidenav__list-item"><i class="fa fa-money"></i> <a href="bill.php">Bills</a></li>
		    <li class="sidenav__list-item"><i class="fa fa-comments" aria-hidden="true"></i> <a href="complaints.php">Complaints</a></li>
		    <li class="sidenav__list-item"><i class="fa fa-comments" aria-hidden="true"></i> <a href="faqs.php">FAQs</a></li>
		    <li class="sidenav__list-item"><i class="fa fa-comments-o" aria-hidden="true"></i> <a href="feedback.php">Feedback</a></li>		    
		    <li class="sidenav__list-item"><i class="fa fa-sign-out"></i> <a href="logout.php">Logout</a></li>
  		</ul>
	  
	  </aside>
	  <main class="main">
	  	<img alt="Admin" src="images/admin.jpg" style="padding: 200px;">
	  </main>
	  <footer class="footer">
	    <div>&copy; <?=date('Y')?> - GoWireless Network</div>
	  </footer>
	</div>
</body>
</html>