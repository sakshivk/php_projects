<?php

 $id=$_GET['id'];


include("include/config.php");
 $del1="delete from status where s_id='$id'";

$r=mysql_query($del1);


if($r==1)
{
header("location:admin_manage_status.php?msg=deleted");
}
else
{
header("location:admin_manage_status.php?msg=not deleted");

}



?>
