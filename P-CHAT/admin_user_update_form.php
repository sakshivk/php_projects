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
    <h1><a href="admin_user.php">Add User</a> | <a href="admin_manage_user.php">Manage User</a>  </h1>
    </div>
  
    <div class="clear">
    </div>
    <!--  TITLE END  -->    
    <!-- #PORTLETS START -->
    <div id="portlets">



    
	<div class="add_user">




<?php
			$id=$_GET['id'];
			include("include/config.php");
			 $sel="select * from registration where u_id='$id'";
			$o=mysql_query($sel);
			$fet=mysql_fetch_array($o);
			$j=$fet['mailid'];
			$a=$fet['display_name'];
		        $s=$fet['status'];
			$userrole=$fet['role'];

?>
	<form action="admin_user_update.php?id=<?php echo $id;?>" method="post">
				<ul>
					
					<li><label>User Name</label> <span class="r1"><input type="text" name="name" placeholder="user name" value="<?php echo $fet['name'];?>"></span></li>
				</ul>

				<ul>
					
					<li><label>Password</label> <span class="r2"><input type="password" name="pass" value="<?php echo $fet['pass'];?>"></span></li>
				</ul>

				<ul>
					
					<li><label>Role<label>
					<span class="r3">
					
					<select name="select_role">
					<option>--------------Select-------------</option>
					<?php
					error_reporting(0);
						include("include/config.php");
						$sel="select * from roles";
						$o=mysql_query($sel);
						while($fet=mysql_fetch_array($o))

					{
					?>
					<option <?php if($userrole == $fet['r_id']) { ?> selected="selected" <?php } ?> value="<?php echo $fet['r_id'];?>"> <?php 								echo $fet['role'];?></option>


					<?php
					}?>
					</select>
					</span>
					</li>
				</ul>




				<ul>
					
					<li><label>Status<label><span class="r5">
					<select name="select_status" >
					<option>...Select...</option>
					<?php
					
					      include("include/config.php");
						$SqlStatus = "select * from status";
						$o=mysql_query($SqlStatus);
						while($fet=mysql_fetch_array($o))

					{
					?>
					<option <?php if($s == $fet['s_id']) { ?> selected="selected" <?php } ?> value="<?php echo $fet['s_id'];?>"><?php echo $fet['status'];?></option>


					<?php
					}?>
					</select>
					</span>
					</li>
				</ul>

				<ul>
					
					<li><label>E-mail<label><span class="r6"><input type="text" name="u_email" value="<?php echo $j;?>"></span></li>
				</ul>

				<ul>
					
					<li><label>Display Name<label<span class="r7"><input type="text" name="d_name" value="<?php echo $a;?>"><span></li>
				</ul>


				
				

				
				<ul>
					
					<li class="r8"><input type="submit" value="update now"></li>
				</ul>

	</form>
	</div>

</div>
    <div class="clear"> </div>
<!-- END CONTENT-->    



<?php include("include/footer.php")?>




