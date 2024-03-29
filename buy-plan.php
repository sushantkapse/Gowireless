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
  <title>Payment</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
  <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">
  <link rel="stylesheet" href="css/buy-plan.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

</head>
<body>
<?php include "config.php"?>

<?php
	$id = $_GET["pid"];
	$rs = mysqli_query($con, "select * from plans where plan_id=$id");
  $row = mysqli_fetch_assoc($rs);
?>

  <main class="page payment-page">
    <section class="payment-form dark">
      <div class="container">
        <div class="block-heading">
          <h2>Payment</h2>
        </div>
        <form method="post" action="checkout.php">
          <div class="products">
            <h3 class="title">Checkout</h3>
            <div class="item">
              <span class="price">Rs.<?=$row["cost"]?></span>
              <p class="item-name"><?=$row["plan_name"]?></p>
              <p class="item-description"><?=$row["speed"]?>(<?=$row["duration"]?>)</p>
            </div>

            <div class="total">Total<span class="price">Rs.<?=$row["cost"]?></span></div>
          </div>
          <div class="card-details">
            <h3 class="title">Credit Card Details</h3>
            <div class="row">
              <div class="form-group col-sm-7">
                <label for="card-holder">Card Holder</label>
                <input id="card-holder" type="text" class="form-control" placeholder="Card Holder" aria-label="Card Holder" aria-describedby="basic-addon1" name="cardholder">
              </div>
              <div class="form-group col-sm-5">
                <label for="">Expiration Date</label>
                <div class="input-group expiration-date">
                  <input type="text" class="form-control" placeholder="MM" aria-label="MM" aria-describedby="basic-addon1">
                  <span class="date-separator">/</span>
                  <input type="text" class="form-control" placeholder="YY" aria-label="YY" aria-describedby="basic-addon1">
                </div>
              </div>
              <div class="form-group col-sm-8">
                <label for="card-number">Card Number</label>
                <input id="card-number" type="text" class="form-control" placeholder="16 Digit Card Number" aria-label="Card Holder" aria-describedby="basic-addon1" pattern="^\d{16}$" name="cardno">
              </div>
              <div class="form-group col-sm-4">
                <label for="cvc">CVC</label>
                <input id="cvc" type="password" class="form-control" placeholder="CVC" aria-label="Card Holder" aria-describedby="basic-addon1" pattern="^\d{3}$">
              </div>
              <div class="form-group col-sm-12">
                <button type="submit" class="btn btn-primary btn-block">Proceed</button>
              </div>
            </div>
          </div>
          <input type="hidden" name="pid" value="<?=$id?>">
        </form>
      </div>
    </section>
  </main>
</body>
<script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
</body>
</html>
