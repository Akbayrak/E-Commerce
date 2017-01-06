


<?php
include 'inc/head.php';
include 'product.php';
 
?>
 
<?php

session_start();

// get database connection
$db = new Database();
  
// pass connection to objects
$prod = new product();
 
if($_POST)
 
			
	{
		$prod->getprice($_POST['price']);
		$prod->getbrand($_POST['brand']);
		$prod->getlist($_POST['list_price']);
		$prod->getdesc($_POST['description']);
		$db->insertitems($prod); 
		header('Location: showproducts.php');

	}
	
 
else 
		echo "Please fill the fields correctly";

?>

<form class="mean-group" method="post" action="addproduct.php">
	<h1>Add new Product</h1>

	
	<div class="form-group unit-form">
	  <label for="example-number-input" class="col-xs-2 col-form-label">Price</label>
	  <div class="col-xs-10">
		<input class="form-control" type="text" value="" name="price">
	  </div>
	</div>
	
	
	<div class="form-group unit-form">
	  <label for="example-number-input" class="col-xs-2 col-form-label">Brand</label>
	  <div class="col-xs-10">
		<input class="form-control" type="number" value="42"  name="brand">
	  </div>
	</div>
	
	
	<div class="form-group unit-form">
	  <label for="example-number-input" class="col-xs-2 col-form-label">List Price</label>
	  <div class="col-xs-10">
		<input class="form-control" type="text" value="42"   name="list_price">
	  </div>
	</div>
	
	<div class="form-group unit-form">
		<label for="example-number-input" class="col-xs-2 col-form-label">Description</label>
		<div class="col-xs-10">
			<textarea class="form-control" rows="3" name="description"></textarea>
		</div>
	</div>
	
	<div class="form-group unit-form">
		<label for="example-number-input" class="col-xs-2 col-form-label">Select Image</label>

		<div class="col-xs-10">
			<input id="input-2" name="icon" type="file" class="file" multiple data-show-upload="false" data-show-caption="true">
		</div>
	</div>
	 
	<button type="submit" class="btn btn-lg btn-primary">Save</button>


 </form>