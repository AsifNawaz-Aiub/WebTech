<!DOCTYPE html>
<html>
<body>

<?php

$nameErr = $emailErr = $genderErr = "";
$name = $email = $gender ="";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  if (empty($_POST["name"])) {
    $nameErr = "Name is required";
  } else {
    $name = test_input($_POST["name"]);
  }
  
  if (empty($_POST["email"])) {
    $emailErr = "Email is required";
  } else {
    $email = test_input($_POST["email"]);
  }
    

	

  if (empty($_POST["gender"])) {
    $genderErr = "Gender is required";
  } else {
    $gender = test_input($_POST["gender"]);
  }
}

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
?>
<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post">

Name:<input type="text" name="name"> <span class="error">* <?php echo $nameErr;?></span> <br>
Email: <input type="text" name="email"> <span class="error">* <?php echo $emailErr;?></span> <br>
Gender:
  <input type="radio" name="gender" value="female">Female
  <input type="radio" name="gender" value="male">Male
  <input type="radio" name="gender" value="other">Other
  <span class="error">* <?php echo $genderErr;?></span>
  <br>

 <input type="submit" value="Submit">

</form>

<?php

class welcome
{
	private $name; //$_POST['$name'];
	private $email; //$_POST['$email'];
	private $gender;
	
function set_name($name) 
{
    $this->name = $name;
}
function get_name() 
{
    return $this->name;
}

  
function set_email($email) 
{
    $this->email = $email;
}
function get_email() 
  {
    return $this->email;
  }
function set_gender($gender) 
{
    $this->gender = $gender;
}
function get_gender() 
  {
    return $this->gender;
  }	
	
}
$wel = new welcome();
$wel->set_name($_POST['name']);
$wel->set_email($_POST['email']);
$wel->set_gender($_POST['gender']);
echo "Name: " . $wel->get_name(); echo"<br>";
echo "Email: " . $wel->get_email(); echo"<br>";
echo "Gender: " . $wel->get_gender(); echo"<br>";



?>
<?php
$myfile = fopen("newfile", "w") or die("Unable to open file!");
$txt = "Name: " . $wel->get_name()." Email: " . $wel->get_email()." Gender: " . $wel->get_gender();
fwrite($myfile, $txt);
 
fclose($myfile);
?>

 


</body>
</html> 