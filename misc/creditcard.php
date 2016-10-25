<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" 
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>Your Paycheck Data</title>
<meta http-equiv="content-type" content="text/html; charset=iso-8859-1" />
</head>
<body>
<?php
$cardNum = $_POST['cardnum'];
//Strip dashes and spaces from the string 
$cardNum = str_replace('-', '', $cardNum);
$cardNum = str_replace(' ', '', $cardNum);

//check to see if sting is numeric and contains credit card number
if (is_numeric($cardNum) && (count($cardNum) == 15) || (count($cardNum 
== 16)))	{
echo "Your credit card number seems to be valid!";
	}	else	{
echo "your credit card number isn't numeric, or not of valid length of 15-16 characters!";

	}

?>
</body>
</html>
