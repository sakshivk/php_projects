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
    <h1><a href="admin_user.php">Add User</a> | <a href="admin_manage_user.php">Manage User</a>  | <a href="admin_view_query.php">View User's Queries</a></h1>
    </div>
  
    <div class="clear">
    </div>
    <!--  TITLE END  -->    
    <!-- #PORTLETS START -->
    <div id="portlets">



    
	<div class="add_user">







	<form action="admin_user_action.php" method="post">
				<ul>
					
					<li><label>User Name</label> <span class="r1"><input type="text" name="name" placeholder="user name" required></span></li>
				</ul>

				<ul>
					
					<li><label>Password</label> <span class="r2"><input type="password" name="pass" required placeholder="password"></span></li>
				</ul>

				<ul>
					
					<li><label>Role<label>
					<span class="r3">
					<select name="select_role" required>
					<option>--------------Select-------------</option>
					<?php
					error_reporting(0);
						include("include/config.php");
						$sel="select * from roles";
						$o=mysql_query($sel);
						while($fet=mysql_fetch_array($o))

					{
					?>
					<option value="<?php echo $fet['r_id'];?>"> <?php echo $fet['role'];?></option>


					<?php
					}?>
					</select>
					</span>
					</li>
				</ul>



		

				<ul>
					
					<li><label>Status<label><span class="r5">
					<select name="select_status">
					<option>...Select...</option>
					<?php
					error_reporting(0);
						include("include/config.php");
						$sel="select * from status";
						$o=mysql_query($sel);
						while($fet=mysql_fetch_array($o))

					{
					?>
					<option value="<?php echo $fet['s_id'];?>"> <?php echo $fet['status'];?></option>


					<?php
					}?>
					</select>
					</span>
					</li>
				</ul>

				<ul>
					
					<li><label>E-mail<label><span class="r6"><input type="email" name="u_email"></span></li>
				</ul>

				<ul>
					
					<li><label>Display Name<label<span class="r7"><input type="text" name="d_name" required><span></li>
				</ul>


				
				

				
				<ul>
					
					<li class="r8"><input type="submit" value="ADD"></li>
				</ul>

	</form>
	</div>

</div>
    <div class="clear"> </div>
<!-- END CONTENT-->    



<?php include("include/footer.php")?>




