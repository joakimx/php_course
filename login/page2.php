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
      text-align: center;
      bottom: 0;
  	}

  table {
    	border-collapse: collapse;
      margin: auto;
      font-size: 18px;
      border-width: 3px;
  	  border-style: solid;
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
  <table>
  <tr>
  <td>
<?php
  ob_start();
  session_start();
  echo session_id();
  echo "<br>";
  echo "<br>";
  if($_SESSION['username']) {
      echo "Session is active!";
      echo "<br>Session variables:<br>";
      echo "<hr>";
    foreach ($_SESSION as $key => $value) {
      echo "<tr><td>";
      echo "Key: " . $key . "<br>" . "Value: " . $value;
      echo "<hr>";
      echo "</td></tr>";
      echo "<br>";
    }
    echo "<br>";
    echo '<td><a href="logout.php" >Logout and return to login page</a></td>';
    echo "<br>";
    header('Refresh: 10; URL=login.php');
  }
 ?>
  </td>
  </tr>
  </table>
 </body>
 </html>
