<?php
	include("db.php");
	if(isset($_POST['search']))
	{
		if($_POST['selection']=="customers")
			customers();

		if($_POST['selection']=="suppliers")
				suppliers();
	}

	function customers()
	{


		$q = mysql_query("SELECT CompanyName, Address, City, Region, PostalCode, Phone, Fax FROM northwind.customers WHERE CompanyName LIKE '%".$_POST['search']."%'");
		results($q);
	}
	function suppliers()
	{
		$q = mysql_query("SELECT CompanyName, ContactName, ContactTitle, Address, City, Region, Phone, Country FROM northwind.suppliers WHERE ContactName LIKE '%".$_POST['search']."%'");
		results($q);
	}

	function results($q)
	{
?>
<form action="<?php echo $_POST['selection']; ?>.php" method="post">
<?php
		$res = mysql_fetch_object($q);
		foreach(get_object_vars($res) as $key => $value)
		{
?>
	<label><?php echo $key; ?>:</label>
	<input type="text" name="<?php echo "{$_POST['selection']}[{$key}]";?>" value="<?php echo $value; ?>"><br>
<?php
		}//end foreach



	}//end results
?>

<input type="hidden" name="primaryKey" value="">
<input type="submit" value="edit contact">
</form>