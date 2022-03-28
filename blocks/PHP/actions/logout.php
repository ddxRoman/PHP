<?php
session_start();
unset($_SESSION['user']);
header('Location: ../Forms/autorize.php');
?>