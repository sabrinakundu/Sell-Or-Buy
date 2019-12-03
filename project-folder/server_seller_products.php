<!DOCTYPE html>
<html>
<head>
    <title>Sell or Buy</title>
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
    <li><a href="index.php">Home</a></li>
    <li><a class="active" href="selleraccount.php">Seller Account</a></li>
    <li><a href="cart.html">Cart</a></li>
    <li><a href="existing_orders.html">Orders</a></li>
    <li><a href="delivery_driver.html">Driver Account</a></li>
    <li><a href="account.html">User Account</a></li>
    </ul>
    <h1>
    <p class="page_title">Seller Products</p>
    </h1>
    <?php
    $host = "35.192.209.221";
    $user = "root";
    $password = "1234";
    $dbname = "sob";

    $conn = mysqli_connect($host, $user, $password, $dbname);
    if(!$conn) {
        die ('Could not connect to the database server' . mysqli_connect_error());
    }

    include 'server_seller_account.php'
    $seller_user_id = $user_id
    $get_seller_products = "select * from product where user_id = $seller_user_id";

    $query = mysqli_query($conn, $get_seller_products);
    while($row = mysqli_fetch_array($query)) {
      $product_name = $row['product_name'];
      $price = $row['price'];
      $conditions = $row['conditions'];
      echo "<div class='product_box'>
          <div class='top_prod_box'>
          <div class='center_prod_box'>
            <div class='product_name'>$product_name</div>
            <div class='price'>$price</div>
            <div class='conditions'>$conditions</div>
          </div>
          </div>
          </div>";

    }

    ?>
</body>
<script src='https://code.jquery.com/jquery-3.4.1.min.js'></script>
<script>
  $(.product_box).on("click", function() {
    $(".pop-overlay, .popup-content").addClass("active");
  });

  $(".close, .pop-overlay").on("click", function() {
    $(.popup-overlay, .popup-content).removeClass("active");
  })
</script>
<style>
  .popup-overlay {
    visibility: hidden;
    position: absolute;
    background: #ffffff;
    border: 3px solid #666666;
    width: 50%;
    height: 50%;
    left: 25%;
  }
  .popup-content {
    visibility: hidden;
  }
  .popup-content.active {
    visibility: visible;
  }
  button {
    display: inline-block;
    vertical-align: middle;
    border-radius: 30px;
    margin: 0.20rem;
    font-size: 1rem;
    color: #666666;
    background: #ffffff;
    border: 1px solid #666666;
  }
  button:hover {
    border: 1px solid #666666;
    background: #666666;
    color: #ffffff;
  }
</style>
</html>