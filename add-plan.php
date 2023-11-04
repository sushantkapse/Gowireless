<?php
	session_start();
	if(!isset($_SESSION["aid"])){
		header("Location: index.php");
		return;
	}
?>

<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>Add Plan</title>
<link rel="stylesheet" href="css/admin-home.css"/>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
.btn{
	text-decoration:none;
	padding: 5px;
	background: black;
	color: white;
	border-radius: 5px;
}
</style>
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
		    <li class="sidenav__list-item"><i class="fa fa-comments" aria-hidden="true"></i> <a href="faqs.php">FAQs</a></li>			    <li class="sidenav__list-item"><i class="fa fa-comments-o" aria-hidden="true"></i> <a href="feedback.php">Feedback</a></li>		    
		    
		    <li class="sidenav__list-item"><i class="fa fa-sign-out"></i> <a href="logout.php">Logout</a></li>
  		</ul>
	  
	  </aside>
	  <main class="main">
	  
<?php include "config.php"?>

<?php
	$rs = mysqli_query($con, "SELECT `AUTO_INCREMENT` FROM  INFORMATION_SCHEMA.TABLES WHERE TABLE_SCHEMA = 'isp' AND TABLE_NAME = 'Plans'");
	$row = mysqli_fetch_row($rs);
	$id = $row[0];
?>
	  
	  <form method="post" action="add-plan1.php">
	  <table>
	  <tr>
	  	<td colspan=2 align="center"><b>Add Plan</b></td>
	  </tr>
	  <tr>
	  	<td><b>Plan ID:</b></td>
	  	<td><input type="text" name="id" value="<?=$id?>" readOnly></td>
	  </tr>
	  <tr>
	  	<td><b>Plan Name:</b></td>
	  	<td><input type="text" name="name" required></td>
	  </tr>
	  <tr>
	  	<td><b>Speed:</b></td>
	  	<td><input type="text" name="speed" required></td>
	  </tr>
	  <tr>
	  	<td><b>Data:</b></td>
	  	<td><input type="text" name="data" required></td>
	  </tr>
	  <tr>
	  	<td><b>Duration:</b></td>
	  	<td>
	  	<select name="duration" required>
	  		<option value="">Select Duration</option>
	  		<option value="1 Month">1 Month</option>
	  		<option value="1 Month">6 Month</option>
	  		<option value="1 Month">12 Month</option>
	  		<option value="1 Month">24 Month</option>
	  	</select>
	  	
	  	</td>
	  </tr>
	  <tr>
	  	<td><b>Cost:</b></td>
	  	<td><input type="number" name="cost" required min="200" max="25000"></td>
	  </tr>
	  <tr>
	  	<td><input type="submit" value="Save" class="btn"></td>
	  	<td><input type="reset" value="Clear" class="btn"></td>
	  </tr>
	  
	  </table>
	  
	  </form>
	  
	  </main>
	  <footer class="footer">
   	    <div>&copy; <?=date('Y')?> - GoWireless Networks</div>
	  </footer>
	</div>
</body>
</html>