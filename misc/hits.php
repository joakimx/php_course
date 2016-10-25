<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>Bowler Registration</title>
<meta http-equiv="content-type" content="text/html; charset=iso-8859-1"
/>
</head>
<body>

<?php

$CounterFile = "hitcount.txt";

//Open text file containing number of hits
$handle = fopen("$CounterFile", "r");

//Get current number of hits
$hits = fread($handle, 8192);

//Close file
fclose($handle);

//Add +1 to the existing count
$hits = $hits + 1;

//Display number of hits to html page
echo "<p>Page views: " .$hits ."</p>";

//Open file to add in the new count
$handle = fopen("$CounterFile", "w");

//Write new count
fwrite($handle, $hits);

//Close file
fclose($handle);
?>

</body>
</html>
