<?php
  ob_start();
 ?>

<html>
  <head>
    <title> Password Hint </title>
    <style>
  body {
  	  margin: auto;
  	  width: 80%;
  	  height: 100%;
  		border: 1px solid #F4F4F4;
  		padding: 50px;
  	  background-color: #DDDDDD;
  	}

  form {
  		height: 300px;
  	  width: 500px;
  	  border-width: 3px;
  	  border-style:solid;
  	  background-color:  #DAF7A6;
      text-align: center;
  	  margin: auto;
  	  border-radius: 15px 50px 30px;
      font-size: 20px;
      font-weight: bold;
  	}
    </style>
</head>
<body>
  <form action="" name="recover" method="POST">
    Email Address:
    <br>
    <input type="text" name="username"
      value="<?php if(isset($_POST['username']) && $valid) { echo $_POST['username'];} ?>"/>
    <br>
    <input type="submit" name = "submit" value="submit">

  <?php
    if($_POST) {

      //MySQL setup//
      $server = "db-mysql.zenit";
      $dbUser = "int322_162b04";
      $dbPassword = "ebQZ8429";
      $db = "int322_162b04";
      $dbHandle = new mysqli($server, $dbUser, $dbPassword, $db);

      //MysQL digestable variables for the damn query str.

      $user = $_POST['username'];
      $user = $dbHandle->real_escape_string($user);

      //Fetch results from database
      $sql = "SELECT passwordHint FROM users WHERE username = '$user'";
      $result = mysqli_query($dbHandle, $sql);
      $row = mysqli_fetch_row($result);

      if(mysqli_num_rows($result) == 1) {
        $hint = $row[0];
        $to      = $user;
        $subject = 'Password Hint';
        $message = "<html><body>";
        $message .= "Here's your password hint:";
        $message .= "<br><br>";
        $message .= $hint;
        $message .= "</html></body>";
        $headers .= 'MIME-Version: 1.0' . "\r\n";
        $headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
        $headers .= 'From: loven.costa@azenit.senecac.on.ca' . "\r\n";
        mail($to, $subject, $message, $headers);

        echo "Message Sent! <br>";
        echo "Please check your email at " . $user;
        echo "</form>";

      } else {
        echo "<h5>Didn't match our records..taking you back to login page in 2 seconds...</h5><br>";
        header('Refresh: 2; URL=login.php');
        echo "</form>";
      }
       mysqli_close($dbHandle);
    }

    ?>
</body>
</html>
