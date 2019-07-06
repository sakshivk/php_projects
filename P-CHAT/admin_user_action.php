<?php
error_reporting(0);
include("include/config.php");
$name=$_POST['name'];
$pass=$_POST['pass'];
//echo $pass=md5($p);
$role=$_POST['select_role'];

$status=$_POST['select_status'];
$mailid=$_POST['u_email'];
$disname=$_POST['d_name'];
echo $sel="select `name`,`pass` from `registration` where name='$name' && pass='$pass'";
$run=mysql_query($sel) or die(mysql_error());
$r=mysql_num_rows($run);
if($r>0)
{

header("location:admin_user.php?msg=user already present");
}
else
{

echo $ins="insert into registration(name,pass,role,status,mailid,display_name)value('$name','$pass','$role','$status','$mailid','$disname')";
$e=mysql_query($ins);
		if($e==1)
		{
		header("location:admin_manage_user.php?msg=user added");
		}
		else
		{
		header("location:admin_user.php?msg=fail to add user");

		}



}

?>
