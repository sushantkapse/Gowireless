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
	$rs = mysqli_query($con, "SELECT `AUTO_INCREMENT` FROM  INFORMATION_SCHEMA.TABLES WHERE TABLE_SCHEMA = 'isp' AND TABLE_NAME = 'complaints'");
	$row = mysqli_fetch_row($rs);
	$compid = $row[0];
	
	$rs = mysqli_query($con, "select current_date");
	$row = mysqli_fetch_row($rs);
	$compdate = $row[0];
	
	$cid = $_SESSION["cid"];
	$rs = mysqli_query($con, "select bill_id from bill where c_id=$cid");
?>

	  <form method="post" action="add-complaint1.php">
	  <table>
	  <tr>
	  	<td colspan=2 align="center"><b>Post Complaint</b></td>
	  </tr>
	  <tr>
	  	<td><b>Complaint ID:</b></td>
	  	<td><input type="text" name="compid" value="<?=$compid?>" readOnly></td>
	  </tr>
	  <tr>
	  	<td><b>Complaint Date:</b></td>
	  	<td><input type="text" name="compdate" value="<?=$compdate?>" readOnly></td>
	  </tr>
	  <tr>
	  	<td><b>Complaint:</b></td>
	  	<td><textarea rows=4 cols=40 name="comptext" required></textarea></td>
	  </tr>
	  <tr>
	  	<td><b>Bill ID:</b></td>
	  	<td>
	  	<select name="bid" required>
	  		<option value="">Select Bill ID</option>
	  		<?php while($row = mysqli_fetch_row($rs)){ ?>
	  		<option value="<?=$row[0]?>"><?=$row[0]?></option>
	  		<?php } ?>
	  	</select>
	  	
	  	</td>
	  </tr>
	  <tr>
	  	<td><input type="submit" value="Post" class="btn"></td>
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