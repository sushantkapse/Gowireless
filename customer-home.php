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
<title>Customer Home</title>
<link rel="stylesheet" href="css/admin-home.css"/>
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
	  	<img src="images/user.jpg" style="padding: 200px;"/>
	  </main>
	  <footer class="footer">
   	    <div>&copy; <?=date('Y')?> - GoWireless Networks</div>
	  </footer>
	</div>
</body>
</html>