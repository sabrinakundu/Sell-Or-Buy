<?php include('server_driver.php'); ?>
<!DOCTYPE html>
<html>
    <head>
        <title>Create Delivery Driver Account</title>
        <link rel="stylesheet" type="text/css" href="loginstyle.css">
    </head>
    <style>
.page_title, .slogan {
    font-size: 7;
}
p {
 text-align:center
}
ul {
  list-style-type: none;
  margin: 0;
  padding: 0;
  overflow: hidden;
  background-color: #333;
}
li {
  float: left;
}
li a {
  display: block;
  color: white;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
}
li b{
  display: block;
  color: white;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
}
li a:hover {
  background-color: #111;
}
    </style>
    <body>
    <ul>
      <li><b>Sell-Or-Buy</b></li>
      <li><a href="index.php">Home</a></li>
      <li><a href="selleraccount.php">Seller Account</a></li>
      <li><a href="server_cart.php">Cart</a></li>
      <li><a href="server_orders.php">Orders</a></li>
      <li><a href="server_delivery_orders.php">Driver Account</a></li>
      <li><a href="account.php">User Account</a></li>
    </ul>
    <div class="login-page">
      <div class="form">
        <h1>Start a Delivery Driver Account</h1>
        <form class="register-form" action="delivery_driver_acc.php" method="POST">
          <?php include('errors.php'); ?>
          <input type="text" name="email" placeholder="email"/>
          <input type="text" name="firstname" placeholder="first name"/>
          <input type="text" name="lastname" placeholder="last name"/>
          <input type="text" name="licensenumber" placeholder="license number"/>
          <input type="text" name="insurancenum" placeholder="insurance number"/>
          <input type="text" name="deliverzip" placeholder="deliver zip"/>
          <button type="submit" name="send">Create Account</button>
        </form>
      </div>
    </div>
    <script src='https://code.jquery.com/jquery-3.4.1.min.js'></script>
    <script>
      $('.message a').click(function(){
        $('form').animate({height: "toggle", opacity: "toggle"});
      });
	  </script>
</body>
</html>
