<div class="container">
    <h1><u>All Product</u></h1>
</div>
<div class="container">
    <?php
    include_once("connection.php");
    if (isset($_POST["txtSearch"])) {
        $data = $_POST['txtSearch'];
          if($data=="")
          {
            echo "<script>alert('Please Enter Data!')</script>";
            echo '<meta http-equiv="refresh" content="0;URL=index.php">';
          }
         else {
      $result = mysqli_query($conn, "SELECT * FROM product where Product_ID like '%".$data."%' or Product_Name like '%".$data."%'");
if(mysqli_num_rows($result)==0)
{
echo  "<script>alert('No find data. Please Enter Again!')</script>";
echo '<meta http-equiv="refresh" content="0;URL=index.php">';
}
else {
if (!$result) { //add this check.
die('Invalid query: ' . mysqli_error($conn));
}
else {
while($row = mysqli_fetch_array($result, MYSQLI_ASSOC)){
?>
    <!--Display product-->
    <div class="col-sm-3">
        <div class="card">
            <img src="product-imgs/<?php echo $row['Pro_image']?>" style="width:100%">
            <h4 class="name"><a
                    href="?page=quanly_chitietsanpham&ma=<?php echo  $row['Product_ID']?>"><?php echo  $row['Product_Name']?></a>
            </h4>
            <div class="price"><ins>$ <?php echo  $row['Price']?></ins> <del class="oldprice">
                    $<?php echo  $row['oldPrice']?></del></div>
            <p><button><a href="?page=cartfuntion&ma=<?php echo  $row['Product_ID']?>">Add to Cart</a></button></p>
        </div>
    </div>
    <?php
				}
      }
    }
  }
}
?>
</div>