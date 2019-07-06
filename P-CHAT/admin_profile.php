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
    <h1><a href="admin_edit_profile.php">Edit Profile</a> | <a href="admin_profile.php">View Profile</a>  </h1>
    </div>
  
    <div class="clear">
    </div>
    <!--  TITLE END  -->    
    <!-- #PORTLETS START -->
    <div id="portlets">



		<div class="view_profile">
		<form action="admin_user_action.php" method="post">
				<ul>
					
					<li><label>User Name</label> <span class="r11"><?php echo $name ;?></span></li>
				</ul>

				

				<ul>
					
					<li><label>Role<label>
					<span class="r13">
					
					<?php
					
						
						$sel="select * from roles where r_id='$role'";
						$o=mysql_query($sel);
						$fet=mysql_fetch_array($o);

											
						echo $fet[role];
					?>

					
					</span>
					</li>
				</ul>



		

		

				<ul>
					
					<li><label>E-mail<label><span class="r16"><?php echo $mailid ;?></span></li>
				</ul>

				<ul>
					
					<li><label>Display Name<label<span class="r17"><?php echo $display_name ;?><span></li>
				</ul>


				
				

				
				

	</form>
	</div>
    
	
</div>
    <div class="clear"> </div>
<!-- END CONTENT-->    



<?php include("include/footer.php")?>




