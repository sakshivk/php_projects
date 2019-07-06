<?php

 $id=$_GET['id'];


include("include/config.php");
 $del1="delete from registration where u_id='$id'";

$r=mysql_query($del1);


if($r==1)
{
header("location:admin_manage_user.php?msg=deleted");
}
else
{
header("location:admin_manage_user.php?msg=not deleted");

}



?>
