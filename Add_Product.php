    <!-- Bootstrap -->
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<script type="text/javascript" src="scripts/ckeditor/ckeditor.js"></script>
	<script type="text/javascript" src="./scripts/ckeditor/ckeditor.js"></script>
<?php
	include_once("connection.php");
	function bind_Category_List($conn){
		$sqlstring="select cat_id, cat_name from category";
		$result=pg_query($conn, $sqlstring);
		echo"<select name='CategoryList' class='form-control'>
		<option value='0'>Choose category</option>";
		while($row=pg_fetch_array($result,Null, PGSQL_ASSOC)){
			echo"<option value='".$row['cat_id']."'>".$row['cat_name'].
			"</option>";
		}
		echo"</select>";
	}
?>
<?php
if(isset($_POST["btnAdd"]))
{
	$id=$_POST["txtID"];
	$proname=$_POST["txtName"];
	$short=$_POST["txtShort"];
	$detail=$_POST["txtDetail"];
	$price=$_POST["txtPrice"];
	$oldprice=$_POST["txtOldPrice"];
	$qty=$_POST["txtQty"];
	$pic=$_FILES['txtImage'];
	$category=$_POST['CategoryList'];
	$err="";

	if(trim($id)==""){
		$err.="<li>Enter product ID, please</li>";
	}
	if(trim($proname)==""){
		$err.="<li>Enter product name, please</li>";
	}
	if($category=="0"){
		$err.="<li>Choose product category, please</li>";
	}
	if(!is_numeric($price)){
		$err.="<li>Product price must be number</li>";
	}
	if($price <= 0){
		$err.="<li>Product price must be more than 0</li>";
	}
	if(!is_numeric($qty)){
		$err.="<li>Product quantity must be number</li>";
	}
	if($err !=""){
		echo "<ul>$err</ul>";
	}
	else{
		if($pic['type']=="image/jpg"||$pic['type']=="image/jpeg"||$pic['type']=="image/png"||
		$pic['type']=="image/gif"){
			if($pic['size']<=614400){
				$sq="select * from product where product_id='$id' or product_name='$proname'";
				$result=pg_query($conn,$sq);
				if(pg_num_rows($result)==0)
				{
					copy($pic['tmp_name'],"product-imgs/".$pic['name']);
					$filePic=$pic['name'];
					$sqlstring="INSERT INTO product(product_id,product_name,price,oldprice,smalldesc,
					detaildesc,prodate,pro_qty,pro_image, cat_id)
					VALUES ('$id','$proname','$price','$oldprice','$short','$detail','".date('Y-m-d H:i:s')."',
					'$qty','$filePic','$category')";
					pg_query($conn,$sqlstring) or die(pg_errormessage($conn));
					echo'<meta http-equiv="refresh" content="0;URL=?page=management_product"/>';	
				}
				else{
					echo"<li>Duplicate product ID or Name</li>";
				}
			}
			else{
				echo"size of image too big";
			}
		}
		else{
			echo"image format is not correct";
		}
	}
	
}
?>
<div class="container">
	<h2>Adding new Product</h2>

	 	<form id="frmProduct" name="frmProduct" method="post" enctype="multipart/form-data" action="" class="form-horizontal" role="form">
				<div class="form-group">
					<label for="txtProductID" class="col-sm-2 control-label">Product ID(*):  </label>
							<div class="col-sm-10">
							      <input type="text" name="txtID" id="txtID" class="form-control" placeholder="Product ID" value=''/>
							</div>
				</div> 
				<div class="form-group"> 
					<label for="txtProductName" class="col-sm-2 control-label">Product Name(*):  </label>
							<div class="col-sm-10">
							      <input type="text" name="txtName" id="txtName" class="form-control" placeholder="Product Name" value=''/>
							</div>
                </div>   
                <div class="form-group">   
                    <label for="txtProductCategory" class="col-sm-2 control-label">Product category(*):  </label>
							<div class="col-sm-10">
							      <?php bind_Category_List($conn); ?>
							</div>
                </div>  
                          
                <div class="form-group">  
                    <label for="lblPrice" class="col-sm-2 control-label">Price(*):  </label>
							<div class="col-sm-10">
							      <input type="text" name="txtPrice" id="txtPrice" class="form-control" placeholder="Price" value=''/>
							</div>
                 </div>   
                  
				 <div class="form-group">  
                    <label for="lblOldPrice" class="col-sm-2 control-label">Old Price(*):  </label>
							<div class="col-sm-10">
							      <input type="text" name="txtOldPrice" id="txtOldPrice" class="form-control" placeholder="Old Price" value=''/>
							</div>
                 </div>   
                <div class="form-group">   
                    <label for="lblShort" class="col-sm-2 control-label">Short description(*):  </label>
							<div class="col-sm-10">
							      <input type="text" name="txtShort" id="txtShort" class="form-control" placeholder="Short description" value=''/>
							</div>
                </div>
                            
                <div class="form-group">  
        	        <label for="lblDetail" class="col-sm-2 control-label">Detail description(*):  </label>
							<div class="col-sm-10">
							      <textarea name="txtDetail" rows="4" class="ckeditor"></textarea>
              					  <script language="javascript">
                                        CKEDITOR.replace( 'txtDetail',
                                        {
                                            skin : 'kama',
                                            extraPlugins : 'uicolor',
                                            uiColor: '#eeeeee',
                                            toolbar : [ ['Source','DocProps','-','Save','NewPage','Preview','-','Templates'],
                                                ['Cut','Copy','Paste','PasteText','PasteWord','-','Print','SpellCheck'],
                                                ['Undo','Redo','-','Find','Replace','-','SelectAll','RemoveFormat'],
                                                ['Form','Checkbox','Radio','TextField','Textarea','Select','Button','ImageButton','HiddenField'],
                                                ['Bold','Italic','Underline','StrikeThrough','-','Subscript','Superscript'],
                                                ['OrderedList','UnorderedList','-','Outdent','Indent','Blockquote'],
                                                ['JustifyLeft','JustifyCenter','JustifyRight','JustifyFull'],
                                                ['Link','Unlink','Anchor', 'NumberedList','BulletedList','-','Outdent','Indent'],
                                                ['Image','Flash','Table','Rule','Smiley','SpecialChar'],
                                                ['Style','FontFormat','FontName','FontSize'],
                                                ['TextColor','BGColor'],[ 'UIColor' ] ]
                                        });
										
                                    </script> 
                                  
							</div>
                </div>
                            
            	<div class="form-group">  
                    <label for="lblquantity" class="col-sm-2 control-label">Quantity(*):  </label>
							<div class="col-sm-10">
							      <input type="number" name="txtQty" id="txtQty" class="form-control" placeholder="Quantity" value=""/>
							</div>
                </div>
 
				<div class="form-group">  
	                <label for="productImage" class="col-sm-2 control-label">Image(*):  </label>
							<div class="col-sm-10">
							      <input type="file" name="txtImage" id="txtImage" class="form-control" value=""/>
							</div>
                </div>
                        
				<div class="form-group">
						<div class="col-sm-offset-2 col-sm-10">
						      <input type="submit"  class="btn btn-primary" name="btnAdd" id="btnAdd" value="Add new"/>
                              <input type="button" class="btn btn-primary" name="btnIgnore"  id="btnIgnore" value="Ignore" onclick="window.location='?page=management_product'" />
                              	
						</div>
				</div>
			</form>
</div>
