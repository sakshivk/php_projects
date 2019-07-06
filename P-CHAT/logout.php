<?php
session_start();
session_destroy();
$_SESSION['id']="";
header("Location:index.php");
?>


