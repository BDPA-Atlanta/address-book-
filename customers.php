<?php
	//$table = "customers";
	//include("edit.php");
	var_dump($_POST);

	$query = "UPDATE customes SET";
	$cols = $_POST['customers']; 
	include("edit.php");
	$query .= "CustomerID = '".$_POST['']."'";
?>