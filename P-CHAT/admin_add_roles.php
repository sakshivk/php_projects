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



         
		<div class="add_roles">
			<form name="add_form" action="admin_add_role_action.php" class="form" method="post" >
			<ul>
			<label>Describe Role</label>
			<li><input type="text" name="role" placeholder="describe role here" required></li>
			</ul>
			<ul>
			<li><input type="submit" value="Add Role Now"></li>
			</ul>
			</form>
		
		
		</div>

	



</div>
    <div class="clear"> </div>
<!-- END CONTENT-->    



<?php include("include/footer.php")?>




