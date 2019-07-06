<?php



include("include/config.php");

$id=$_GET['id'];
echo $p=$_POST['pass'];

echo $dbpassquery="select pass from registration where u_id='$id'";
$runnning=mysql_query($dbpassquery);
$fetchinng=mysql_fetch_array($runnning);
echo $dbpass=$fetchinng['pass'];
if($dbpass !== $p)
{
$encpass=md5($p);
echo $update2="update registration set pass='$encpass'  where u_id='$id'";

$r=mysql_query($update2);

}



$name=$_POST['name'];
$p=$_POST['pass'];
echo $pass=$p;
echo $role=$_POST['select_role'];

$status=$_POST['select_status'];
$mailid=$_POST['u_email'];
$disname=$_POST['d_name'];

include("include/config.php");
echo $update1="update registration set name='$name' , role='$role' ,status='$status', mailid='$mailid', display_name='$disname'   where u_id='$id'";

$r=mysql_query($update1);


if($r==1)
{
header("location:admin_manage_user.php?msg=updated");
}
else
{
header("location:admin_manage_user.php?msg=not updated");

}



?>
