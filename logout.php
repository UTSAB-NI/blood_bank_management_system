<?php
session_start();
$finaluser=$_SESSION['username'];
session_destroy();
header('Location: index.php');
?>