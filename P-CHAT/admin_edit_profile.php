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



    
	<div class="edit_profile">




<?php
			
			include("include/config.php");
			 $sel="select * from registration where u_id='$k'";
			$o=mysql_query($sel);
			$fet=mysql_fetch_array($o);
			$j=$fet['mailid'];
			$a=$fet['display_name'];
		        $s=$fet['status'];
			$userrole=$fet['role'];

?>
	<form action="admin_profile_update.php?id=<?php echo $k;?>" method="post">
				<ul>
					
					<li><label>User Name</label> <span class="r21"><input type="text" name="name" placeholder="user name" value="<?php echo $fet['name'];?>"></span></li>
				</ul>

				<ul>
					
					<li><label>New Password</label> <span class="r22"><input type="password" name="pass" value="<?php echo $fet['pass'];?>" name="pass"></span></li>
				</ul>

				




				

				<ul>
					
					<li><label>E-mail<label><span class="r26"><input type="text" name="u_email" value="<?php echo $j;?>"></span></li>
				</ul>

				<ul>
					
					<li><label>Display Name<label<span class="r27"><input type="text" name="d_name" value="<?php echo $a;?>"><span></li>
				</ul>


				
				

				
				<ul>
					
					<li class="r28"><input type="submit" value="update now"></li>
				</ul>

	</form>
	</div>

</div>
    <div class="clear"> </div>
<!-- END CONTENT-->    



<?php include("include/footer.php")?>




