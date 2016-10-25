<?php
error_reporting(0);
$firstname =  $_POST['f_name'];
$lastname = $_POST['l_name'];


//If fields are populated -- Set Cookies
if( ( $firstname != "" ) and ( $lastname != "" ) )
{
  setcookie( "f_name", $firstname, time()+60*60*24*30);
  setcookie( "l_name", $lastname, time()+60*60*24*30);
}

// Print out cookies one by one
echo "<br><br>";
$cExpiryDate = time()+60*60*24*30;
echo "<br><br>";
echo "Your First Name stored in Cookie: " .$_COOKIE['f_name'];
echo "<br><br>";
echo "Your Last Name stored in Cookie: " .$_COOKIE['l_name'];
echo "<br><br>";
echo "The $_COOKIE array holding your Cookies: "; 
print_r($_COOKIE);
echo "<br><br>";

echo "Your cookies expire in: " .$cExpiryDate ."<br>";
echo "<br><br>";
echo "Refresh page to see cookies";
unset($_COOKIE['f_name']);
unset($_COOKIE['l_name']);
echo "<br>";
echo "Refresh page again to delete your cookies";
?>

<html>
<head>
<title>Cookies Information</title>
</head>

<body>

<form method="POST" action="cookies.php">
<p>Your First Name: <input type="text" name="f_name" value="
	<?php 
		if(isset($_COOKIE['f_name'])){echo $_COOKIE['f_name'];} 
			else {echo "";} 
	?>"/></p>

<p>Last Name: <input type="text" name="l_name" value="
	<?php 
	if(isset($_COOKIE['l_name'])){echo $_COOKIE['l_name'];} 
		else {echo "";} 
	?>"/></p>
<input type="submit" name="submit" value="Submit And See Your Cookie Jar!">
</body>
</html>

