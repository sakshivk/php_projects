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
    <h1><a href="admin_add_roles.php">Add Role</a> | <a href="admin_manage_roles.php">Manage Role</a>  </h1>
    </div>
  
    <div class="clear">
    </div>
    <!--  TITLE END  -->    
    <!-- #PORTLETS START -->
    <div id="portlets">



         
		<div class="manage_roles">
 
			
			<?php
			$id=$_GET['id'];
			include("include/config.php");
			$sel="select * from roles where r_id='$id'";
			$o=mysql_query($sel);
			$fet=mysql_fetch_array($o);
			
			?>

			<form action="admin_role_update.php?id=<?php echo $id;?>" method="post">
			<table class="zebra">
			<tr>
			<th background="images/bg_header1_blue .png" >status</th>
			<th background="images/bg_header1_blue .png" >update</th>
			</tr>
			
			<tr>
			<td> <input type="text" value="    <?php echo $fet['role'];?> " name="role">  </td>
			<td> <input type="submit" value="Update"> </td>
			</tr>
			
		

			</table>
			</form>
		</div>


	



</div>
    <div class="clear"> </div>
<!-- END CONTENT-->    



<?php include("include/footer.php")?>




