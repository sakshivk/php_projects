<?php

 $id=$_GET['id'];
$role=$_POST['role'];

include("include/config.php");
 $update1="update roles set role ='$role' where r_id='$id'";

$r=mysql_query($update1);


if($r==1)
{
header("location:admin_manage_roles.php?msg=updated");
}
else
{
header("location:admin_manage_roles.php?msg=not updated");

}



?>
