 <?php
	
    require_once 'inc/init.php';
	include 'inc/database.php';
	include 'inc/head.php';
	include 'inc/nav.php';
	include 'inc/sidebarleft.php';
	include 'inc/headers.php';	

    
	
?>
<?php session_start();?>
	<div class="container-fluid">
	 <div class="row">
		<div class="col-sm-2 col-md-2 bar">
			<h2>Left Bar</h2>
			<ul>
			
			<li><a href="addproduct.php">Add New Product</a></li>
			<li><a href="addproduct.php">Add New Header</a></li>
			<li><a href="showproducts.php">Our Products</a></li>
			</ul>
		 
		 
		 
		 
		 </div>
		 	<?php
		 
			    $tbl="product";
				$db=new Database();	
				$show=$db->selectall($tbl);	
		 
		 	?>
	 
	
		<div class="col-md-8 col-sm-4">
 			   <?php foreach($show as $data) { ?>
				  
					<div class="col-sm-6 col-md-3  ">	
						<div class="item-box">
							<h3><?php echo $data['ID'] ?></h3>
							<img src="<?php echo $data['image'] ?>" alt="one" class="img-thump"/>
							<p class="text-denger">Our cost <?php echo $data['price'] ?> </p>
							<p ><?php echo $data['brand'] ?> </p>
							<p ><?php echo $data['list_price']; ?></p>
							<p class="prices"><?php echo $data['description'] ;?> </p>

						</div>
						<button type="button" class="btn btn-md btn-success" data-toggle="modal" data-target="#details1">details</button>
					</div>

			   <?php }?>
		</div>

	 
		 	 
		 
		 <div class="col-sm-2 col-md-2 bar">rightbar</div>		 
		</div>
	
	
	</div>
	</div>
	 

<?php 
	include 'inc/footer.php';
	include 'inc/details1.php';
	
?> 
