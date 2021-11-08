<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ATNSTORE.com</title>
    <meta name = " viewport " content = " width = device - width , initial - scale = 1 ">
    <link rel = " stylesheet " href = " http://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
    <script src = "https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script src = "http://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="format.css">

</head>
<?php
include_once("connection.php");
?>
<body>
<div class="well well-sm" id="best_seller">TOP 4 most expensive Bearbrick in the world</div>
<div class="product" id="product01">
    <img src="images/Nike-x-unhcr-2006.jpg"/>
      <div><span>Nike x UNHCR 2006 World cup</span></div>
</div>
<div class="product" id="product02">
    <img src="images/CocoChanel.jpg"/>
    <div><span>Coco Chanel 1000% Bearbrick</span></div>
</div>
  <div class="product" id="product03">
    <img src="images/Blacksense.jpg"/>
      <div><span>The Black Sense Market</span></div>
    </div>
    <div class="product" id="product04">
          <img src="images/Colette.jpg"/>
          <div><span>Colette 10th anniversary</span></div>
      </div>


      <br><br><br><br><br><br><br><br><br>
      <div class="well well-sm" id="best_seller">ALL PRODUCT</div>
<div class="bg-1">
  <div class="container">
    <div class="row text-center">
      <?php
                // 	include_once("database.php");
        $result = pg_query($conn, "SELECT * FROM product");
        
          if (!$result) { //add this check.
            die('Invalid query: ' . pg_error($conn));
                        }
          while($row = pg_fetch_array($result,Null, PGSQL_ASSOC)){
      ?>
        <div class="col-sm-4">
          <div class="thumbnail">
            <img id="furniture" with ="100%" src="images/<?php echo $row['pro_image']?>">
            <p><strong><?php echo $row['product_name']?></strong></p>
            <p>$<?php echo $row['price']?></p>
            <a href="?page=cart"><button class="btn">Buy now</button></a>
          </div>
        </div>
      <?php
        }
      ?>
    </div>
  </div>
</div>
  
  <div class="bg-1">
    <div class="container">
      <div class="well well-sm" id="many">Many <span style="color: green;">SELECTION</span>. Don't speak about <span style="color: green;">PRICE!</span>
      </div>
    </div>
  </div>

      <div id="many"><span style="color: darkgreen;">DESIGNS FROM ORNAMENTS</span>
        <div style="font-size: small;">Be create in your own style!</div> 
    </div>
  </div>
  </div>
</div>
<br><br>
<div id="myCarousel" class="carousel slide" data-ride="carousel">
  <!-- Wrapper for slides -->
  <div class="carousel-inner" role="listbox">
    <div class="item active">
      <img id="exists" src="images/exists_pic1.jpg" alt="pic">
      <div class="carousel-caption">
      </div>      
    </div>

    <div class="item">
      <img id="exists" src="images/exists_pic2.jpg" alt="pic">
      <div class="carousel-caption">
      </div>      
    </div>
    <div class="item">
      <img id="exists" src="images/exists_pic4.jpg" alt="pic">
      <div class="carousel-caption">
      </div>      
    </div>
  </div>
</div>
<br>
<br>
</body>
</html>