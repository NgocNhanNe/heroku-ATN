<div class="well well-sm" id="best_seller">KUBRICK</div>
<div class="bg-1">
  <div class="container">
    <div class="row text-center">
      <?php
                // 	include_once("database.php");
        $result = pg_query($conn, "SELECT * FROM product where cat_id ='C003'");
        
          if (!$result) { //add this check.
            die('Invalid query: ' . pg_error($conn));
                        }
          while($row = pg_fetch_array($result,Null, PGSQL_ASSOC)){
      ?>
        <div class="col-sm-4">
          <div class="thumbnail">
            <img id="furniture" src="images/<?php echo $row['pro_image']?>">
            <p><strong><?php echo $row['product_name']?></strong></p>
            <p>$<?php echo $row['price']?></p>
            <button class="btn">Buy now</button>
          </div>
        </div>
      <?php
        }
      ?>
    </div>
  </div>
</div>
