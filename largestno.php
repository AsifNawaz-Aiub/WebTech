<!DOCTYPE html>
<html>
<head>
	<title>Largets Number</title>
</head>
<body>

	<form method="post">
		First Number: <input type="number" name="First">
		<br>
		Second Number: <input type="number" name="Second">
		<br>
		Third Number: <input type="number" name="Third">
		<input type="submit" name="submit">
		<br>

		<?php
		$x=$_POST['First'];
		$y=$_POST['Second'];
		$z=$_POST['Third'];

		if($x > $y && $x > $z)
		{
			echo " $x is the largest number!!!";
		}
		
		if($y > $x && $y > $z)
		{
			echo " $y is the largest number!!!";
		}

		if($z> $x && $z> $y)
		{
			echo " $z is the largest number!!!";
		}
		
		?>

	</form>


</body>
</html>