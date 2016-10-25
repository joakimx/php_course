<?php
    ob_start();
    session_start();
    $Err = "";

    if($_POST && isset($_POST['username']) && isset($_POST['password']))
    {
      //Value from POST into variables
      $user = $_POST['username'];
      $password = $_POST['password'];

      //MySQL setup//
      $server = "db-mysql.zenit";
      $dbUser = "int322_162b04";
      $dbPassword = "ebQZ8429";
      $db = "int322_162b04";
      $dbHandle = new mysqli($server, $dbUser, $dbPassword, $db);

      //MysQL digestable variables for the damn query str.
      $user = $dbHandle->real_escape_string($user);
      $password = $dbHandle->real_escape_string($password);

      //Fetch results from database
      $sql = "SELECT username, password FROM users
      WHERE username = '$user' AND password = '$password';";
      $result = mysqli_query($dbHandle, $sql);

      //If record exists, user is valid
      if(mysqli_num_rows($result) == 1) {
        $_SESSION['username'] = $_POST['username'];
        $_SESSION['authorized'] = "true";
        echo "Success!";
        header("Location: protectedstuff.php");
      } else {
        $Err = " <br><br> * Invalid username/password";
        $valid = "false";
      }

      mysqli_close($dbHandle);
    }

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

  form {
  		height: 300px;
  	  width: 500px;
  	  border-width: 3px;
  	  border-style:solid;
  	  background-color:  #DAF7A6;
      text-align: center;
  	  margin: auto;
  	  border-radius: 15px 50px 30px;
  	}

  table {
    	border-collapse: collapse;
    	border-color: red;
      margin: 45px 45px 45px 45px;
      font-size: 18px;
    }


  td {
      	background-color: #F9BE4C;
      	border-color: #ff0000 #0000ff;
      	border-width: 3px;
      }

    </style>
</head>
<body>
  <form action="" name="login" method="POST">
    <table>
      <tr>
        <br>
        <td> Username: </td>
        <td> <input type="text" name="username"
    value="<?php if(isset($_POST['username']) && $valid) { echo $_POST['username'];} ?>"/> </td>
      </tr>
      <tr>
        <td> Password: </td>
        <td> <input type="password" name="password"
    value="<?php if(isset($_POST['password']) && $valid) { echo $_POST['password'];} ?>"/> </td
      </tr>
      <tr>
        <td> <input type="submit" name = "submit" value="submit"></td>
        <td> <a href="forgot.php" >Forgot Password? </a> </td>
      </tr>
    </table>
    <?php echo '<span style="color: red">' . $Err . "</span>"; ?>
    <?php if($_SESSION['username']){
      echo "<br>";
      echo '<a href="logout.php" >Logout</a>';
      echo "<br>";
      echo '<a href="page2.php" > [<<]  Page 2: See ALL Session Info.   [<<] </a>';
    } ?>
  </form>
</body>
</html>
