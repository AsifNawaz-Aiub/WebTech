<!DOCTYPE html>
<html>
<head>
	<title>Largets Number</title>
</head>
<body>

	<form method="post">
		Price: <input type="number" name="Price">
		<br>
		VAT: <input type="number" name=" vat">
		<br>
		<input type="submit" name="Submit">
		

		<?php
		
		$x= $_POST['Price'];
		$v=$_POST['vat'];
		$tprice= $_['vat'];
        $tprice=($x*$v)/100;
        $tprice=$x+$tprice;
		
         echo "$tprice";
		 
		
		?>

	</form>


</body>
</html>