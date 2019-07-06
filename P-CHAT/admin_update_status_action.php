<?php
error_reporting(0);
 $id=$_GET['id'];
$status=$_POST['status'];

include("include/config.php");
 $update1="update status set status ='$status' where s_id='$id'";

$r=mysql_query($update1);


if($r==1)
{
header("location:admin_manage_status.php?msg=updated");
}
else
{
header("location:admin_manage_status.php?msg=not updated");

}



?>
