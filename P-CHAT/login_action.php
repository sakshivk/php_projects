<?php

include("include/config.php");
$name=$_POST['name'];
$p=$_POST['pass'];


$selection="select * from registration where name='$name' && pass='$p'";

$run=mysql_query($selection);
$exe=mysql_num_rows($run);
$fetch=mysql_fetch_array($run);
$user_id= $fetch['u_id'];
echo $status= $fetch['status'];

if($status==1)
{
	if($exe>0)
	{
		session_start();
		$_SESSION['id']=$user_id;
		header("location:page.php?msg=successfull login");
}
	else
	{

	header("location:index.php?msg=Login Fail Try Again ");

	}
}

else
{

	header("location:page.php?msg=Your Account Has Been Blocked");
}
?>
