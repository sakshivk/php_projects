<?php
session_start();

if(empty($_SESSION['id']))
{
header("location:index.php?msg=login first");
}



?>
