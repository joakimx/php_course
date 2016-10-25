<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>Fahrenheit to Celsius conversion: 1 - 100</title>
<meta http-equiv="content-type" content="text/html; charset=iso-8859-1"/>
</head>
<body>

<?php
for ($i = 0; $i <= 100; $i++) {
	print $i ." degree Fahrenheit is " .(($i-32)*0.55) ." degree 
Celsius ";
	print "<br>";
	}

?>

</body>
</html>
