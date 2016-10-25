<?php

if ( $_SERVER['REQUEST_METHOD'] == "POST" ) {

$firstname =  $_POST['f_name'];
$lastname = $_POST['l_name'];

if( ( $firstname != "" ) and ( $lastname != "" ) )
{
  setcookie( "f_name", $firstname, time()+60*60);
  setcookie( "l_name", $lastname, time()+60*60);
}

echo "Here's the cookie info printed out one by one" ."<br><br>";
print_r($_COOKIE);
echo "<br><br>";
$cExpiryDate = time()+60*60 ." Seconds";

echo "Your cookies expire in: " .$cExpiryDate ."<br>";
echo "Your Cookies Will Now Be Unset...";
unset($_COOKIE['f_name']);
unset($_COOKIE['l_name']);

//html code

print "<html>";
print "<head>";
print "<title>Cookies Information</title>";
print "</head>";

print "<body>";

print "<form method="POST" action="cookies3.php"> ";
print "<p>Your First Name: <input type="text" name="f_name" value="";
       if(isset($_COOKIE['f_name'])){echo $_COOKIE['f_name'];}
                        else {echo '';}
print "/></p>";
print "<p>Last Name: <input type="text" name="l_name" value="";
        if(isset($_COOKIE['l_name'])){echo $_COOKIE['l_name'];}
                else {echo '';}
print "/></p>";
print "<input type="submit" name="submit" value="Submit And See Your Cookie Jar!">";
print "</body>";
print "</html>";
} else {

?>

<html>
<head>
<title>Cookies Information</title>
</head>

<body>
<form method="POST" action="cookies3.php">
<p>Your First Name: <input type="text" name="f_name" value="
	<?php 
		if(isset($_COOKIE['f_name'])){echo $_COOKIE['f_name'];} 
			else {echo '';} 
	?>"/></p>
<p>Last Name: <input type="text" name="l_name" value="
	<?php 
	if(isset($_COOKIE['l_name'])){echo $_COOKIE['l_name'];} 
		else {echo '';} 
	?>"/></p>
<input type="submit" name="submit" value="Submit And See Your Cookie Jar!">
</body>
</html>

