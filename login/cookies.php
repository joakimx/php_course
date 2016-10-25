<?php
  setcookie('cookie', $_POST['cookie']);
  setcookie('val', $_POST['val']);
  setcookie('name', $_POST['name']);
  setcookie('age', $_POST['age']);
  setcookie('job', $_POST['job']);
  setcookie('color', $_POST['color']);
 ?>
<!DOCTYPE html>
<html>
<body>
<form action = "" method = "POST">
  Please enter a cookie name:<br>
  <input type="text" name="cookie">
  <br>
  Enter cookie value:<br>
  <input type="text" name="val">
  <br>
  Name:<br>
  <input type="text" name="name">
  <br>
  Age:<br>
  <input type="text" name="age">
  <br>
  Job:<br>
  <input type="text" name="job">
  <br>
  Favorite Color:<br>
  <input type="text" name="color">

  <br><br>
  <input type="submit" value="Submit">
</form>

<?php
    if($_POST) {
        if(isset($_POST['cookie']) && isset($_POST['val'])) {
            $valid = true;
          } else {
            $valid = false;
          }
    }

    if($_COOKIE && $valid) {
      echo "<br>";
      echo "<br>";
      echo "Initial cookie => value entered: ";
      echo "Cookie you entered: " . $_COOKIE['cookie'];
      echo "<br>";
      echo "Value you entered: " . $_COOKIE['val'];
      echo "<br>";
      echo "<br>";
      echo "All cookies stored in the Server (Key => Value): ";

      foreach ($_COOKIE as $key => $value) {
          echo $key . " => " . $value;
          echo "<br>";
      }

      foreach ($_COOKIE as $key => $value) {
          unset($_COOKIE['$key']);
      }
    }
    ?>
</body>
</html>
