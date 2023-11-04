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
<title>Customer Complaints</title>
<link rel="stylesheet" href="css/admin-home.css"/>
	<link rel="stylesheet" href="https://cdn.datatables.net/1.10.22/css/jquery.dataTables.min.css" />
	<script type="text/javascript" src="https://code.jquery.com/jquery-3.5.1.js"></script>
	<script type="text/javascript" src="https://cdn.datatables.net/1.10.22/js/jquery.dataTables.min.js"></script>
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
	$cid = $_SESSION["cid"];
	$rs = mysqli_query($con, "select * from complaints where bill_id in (select bill_id from bill where c_id=$cid)");
?>

	  <div class="container">
	  <h2>My Complaints</h2>
	  <h3><a href="add-complaint.php" class="btn" title="Post Complaint" style="margin:10px;"><i class="fa fa-plus"></i></a></h3>
	<table id="tableID" style="width:100%" class="table table-striped sampleTable">
	<thead>
	<tr>
		<th>Complaint ID</th>
		<th>Date</th>
		<th>Bill ID</th>
		<th>Complaint</th>
		<th>Status</th>
	</tr>
	</thead>
	<tbody>
<?php
	while($row = mysqli_fetch_row($rs)){
?>
	<tr>
		<td><?=$row[0]?></td>
		<td><?=$row[1]?></td>
		<td><?=$row[2]?></td>
		<td><?=$row[3]?></td>
		<td><?=$row[4]?></td>
	</tr>
<?php
	}
?>	
	</tbody>	
	</table>
</div>
	  
	  <script>
	$(document).ready(function() {
		$('#tableID').DataTable({ });
	});
</script>
	  	
	  	
	  </main>
	  <footer class="footer">
	    <div>&copy; <?=date('Y')?> - GoWireless Networks</div>
	  </footer>
	</div>
</body>
</html>