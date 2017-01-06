<?php
 
class Database
{
	
private $dbhost="localhost";
private $dbname="shopping";
private $username="root";
private $password="";
public $pdo;
   	
	
 
	
	
	
public function __construct()
{
	

	if(!isset($this->pdo))
	{
		try
		{

			$link=new PDO("mysql:host=".$this->dbhost.";dbname=".$this->dbname,$this->username,$this->password);
			$link->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
			$link->exec("SET CHARACTER SET utf8");
			$this->pdo=$link;
 
		}
		catch (PDOException $e)
		{

			die("Failed to access Database".$e->getMessage());

		}
			return $this->pdo;

	}

}
	
public function select($table,$ID)
{
		
	$sql="SELECT * FROM  ".$table." WHERE ID=:id";
	$query=$this->pdo->prepare($sql);
	$query->bindParam(':id',$ID);
	$query->execute();
	$res = $query->fetch();
	return $res;
	
	
}
	
public function selectall($tablename)
{
	$sql="select * from  ".$tablename;
	$query=$this->pdo->prepare($sql);
	$query->execute();
	return $query;	
	
	/*or return  $query->fetchAll()*/
	
}
	
	
	public function insertitems($table)
		{
		 	$sqll="INSERT INTO ".$table->tbl_name." (price,brand,list_price,description) VALUES(:price, :brand,:list_price,:description)";
		 
 			$stmt = $this->pdo->prepare($sqll); 
 
		    $stmt->bindParam(':price', $table->price);
		    $stmt->bindParam(':brand', $table->brand);
	    	$stmt->bindParam(':list_price', $table->list_price);
		    $stmt->bindParam(':description',$table->description); 
		    $stmt->execute();
							 		
		}
	
	
public function deleteID($table,$ID)
{
	
	/*we must notic the space between form and variable also space with where and cautation*/
	
	$sql="DELETE FROM " .$table. " WHERE ID=:id ";
	$query=$this->pdo->prepare($sql);
	$query->bindParam(':id',$ID);
	
	if($query = $query->execute()){
        return true;
    }else{
        return false;
    } 
	
	/* $query = "DELETE FROM " . $table . " WHERE id = ?";
     
    $stmt = $this->pdo->prepare($query);
    $stmt->bindParam(1, $ID);
 
    if($result = $stmt->execute()){
        return true;
    }else{
        return false;
    }
	*/
	
	
	
	 
 }	
public function editid($table,$ID)
{
	$sql='delete * from'.$table.'where id='.$ID;
	$query=$this->pdo->prepare($sql);
	$query->bindvalue(':ID',$ID);
	$res=$query->execute();
	return $res;
	
}
	
	
	
public function update($table,$id,$arr)
{
	$sql='UPDATE '.$table .' SET price=:'.$arr(0).',brand=:'.$arr(1).',list_price=:'.$arr(2).',description=:'.$arr(3).',WHERE ID=:ID';
	$query=$this->pdo->prepare($sql);
 	$query->bindvalue(':ID',$id);
 	$query->bindvalue(':price',$arr(0));
	$query->bindvalue(':brand',$arr(1));
	$query->bindvalue(':list_price',$arr(2));
	$query->bindvalue(':description',$arr(3));
	$query->execute();
	
}

	
	
}

?>