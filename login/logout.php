<?
  session_start();
  session_destroy();
  header("Location: protectedstuff.php");
?>
