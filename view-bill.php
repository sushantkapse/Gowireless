<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Surfwell</title>
    <style>
        body{
            background-color: #F6F6F6; 
            margin: 0;
            padding: 0;
        }
        h1,h2,h3,h4,h5,h6{
            margin: 0;
            padding: 0;
        }
        p{
            margin: 0;
            padding: 0;
        }
        .container{
            width: 80%;
            margin-right: auto;
            margin-left: auto;
        }
        .brand-section{
           background-color: #0d1033;
           padding: 10px 40px;
        }
        .logo{
            width: 50%;
        }

        .row{
            display: flex;
            flex-wrap: wrap;
        }
        .col-6{
            width: 50%;
            flex: 0 0 auto;
        }
        .text-white{
            color: #fff;
        }
        .company-details{
            float: right;
            text-align: right;
        }
        .body-section{
            padding: 16px;
            border: 1px solid gray;
        }
        .heading{
            font-size: 20px;
            margin-bottom: 08px;
        }
        .sub-heading{
            color: #262626;
            margin-bottom: 05px;
        }
        table{
            background-color: #fff;
            width: 100%;
            border-collapse: collapse;
        }
        table thead tr{
            border: 1px solid #111;
            background-color: #f2f2f2;
        }
        table td {
            vertical-align: middle !important;
            text-align: center;
        }
        table th, table td {
            padding-top: 08px;
            padding-bottom: 08px;
        }
        .table-bordered{
            box-shadow: 0px 0px 5px 0.5px gray;
        }
        .table-bordered td, .table-bordered th {
            border: 1px solid #dee2e6;
        }
        .text-right{
            text-align: end;
        }
        .w-20{
            width: 20%;
        }
        .float-right{
            float: right;
        }
    </style>
</head>
<body>
<?php include "config.php"?>

<?php
	$bid = $_GET["bid"];
	
	$rs = mysqli_query($con, "select bill_id, bill_date, c_name, c_addr, c_phone, c_email, plan_name, speed, duration, cost, status from bill, customer, plans where bill.c_id = customer.c_id and bill.plan_id = plans.plan_id and bill_id=$bid");
    $row = mysqli_fetch_assoc($rs);
?>


    <div class="container">
        <div class="brand-section">
            <div class="row">
                <div class="col-6">
                    <h1 class="text-white">GoWireless Networks</h1>
                </div>
                <div class="col-6">
                    <div class="company-details">
                        <p class="text-white">Pranjali/Kirti</p>
                        <p class="text-white">Pune 411035</p>
                        <p class="text-white">+91 98765 43102</p>
                    </div>
                </div>
            </div>
        </div>

        <div class="body-section">
            <div class="row">
                <div class="col-6">
                    <h2 class="heading">Bill No.: <?=$row["bill_id"]?></h2>
                    <p class="sub-heading">Bill Date: <?=$row["bill_date"]?></p>
                    <p class="sub-heading">Email Address: customer@gmail.com </p>
                </div>
                <div class="col-6">
                    <p class="sub-heading">Full Name: <?=$row["c_name"]?> </p>
                    <p class="sub-heading">Address:  <?=$row["c_addr"]?></p>
                    <p class="sub-heading">Phone Number:  <?=$row["c_phone"]?></p>
                    <p class="sub-heading">Email:  <?=$row["c_email"]?></p>
                </div>
            </div>
        </div>

        <div class="body-section">
            <h3 class="heading">Ordered Plans</h3>
            <br>
            <table class="table-bordered">
                <thead>
                    <tr>
                        <th>Plan</th>
                        <th class="w-20">Cost</th>
                        <th class="w-20">Grand Total</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td><?=$row["plan_name"]?>(<?=$row["speed"]?>)-<?=$row["duration"]?></td>
                        <td><?=$row["cost"]?></td>
                        <td><?=$row["cost"]?></td>
                    </tr>
                    <tr>
                        <td colspan="2" class="text-right">Grand Total</td>
                        <td><?=$row["cost"]?></td>
                    </tr>
                </tbody>
            </table>
            <br>
            <h3 class="heading">Installation Status: <?=$row["status"]?></h3>
            <h3 class="heading">Payment Mode: Debit/Credit Card</h3>
        </div>
        <center><button align="center" onclick="window.print()" style="margin:10px;">Print</button></center>
    </div>      
</body>
</html>