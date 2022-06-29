<?php
include('./lib/login.php');
if($_POST["product_id"]){
  $_SESSION["cart_items"][] = $_POST["product_id"];
}
$added_items = $_SESSION["cart_items"];
?>

<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <title>Welcome to My Shop | Cart</title>
  <meta name="keyword" content="test-page" />
  <meta name="description" content="Lorem ipsum dolor sit amet" />
</head>

<body style="margin: 0; padding: 0;">
  <div data-trackable="main" style="width: 840px; margin: 40px 50px; padding: 0;">
    <header id="header" data-trackable="header" style="width: 100%; margin: 0; padding: 0;">
      <div data-trackable="title" style="float: left; height: 100px; width: 40%">
        <h1 id="title"><a href="/">My Shop</a></h1>
      </div>
      <form data-trackable="member" style="float: right; height: 100px; width: 60%; text-align: right;" method="POST">
        <?php print($header_html) ?>
      </form>
    </header>
    <div id="body" data-trackable="body" style="margin-left: auto; margin-right: auto; clear: both; width: 100%">
      <div id="menu" data-trackable="menu" style="float: left; width: 20%">
        <ul>
            <li><a href="./?product=prod_code_a" data-trackable="link-to-A">Product A</a></li>
            <li><a href="./?product=prod_code_b" data-trackable="link-to-B">Product B</a></li>
            <li><a href="./?product=prod_code_c" data-trackable="link-to-C">Product C</a></li>
            <li><a href="./?product=prod_code_d" data-trackable="link-to-D">Product D</a></li>
        </ul>
      </div>
      <div id="content" data-trackable="content" style="float: right; width: 80%">
        <h2>Cart</h2>
<table>
  <tr><th>Item</th></tr>
<?php
foreach($_SESSION["cart_items"] as $item){
  print('<tr><td>' . $item . '</td></tr>');
}
?>
</table>
<form method="POST" action="/checkout.php">
  <input type="submit" name="checkout" id="checkout" value="Checkout" />
</form>

      </div>
    </div>
    <footer id="footer" data-trackable="footer" style="clear: both;">
      <p>Copyright 2022</p>
    </footer>
  </div>
</body>
</html>
