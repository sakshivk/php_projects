<?php

$id=$_GET['id'];
$name=$_POST['name'];
$p=$_POST['pass'];
echo $pass=md5($p);

$mailid=$_POST['u_email'];
$disname=$_POST['d_name'];

include("include/config.php");
echo $update1="update registration set name='$name' ,pass='$pass',  mailid='$mailid', display_name='$disname'   where u_id='$id'";

$r=mysql_query($update1);


if($r==1)
{
header("location:admin_profile.php?msg=updated");
}
else
{
header("location:admin_profile.php?msg=not updated");

}



?>
