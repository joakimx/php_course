<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" 
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>Your Paycheck Data</title>
<meta http-equiv="content-type" content="text/html; charset=iso-8859-1" />
</head>
<body>
<?php

if (is_numeric($_POST['hours']) && is_numeric($_POST['wage']))  {
	$hours = $_POST['hours'];
	$wage = $_POST['wage'];
	
	  if ($hours <= 40 && $hours > 0)  {
		print "Your weekly salary is: " .($wage * $hours);
		} else {
		  $overtime = $hours - 40;
		  $overtime = $overtime * ($wage * 1.5);
		  print " Your weekly salary is: " .(($wage * 40) + 
$overtime);
			}


} else {
	
	print "Error: Your input is not a number";
	}

?>
</body>
</html>
