<?php

 $id=$_GET['id'];


include("include/config.php");
 $del1="delete from roles where r_id='$id'";

$r=mysql_query($del1);


if($r==1)
{
header("location:admin_manage_roles.php?msg=deleted");
}
else
{
header("location:admin_manage_roles.php?msg=not deleted");

}



?>
