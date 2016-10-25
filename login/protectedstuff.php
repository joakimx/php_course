<?php
  ob_start();
  ?>

<html>
<head>
  <head>
    <title> Login Form </title>
    <style>
  body {
  	  margin: auto;
  	  width: 80%;
  	  height: 100%;
  		border: 1px solid #F4F4F4;
  		padding: 50px;
  	  background-color: #DDDDDD;
  	}

    table {
      	border-collapse: collapse;
        margin: auto;
        font-size: 18px;
        border-width: 3px;
    	  border-style: solid;
        text-align: center;
      }


    td {
        background-color: #DAF7A6;
        border-color: #ff0000 #0000ff;
        border: 3px;
        border-color: black;
      }


    </style>
</head>
<body>
<?php
session_start();
if($_SESSION['username']) {
    $user = $_SESSION['username'];
    echo "<table><tr><td>";
    echo "You are logged in as " . $user . "<br>";
    echo "Here's the protected content: <br>";
    echo "Protected stuff";
    echo "<br><br>";
    echo '<a href="logout.php" >Logout</a>';
    echo "<br><br>";
    echo '<a href="login.php" > [<<]  Login Page   [<<] </a>';
    echo "</td></tr></table>";
} else {
  header("Location: login.php");
}
 ?>
</body>
</html>
