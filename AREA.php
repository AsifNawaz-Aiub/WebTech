<!DOCTYPE html>
<html>
<head>
	<title>Area</title>
</head>
<body>

	<form method="post">
		
		Length: <input type="number" name="Length">
		<br>
		
		<br>
		
		
		Width: <input type="number" name="Width">
		<br>
		
		<input type="submit" name="submit" value="Calculate">

	</form>

	<?php

	if(isset($_POST['submit']))
	{
		$Length=$_POST['Length'];
		$Width=$_POST['Width'];
		$Area=$Length*$Width;
		$Perimeter=2*($Length+$Width);

		echo "Area of rectangle is: $Area";
		echo "<br>";
		echo "The Perimeter of rectangle : $Perimeter";

		
	}

	?>

</body>
</html>