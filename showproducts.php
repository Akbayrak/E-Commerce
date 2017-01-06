<?php
include "product.php";
include "inc/head.php";
 

	$tbl="product";
	$db=new Database();	
	$show=$db->selectall($tbl);	 
		 
?>

 	<table class='table table-striped table-hover table-responsive table-bordered'>
     	<tr>
		  <td class="success"><h3>ID</h3>  </td>
		  <td class="success"> <h3>Price</h3>  </td>
		  <td class="success"> <h3>Brand</h3></td>
		  <td class="success"> <h3>ListPrice</h3> </td>
		  <td class="success">  <h3>Description</h3></td> 
		  <td class="success">  <h3>EDIT</h3></td> 
		  <td class="success">  <h3>DEL</h3></td> 
 		</tr>
	<?php foreach($show as $data) { ?>
		<tr>
		  <td><?php echo $data['ID'] ?></td>
		  <td><?php echo $data['price'] ?></td>
		  <td><?php echo $data['brand'] ?></td>
		  <td><?php echo $data['list_price'] ?></td>
		  <td><?php  echo $data['description'] ?></td> 
		  <td><a class="btn btn-success" href="edit.php?id=<?php echo $data['ID'] ?>">Edit</a></td> 
		  <td><a class="btn btn-danger" href="delete.php?id=<?php echo $data['ID'] ?>">Delete</a></td> 
 		</tr>
	
	</br>
	<?php }; ?>

 
		
 	    <a class="btn btn-success" href="addproduct.php" role="button">Add new Product</a>

		 	 
	    <a class="btn btn-success pull-right" href="index.php" role="button">Home</a>
		</br>
		</br>
		 
		 
		 
		 
   
	
</table>

	
<?php
 
?>