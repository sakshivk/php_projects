<?php
 include("include/header.php");

//include("include/config.php");
if(isset($_POST['action']))
{
echo $_POST['action'];
	foreach($_POST['checkbox'] as $value)
	{
	echo $value;
		if($_POST['select1']=="delete")
			{
			 mysql_query("delete from testimonial where id='$value'");
			}
			elseif($_POST['select1']=="Active")
			{
                          $id=$_GET['id1'];
			 mysql_query("update registration set status='1' where u_id='$value'");
			//die;
			header("location:".$_SERVER['PHP_SELF']);
			}
			elseif($_POST['select1']=="Block")
			{
 $id=$_GET['id1'];
			mysql_query("update registration set status='0' where u_id='$value'");
			header("location:".$_SERVER['PHP_SELF']);
			}
			}
		header("location:".$_SERVER['PHP_SELF']);
		}?>	


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
    <h1><a href="admin_user.php">Add User</a> | <a href="admin_manage_user.php">Manage User</a> | <a href="admin_view_query.php">View User's Queries</a> </h1>
    </div>
  
    <div class="clear">
    </div>
    <!--  TITLE END  -->    
    <!-- #PORTLETS START -->
    <div id="portlets">



         <form name="grid" method="post" id="1" action="<?php echo $_SERVER['PHP_SELF']; ?>?id1=<?php echo $fet['u_id'];?>" onSubmit="return deletevalidation()">
    <table width="600" border="1" cellspacing="0" cellpadding="2" align="center">
  <tr>
    <td>&nbsp;</td>
    <td>
	<?php
	if($cp!=1)
	{
	?>
	<a href="<?php echo $_SERVER['PHP_SELF'];?>?cp=<?php echo $gprev; ?>">&lt;&lt;PREV</a>
	<?php
	}?></td>
    <td>
	<?php
	if($cp!=ceil($rows/$gridlimit))
	{
	?>
	<a href="<?php echo $_SERVER['PHP_SELF'];?>?cp=<?php echo $gnext; ?>">NEXT&gt;&gt;</a>
	<?php
	}?>	</td>
    <td><select name="select1">
      
      <option value="Block">Block</option>
      <option value="Active">Active</option>
    </select>
      <input type="submit" value="action" name="action"/>	</td>
	
    <td>Pages: <?php echo $cp;?>/<?php echo ceil($rows/$gridlimit); ?></td>
    <td><strong>Total Results:</strong> <?php echo $rows; ?></td>
  </tr>
</table>


			<table class="zebra">
   
		
        	<tr>
				<th>Name</th>
				
				<th>Role</th>
			
				<th>status</th>
				<th>mail</th>
				<th>Display Name</th>
				<th>Edit</th>
				<th>Delete</th>            	
</tr>

<?php
			
			include("include/config.php");
			$sel="select * from registration order by u_id desc";
			$o=mysql_query($sel);
			while($fet=mysql_fetch_array($o))
			{
			?>
			<tr>
<td><input type="checkbox" name="checkbox[]" value='<?php echo $fet['u_id']; ?>' /></td>
			<td><?php echo $fet['name'];?></td>
			

			
								<?php $role_fetch= $fet['role'];?>							
								<?php 
								$sel="select role from roles where r_id='$role_fetch'";
								$run_roles=mysql_query($sel);
								$fetching_roles=mysql_fetch_array($run_roles);
								
								?>

			<td> <?php echo $fetching_roles['role'];?></td>
			
				
								<?php $status_fetch= $fet['status'];?>							
								<?php 
								$sel="select status from status where s_id='$status_fetch'";
								$run_roles=mysql_query($sel);
								$fetching_status=mysql_fetch_array($run_roles);
								
								?>

			<td><?php echo $fetching_status['status'];?></td>
			<td><?php echo $fet['mailid'];?></td>
			<td><?php echo $fet['display_name'];?></td>

			
			
			<td ><a href="admin_user_update_form.php?id=<?php echo $fet['u_id'];?>" class="edit_click">Edit</a></td>
			<td><a href="admin_delete_user.php?id=<?php echo $fet['u_id'];?>" onclick='return confirm("Are you sure?")'>Delete</a></td>
			</tr>
			
			
			<?php
			}
			?>






	</table>
</form>
</div>
    
			


			




</div>
    <div class="clear"> </div>
<!-- END CONTENT-->    



<?php include("include/footer.php")?>




