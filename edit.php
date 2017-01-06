


<?php
include 'inc/head.php';
include 'product.php';
 
?>
 
<?php

session_start();
    	
 	$tbl="product";
	$db=new Database();	
	
     $id = isset($_GET['id']) ? $_GET['id'] : die('ERROR: missing ID.'); 
	 $data=$db->select($tbl,$id);
  
 
/*if($_POST)
 
			
	{
	
	$val=array($_POST['price'],$_POST['brand'],$_POST['list_price'],$_POST['description']);
	$res=$db->editid($tbl,$id,$val);

	}
	
 
else 
		echo "Please fill the fields correctly";


*/
 ?>


<form class="mean-group" method="post" action="edit.php">
	<h1>Edit The Product </h1>

  

	<div class="form-group unit-form">
	  <label for="example-number-input" class="col-xs-2 col-form-label">Price</label>
	  <div class="col-xs-10">
		<input class="form-control" type="text" value="<?php echo $data['price']; ?>" name="price">
	  </div>
	</div>
	
	
	<div class="form-group unit-form">
	  <label for="example-number-input" class="col-xs-2 col-form-label">Brand</label>
	  <div class="col-xs-10">
		<input class="form-control" type="number" value="<?php echo $data['brand']; ?>"  name="brand">
	  </div>
	</div>
	
	
	<div class="form-group unit-form">
	  <label for="example-number-input" class="col-xs-2 col-form-label">List Price</label>
	  <div class="col-xs-10">
		<input class="form-control" type="text" value="<?php echo $data['list_price']; ?>"   name="list_price">
	  </div>
	</div>
	
	<div class="form-group unit-form">
		<label for="example-number-input" class="col-xs-2 col-form-label">Description</label>
		<div class="col-xs-10">
			<textarea class="form-control" rows="3" placeholder="<?php echo $data['description']; ?>" name="description"></textarea>
		</div>
	</div>
  
		<button type="submit" class="btn btn-lg btn-primary">Update</button>
 	    <a class="btn btn-lg btn-primary" href="index.php" role="button">Home</a>
	    <a class="btn btn-default" href="index.php" role="button">Home</a>


  </form>