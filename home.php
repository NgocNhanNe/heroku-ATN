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
     
<div class="bg-1">
    <div class="container">
    <div class="well well-sm" id="best_seller">BEST SELLER</div>
      <div class="row text-center">
        <div class="col-sm-4">
          <div class="thumbnail">
            <img src="images/bearbrick.jpg" alt="BEARBRICK">
            <p><strong>BEARBRICK DAVE CHROME Ver. 100% & 400%</strong></p>
            <p>$5,000</p>
            <a href="?page=cart"><button class="btn">Buy now</button></a>
          </div>
        </div>
        <div class="col-sm-4">
          <div class="thumbnail">
            <img src="images/batman-mafex.jpg" alt="MAFEX">
            <p><strong>MAFEX BATMAN Ver.3.0</strong></p>
            <p>$850</p>
            <a href="?page=cart"><button class="btn">Buy now</button></a>
          </div>
        </div>
        <div class="col-sm-4">
          <div class="thumbnail">
            <img src="images/dolls-vcd.jpg" alt="DOLLS">
            <p><strong>VCD Marilyn Monroe GOLD Ver.</strong></p>
            <p>$600</p>
            <a href="?page=cart"><button class="btn">Buy now</button></a>
          </div>
        </div>
        <div class="col-sm-4">
          <div class="thumbnail">
            <img src="images/sofvi-smak.jpg" alt="SOFVI">
            <p><strong>SMAK! Martin by Nathalie Lete</strong></p>
            <p>$1,380</p>
            <a href="?page=cart"><button class="btn">Buy now</button></a>
          </div>
        </div>
        <div class="col-sm-4">
          <div class="thumbnail">
            <img src="images/1000-bearbrick-god-selection-xxx-white.jpg" alt="BEARBRICK">
            <p><strong>1000% Bearbrick God Selection XXX White</strong></p>
            <p>$4,500</p>
            <a href="?page=cart"><button class="btn">Buy now</button></a>
          </div>
        </div>
        <div class="col-sm-4">
          <div class="thumbnail">
            <img src="images/0075_200824_72bxik_y_360x.jpg" alt="DOLLS" width="100" height="100">
            <p><strong>VCD ANDY WARHOL SILKSCREEN VARIANT 2020 Ver.</strong></p>
            <p>$420</p>
            <a href="?page=cart"><button class="btn">Buy now</button></a>
          </div>
        </div>
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
      <img id="exists" src="images/exist_pic3.png" alt="pic">
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