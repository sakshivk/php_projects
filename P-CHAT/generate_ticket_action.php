<?php
include("include/config.php");
error_reporting(0);
include("session.php");
$k=$_SESSION['id'];
$selection="select * from registration where u_id='$k'";

$w=mysql_query($selection);
$fetch=mysql_fetch_array($w);


$title=$_POST['title'];
$description=$_POST['description'];
$sender_id=$fetch['u_id'];
$sender_role=$fetch['role'];
$sending_time = date('Y-m-d H:i:s');



echo $receiver_role=$_POST['x'];


echo $receiver_id=($_POST['y']);



$arrlength = count($receiver_id);
 
for($i=0;$i<$arrlength;$i++)
{
   
echo $query_insert="insert into query(query_title,query_description,sender_id,sender_role,sending_time,receiver_id,receiver_role)values('$title','$description','$sender_id','$sender_role','$sending_time','$receiver_id[$i]','$receiver_role')";
$exe=mysql_query($query_insert);
}


header("location:generate_ticket.php?sent");






?>
