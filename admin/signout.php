<?php
session_start();
unset($_SESSION['signed_in']);
header("Location: login.php");
exit;
?>
