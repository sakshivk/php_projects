<?php include("include/header.php")?>






<div class="grid_16">




<!-- TABS START -->
    <div id="tabs">
    
    </div>
<!-- TABS END -->    
</div>

<!-- CONTENT START -->
    <div class="grid_16" id="content">
    <!--  TITLE START  --> 
    <div class="grid_9">
    <h1><a href="admin_add_roles.php">Add Roles</a> | <a href="admin_manage_roles.php">Manage Roles</a>  </h1>
    </div>
  
    <div class="clear">
    </div>
    <!--  TITLE END  -->    
    <!-- #PORTLETS START -->
    <div id="portlets">



         
		<div class="manage_roles">


			
			<table class="zebra">
			<tr>
			<th background="images/bg_header1_blue .png" >Roles</th>
			<th background="images/bg_header1_blue .png">Edit</th>
			<th background="images/bg_header1_blue .png">Delete</th>
			</tr>
			


			
			<?php

			include("include/config.php");
			$sel="select * from roles";
			$o=mysql_query($sel);
			while($fet=mysql_fetch_array($o))
			{
			?>
			<tr>
			<td><?php echo $fet['role'];?></td>
			<td ><a href="admin_role_update_form.php?id=<?php echo $fet['r_id'];?>" class="edit_click">Edit</a></td>
			<td><a href="admin_role_delete.php?id=<?php echo $fet['r_id'];?>" onclick='return confirm("Are you sure?")'>Delete</a></td>
			</tr>
			
			
			<?php
			}
			?>

			</table>
		</div>


<?php  
error_reporting(0);
 $rid=$_GET['id'];

include("include/config.php");
$sel="select * from roles where r_id ='$rid'";
$o=mysql_query($sel);
$fetc=mysql_fetch_array($o);

?>





</div>
    <div class="clear"> </div>
<!-- END CONTENT-->    



<?php include("include/footer.php")?>




