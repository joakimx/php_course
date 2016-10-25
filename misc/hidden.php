<?php
$fname =  $_POST['fname'];
$lname = $_POST['lname'];

if( ( $fname != null ) and ( $lname != null ) )
{
  setcookie( "fname", $fname, time() + 36000 );
  setcookie( "lname", $lname, time() + 36000 );
}

echo "post fname ".$_POST['fname']."<BR>";
echo "post lname ". $_POST['lname']."<BR>";
echo "cookie ". $_COOKIE['fname']."<BR>";
echo "cookie ". $_COOKIE['lname']."<BR>";
$cExpiryDate = time() + 3600;

?>

