<?php
    if (!isset($_COOKIE['Ordering'])) {
        setcookie("Ordering", $_POST['ChangeOrdering'], time() +
31536000);

echo $_COOKIE['Ordering'];
    }
?>

