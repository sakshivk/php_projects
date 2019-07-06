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
    <h1><a href="admin_add_status.php">Add Status</a> | <a href="admin_manage_status.php">Manage Status</a>  </h1>
    </div>
  
    <div class="clear">
    </div>
    <!--  TITLE END  -->    
    <!-- #PORTLETS START -->
    <div id="portlets">



         
		<div class="manage_roles">


			
			<table class="zebra">
			<tr>
			<th background="images/bg_header1_blue .png" >status</th>
			<th background="images/bg_header1_blue .png">Edit</th>
			<th background="images/bg_header1_blue .png">Delete</th>
			</tr>
			


			
			<?php

			include("include/config.php");
			$sel="select * from status";
			$o=mysql_query($sel);
			while($fet=mysql_fetch_array($o))
			{
			?>
			<tr>
			<td><?php echo $fet['status'];?></td>
			<td ><a href="admin_status_update.php?id=<?php echo $fet['s_id'];?>" class="edit_click">Edit</a></td>
			<td><a href="admin_delete_status.php?id=<?php echo $fet['s_id'];?>" onclick='return confirm("Are you sure?")'>Delete</a></td>
			</tr>
			
			
			<?php
			}
			?>

			</table>
		</div>


	



</div>
    <div class="clear"> </div>
<!-- END CONTENT-->    



<?php include("include/footer.php")?>




