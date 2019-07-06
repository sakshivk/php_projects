<?php
error_reporting(0);
include("include/config.php");

$RoleID = $_REQUEST['roleid'];
$row=mysql_query("select * from registration where role='".$RoleID."'");
while($row2 = mysql_fetch_array($row))
{
    echo '<option value="' . $row2['u_id'] . '">' . $row2['name'] . '</option>';
}
?>
