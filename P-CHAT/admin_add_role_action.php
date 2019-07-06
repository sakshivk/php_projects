<?php
include("include/config.php");

$role=$_POST['role'];

echo $insert="insert into roles(role)value('$role')";

$k=mysql_query($insert);

if($k>0)

	{

		header("location:admin_add_roles.php?msg=new role added");


	}

else
	{

		header("location:admin_add_roles.php?msg=not added");

	}

?>
