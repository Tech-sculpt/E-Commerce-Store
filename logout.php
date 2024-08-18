<?php
session_start();
session_unset();
session_destroy();
header("location: http://localhost/E%20commerce%20Site/account.php");
exit;
?>
