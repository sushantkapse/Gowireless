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
<title>Edit Employee</title>
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
		    <li class="sidenav__list-item"><i class="fa fa-comments" aria-hidden="true"></i> <a href="faqs.php">FAQs</a></li>	
		    <li class="sidenav__list-item"><i class="fa fa-comments-o" aria-hidden="true"></i> <a href="feedback.php">Feedback</a></li>		    

			<li class="sidenav__list-item"><i class="fa fa-sign-out"></i> <a href="logout.php">Logout</a></li>
  		</ul>
	  
	  </aside>
	  <main class="main">
	  
<?php include "config.php"?>

<?php
	$id = $_GET["eid"];
	$rs = mysqli_query($con, "select * from employee where emp_id=$id");
	$row = mysqli_fetch_row($rs);
?>
	  
	  <form method="post" action="edit-employee1.php">
	  <table>
	  <tr>
	  	<td colspan=2 align="center"><b>Edit Employee</b></td>
	  </tr>
	  <tr>
	  	<td><b>Employee ID:</b></td>
	  	<td><input type="text" name="id" value="<?=$row[0]?>" readOnly></td>
	  </tr>
	  <tr>
	  	<td><b>Name:</b></td>
	  	<td><input type="text" name="name" value="<?=$row[1]?>" required></td>
	  </tr>
	  <tr>
	  	<td><b>Address:</b></td>
	  	<td><input type="text" name="addr" value="<?=$row[3]?>" required></td>
	  </tr>
	  <tr>
	  	<td><b>Phone:</b></td>
	  	<td><input type="text" name="phone" required value="<?=$row[4]?>" pattern="^[6789]\d{9}$"></td>
	  </tr>
	  <tr>
	  	<td><b>Joining Date:</b></td>
	  	<td><input type="date" name="jdate" value="<?=date('Y-m-d', strtotime($row[5]))?>" required></td>
	  </tr>
	  <tr>
	  	<td><input type="submit" value="Update" class="btn"></td>
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