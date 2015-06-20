<?php
	$query = "UPDATE ".$_POST['table']." SET";
	foreach($_POST as $key => $value)
	{
		$query .= $key." = '".$value."'";
	}
	$query .= "WHERE ";

	var_dump($_POST);
?>