<!DOCTYPE html>
<html>
<head>
	<title>Even Odd</title>
</head>
<body>

	<form method="post">
		
		Give a Number: <input type="number" name="Number">
		<br>
		<br>
		<input type="submit" name="submit">
		<br>

		<?php
		
		$no=$_POST['Number'];
		
		if($no%2==0)
		{
			echo "It is Even";
		}
		else
		{
			echo "It is Odd";
		}

		?>
	</form>


</body>
</html>