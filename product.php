<?php
include "inc/database.php";
include "inc/head.php";
 





class product
{

	public $conn;
	public $price;
	public $list_price;
	public $brand;
	public $description;
	public $tbl_name;
	public $db;
		

	public function __construct()
		{
		   
			$this->tbl_name = "product";	

		}
	
	public function getprice($pr)
		{
		   
			$this->price = $pr;	

		}
	public function getbrand($br)
		{
		   
			$this->brand = $br;	

		}
	public function getlist($ls)
		{
		   
			$this->list_price = $ls;	

		}
	public function getdesc($des)
		{
		   
			$this->description = $des;	

		}
	
	/*
	
	public function insertitems()
		{
		 	$sqll="INSERT INTO '.$this->tbl_name.' (price,brand,list_price,description) VALUES(  price=:price,brand=:brand,list_price=:list_price,description=:description)";
		 
 			$stmt = $this->conn->prepare( $sqll );
		
	 
 
				 $stmt->bindParam(":price", $this->price);
				 $stmt->bindParam(":brand", $this->brand);
				 $stmt->bindParam(":list_price", $this->list_price);
				 $stmt->bindParam(":description", $this->description); 

 			if($stmt->execute()){
			return true;	
				
			}else {return false;}
			




		} */
	
	
	
	
	
}
?>