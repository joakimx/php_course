<?php
  setcookie("fname", $_POST['fname']);
  setcookie("lname", $_POST['lname']);
  echo $_COOKIE['fname'] . "\nend";
  echo $_COOKIE['lname'] . "\nend";
  ?>
<html>
<body>
<form action="" method="post">
 First name:<br>
 <input type="text" name="fname"><br>
 Last name:<br>
 <input type="text" name="lname">
 <input type="submit" name="submit">
</form>
<?php
  if(!isset($_POST['fname']) && !isset($_POST['lname'])){
    $valid = false;
  } else {
    echo $_COOKIE['fname'] . "\n";
    echo $_COOKIE['lname'] . "\n";
  }
  unset($_COOKIE['fname']);
  unset($_COOKIE['lname']);
    ?>
</body>
</html>
