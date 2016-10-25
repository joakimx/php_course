<head>
<title>Your Registration Data</title>
<meta http-equiv="content-type" content="text/html; charset=iso-8859-1" />
</head>
<body>
<?php

//Set up variables
$name = $_POST['name'];
$age = $_POST['age'];
$average = $_POST['average'];




//Create file handle & open file for writing and appending
$file = fopen("info.txt", "a") or die("Couldn't open file for writing");
$string = "$name ,$age, $average";

//Write to file
if (fwrite($file, $string ."\n")) {
	echo "Content successfully added!";
	print "<br><br>";
	echo "Here is the updated content of the file info.txt:";
	print "<br><br>";
	//close file 
	fclose($file);

	fopen("info.txt", "r");
	//Display content
	$content = file("info.txt");
	$newstring = implode("<br>", $content);
	echo $newstring;




		}
else {

	echo "Something went wrong..couldn\'t write to file!";

	}

?>


</body>
</html>
