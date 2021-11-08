<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ATNSTORE.com</title>
    <meta name = " viewport " content = " width = device - width , initial - scale = 1 ">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="format.css">

</head>
<?php
include_once("connection.php");
session_start();
?>
<body>
<header>
<div class="discover" align="center"><a href="?page=aboutus">Discover What ATN.store is all about<img class="img" src="images/scroll-right-icon.png"></a></div>
  <div class="col-md-12">
  <div class="row">
    <div class="location"><a href="https://bom.to/9ssiSK"><img class="img" src="images/Location-2-icon.png"><span style="color:black">Location</span></a>
      <a href="?page=explore-style"><img class="img" src="images/Very-Basic-Idea-icon.png"><span style="color:black">Ideas and inspiration</span></a>
      <form class="navbar-form navbar-left" action="index.php?page=search" method="post">
        <div class="form-group">
          <input type="text" class="form-control" placeholder="Search" name="txtSearch">
          </div>
          <button type="submit" class="btn">Search</button>
      </form>
        <div class="home" align="center">
        <?php
        if(isset($_SESSION['us']) && $_SESSION['us'] !=""){
        ?>
        <a href="?page=update_customer"><img class="img" src="images/account.png"><span style="color:black">Hi,<?php echo $_SESSION['us']?>!</span></a>
        &nbsp;&nbsp;&nbsp;<span class="glyphicon glyphicon-log-out"><a href="?page=logout"><span style="color:black">Logout</a></span>&nbsp;&nbsp;&nbsp;
        <?php
        }
        else
        {
        ?>
        <img class="img" src="images/Lock-icon.png"><a href="?page=login"><span style="color:black">Log in</a></span>&nbsp;&nbsp;&nbsp;
        <img class="img" src="images/Star-icon.png"><a href="?page=register"><span style="color:black">Register</a></span>
        <?php
        }
        ?>
        <a href="?page=cart"><span style="color:black"><img class="img" src="images/Shopping-Cart-icon.png">My Cart</span></a>
      </div>
    </div>
    </div>
  </div>
</div>
<nav class="navbar-default">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
      <a class="navbar-brand" href="?page=home"><span style="bold;300px;color:darkgreen"><span class="glyphicon glyphicon-gift"></span><b> ATN STORE</b></span></a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav">
        <li><a href="?page=home">HOME</a></li>
        <li><a href="?page=bearbrick">BEARBRICK</a></li>
        <li><a href="?page=mafex">MAFEX</a></li>
        <li><a href="?page=kubrick">KUBRICK</a></li>
        <li><a href="?page=dolls">VINYL COLLECTIBLE DOLLS</a></li>
        <li><a href="?page=sofvi">SOFVI</a></li>
        <li><a href="?page=others">OTHERS</a></li>
        <li><a href="?page=all_product">All Products</a></li>
        <li><a href="?page=management_category">Management Category</a></li>
        <li><a href="?page=management_product">Management Product</a></li>
      </ul>
    </div>
  </div>
  <div id="welcome">
    <marquee direction="left" behavior="scroll" scrollamount="8">
        Welcome to ATN STORE. Shop safely your way!<span class="glyphicon glyphicon-asterisk"></span>
    </marquee>
</div>
</nav>
</header>
   
<?php
if(isset($_GET['page']))
{
    $page = $_GET['page'];
    if($page=="home"){
        include_once("home.php");
    }
    elseif($page=="bearbrick")
    {
      include_once("Bearbrick.php");
    } 
    elseif($page=="mafex")
    {
      include_once("Mafex.php");
    } 
    elseif($page=="kubrick")
    {
      include_once("Kubrick.php");
    }
    elseif($page=="dolls")
    {
      include_once("Dolls.php");
    }
    elseif($page=="sofvi")
    {
      include_once("Sofvi.php");
    }
    elseif($page=="others")
    {
      include_once("Others.php");
    }
    elseif($page=="aboutus")
    {
      include_once("About-us.php");
    }
    elseif($page=="login")
    {
      include_once("Login.php");
    }
    elseif($page=="logout")
    {
      include_once("Logout.php");
    }
    elseif($page=="register")
    {
      include_once("Register.php");
    }
    elseif($page=="guarantee")
    {
      include_once("Guarantee.php");
    }
    elseif($page=="explore-style")
    {
      include_once("Explore-style.php");
    }
    elseif($page=="update_customer")
    {
      include_once("Update_customer.php");
    }
    elseif($page=="management_category")
    {
      include_once("Category_Management.php");
    }
    elseif($page=="management_product")
    {
      include_once("Product_Management.php");
    }
    else if($page=="add_category"){
      include_once("Add_Category.php");
    }
    else if($page=="update_category"){
      include_once("Update_Category.php");
    }
    else if($page=="add_product"){
      include_once("Add_Product.php");
    }
    else if($page=="update_product"){
      include_once("Update_Product.php");
    }
    else if($page=="all_product"){
      include_once("All_product.php");
    }
    else if($page=="cart"){
      include_once("Cart.php");
    }
}
else{
    include("home.php");
}
?>

<footer>
  <div class="container-fluid text-center" id="footer">
    <h2>SERVICES</h2>
    <h4>Thanks for trusting us<span class="glyphicon glyphicon-heart"></span></h4>
    <br>
    <div class="row">
      <div class="col-sm-4">
        <h4><b>About us</b></h4>
        <p><a href="?page=aboutus">ATN STORE</a></p>
        <p><a href="?page=guarantee">Guarantee</a></p>
      </div>
      <div class="col-sm-4">
        <h4><b>Quick Links</b></h4>
        <p><a href="?page=home">Home</a></p>
        <p><a href="?page=bearbrick">Bearbrick</a></p>
        <p><a href="?page=mafex">Mefex</a></p>
        <p><a href="?page=kubrick">Kubrick</a></p>
        <p><a href="?page=explore-style">Explore Styles</a></p>
      </div>
      <div class="col-sm-4">
        <h4><b>Connect with us</b></h4>
        <a href="https://www.facebook.com/planejadosdecorahouse/"><img id="con_us" src="images/facebook.png"></a>&nbsp;&nbsp;&nbsp;
        <a href="https://www.instagram.com/decorahouse/"><img id="con_us" src="images/Instagram.png"></a>&nbsp;&nbsp;&nbsp;
        <a><img id="con_us" src="images/twitter.png"></a>
        <p></p>
        <p></p>
        <p><span class="glyphicon glyphicon-phone-alt" style="font-size: 20px">:&nbsp;<b>0290.999.9999<b></span></p>
        <p></p>
      </div>
    </div>
  </div>
</footer>
</body>
</html>
