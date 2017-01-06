


<?php
include 'inc/head.php';
include 'product.php';
 
?>
 
<?php

session_start();
    $tbl="product";
	$db=new Database();	
  

//if($_REQUEST['action']=='delete')
	$id = isset($_GET['id']) ? $_GET['id'] : die('ERROR: missing ID.');
 
	
 	$res=$db->deleteID($tbl,$id);
	echo  	$res;
	
 
?>
 