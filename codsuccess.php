<?php
include 'db.php';
 session_start();
 include 'redirect.php';


$r = $conn->prepare("SELECT * from card where customerid = ?");
$r->bindParam(1,$_SESSION['id']);
$r->execute();

if($r)
{
  $rr = $conn->prepare("SELECT * from cod where customerid = ?");
  $rr->bindParam(1,$_SESSION['id']);
  $rr->execute();
$rt = $rr->fetch();
  $name = $rt['name'];
  $card = $rt['address'];
  $expiry = $rt['city'];
}
else
{
  $name = " ";
  $card = " ";
  $expiry = " ";
}
?>
<!DOCTYPE html>
<html>
<head>
<title>Shop</title>
<link href="css/bootstrap.css" rel='stylesheet' type='text/css' />
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="js/jquery.min.js"></script>
<!-- Custom Theme files -->
<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
<!-- Custom Theme files -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Eshop Responsive web template, Bootstrap Web Templates, Flat Web Templates, Andriod Compatible web template,
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyErricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!--webfont-->
<!-- for bootstrap working -->
<script type="text/javascript" src="js/bootstrap-3.1.1.min.js"></script>
<!-- //for bootstrap working -->
<!-- cart -->
<script src="js/simpleCart.min.js"> </script>
<!-- cart -->
<link rel="stylesheet" href="css/flexslider.css" type="text/css" media="screen" />
</head>
<body>
  <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300' rel='stylesheet' type='text/css'>
  <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
  <!-- header-section-starts -->
  <div class="header">
    <div class="header-top-strip">
      <div class="container">
        <div class="header-top-left">
          <ul>
            <li><a href=""><span class="glyphicon glyphicon-user"> </span><?php echo $_SESSION['name']; ?></a></li>
                  <li><a href="logout.php"><span class="glyphicon glyphicon-reply"> </span>Logout</a></li>
          </ul>
        </div>
        <div class="header-right">
          <div class="cart box_1">
            <a href="checkout.php">
              <h3><a style="color:white;" href="checkout.php" >Shopping cart</a></h3>
            </a>
            <div class="clearfix"> </div>
          </div>
        </div>
        <div class="clearfix"> </div>
      </div>
    </div>
  </div>
  <!-- header-section-ends -->
  <div class="banner-top">
    <div class="container">
      <nav class="navbar navbar-default" role="navigation">
          <div class="navbar-header">
              <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
              </button>
          <div class="logo">
            <h1><a href="home.php">FrizGo</a></h1>
          </div>
          </div>
          <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
              <ul class="nav navbar-nav">
            <li><a href="home.php">Home</a></li>
                <li><a href="products.php?category=books">Books</a></li>
            <li><a href="products.php?category=electronics">Electronics</a></li>
            <li><a href="products.php?category=clothes">Clothes</a></li>
            <li><a href="contact.php">CONTACT</a></li>
              </ul>
          </div>
      </nav>
    </div>
  </div>
  <br>
  <div class="container">
    <br><br><br><br>
    <br><br><br><br>
    <h1 align='center'>Your order has been successfully placed. Watch out for notifications on email-id/mobile messages for updates in order.</h1><br><br>
    <a href="home.php">
      <button style="display: block; margin: 0 auto;" type="button" class="btn btn-success">Shop more!</button>
    </a>
    <br><br><br><br>
    <br><br><br><br>
    <br><br><br><br>
    <hr>
  </div>
  <div class="footer">
    <div class="container">
      <div class="footer_top">
        <div class="span_of_4">
          <div class="col-md-3 span1_of_4">
            <h4>Shop</h4>
            <ul class="f_nav">
              <li><a href="products.php?category=clothing">Clothing</a></li>
              <li><a href="products.php?category=books">Books</a></li>
              <li><a href="products.php?category=electronics">Electronics</a></li>
            </ul>
          </div>
          <div class="col-md-3 span1_of_4">
            <h4>help</h4>
            <ul class="f_nav">
              <li><a href="contact.php">Contact Info</a></li>
              <li><a href="terms.php">Terms and Conditons</a></li>
            </ul>
          </div>
          <div class="col-md-3 span1_of_4">
            <h4>account</h4>
            <ul class="f_nav">
              <li><a href="account.html">login</a></li>
              <li><a href="register.html">create an account</a></li>
              <li><a href="#">create wishlist</a></li>
              <li><a href="checkout.html">my shopping bag</a></li>
            </ul>
          </div>
          <div class="col-md-3 span1_of_4">
            <h4>Follow us on</h4>
            <ul class="f_nav">
              <li><a href="contact.php">Facebook</a></li>
              <li><a href="contact.php">Twitter</a></li>
              <li><a href="contact.php">Instagram</a></li>
              <li><a href="contact.php">Pinterest</a></li>
            </ul>
          </div>
          <div class="clearfix"></div>
        </div>
      </div>
    </div>
  </div>
  <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
  <script src='http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js'></script>
  <script src="index.js"></script>
</body>
</html>
