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
    <h1 >Generate Message Now</h1>
    </div>
  
    <div class="clear">
    </div>
    <!--  TITLE END  -->    
    <!-- #PORTLETS START -->
    <div id="portlets">


<div class="exception">

       <form id="login-form" action="generate_ticket_action.php" method="post" name="form" onSubmit="return form_validation()">
		<fieldset>
		
			<legend>Generate</legend>
			
			<label >Title</label>
			<input type="text" id="title" name="title" />
			<div class="clear"></div>
			
			<label >Description</label><div class="myown_container"><br><br>
			
			<textarea rows="10" cols="70" name="description"></textarea>
			</div>
			<div class="clear"></div>
			
			
			<hr>
                    
                       
                        <div class="a1">
			
                                
				<div class="fetrchnetworking" style='background-color:white ;width:150px ;float:left;margin-left:120px'>



				<div class="net">Networking</div>
				
				<div class="show1">
				<?php
				$sel="select * from registration where role=2";
				
				$runn=mysql_query($sel);
				while($fetchhh=mysql_fetch_array($runn))
				{
				?>
				<input type="checkbox" name=y[] value="<?php echo $fetchhh[u_id];?>"><?php echo $fetchhh['name'];?><br>
				<?php
				}
				?>
				
				</div>					
				</div>





				<div class="fetrchnetworking" style='background-color:white ;width:150px ;float:left;'>
				<div class="pm">Project Manager</div>		
				<div class="show2" >
				<?php
				$sel="select * from registration where role=3";
				$runn=mysql_query($sel);
				while($fetchhh=mysql_fetch_array($runn))
				{
				?>
				<input type="checkbox" name=y[] value="<?php echo $fetchhh[u_id];?>"><?php echo $fetchhh['name'];?><br>
				<?php
				}
				?>
				
				</div>						
				</div>
				<div class="fetrchnetworking" style='background-color:white ;width:150px ;float:left;'>
				<div class="tl">Team Leader</div>			
				<div class="show3" >
				<?php
				$sel="select * from registration where role=4";
				$runn=mysql_query($sel);
				while($fetchhh=mysql_fetch_array($runn))
				{
				?>
				<input type="checkbox" name=y[] value="<?php echo $fetchhh[u_id];?>"><?php echo $fetchhh['name'];?><br>
				<?php
				}
				?>
				
				</div>						
				</div>

				<div class="fetrchnetworking" style='background-color:white ;width:170px ;float:left;'>
				<div class="employee">Employee</div>			
				<div class="show4" >
				<?php
				$sel="select * from registration where role=5";
				$runn=mysql_query($sel);
				while($fetchhh=mysql_fetch_array($runn))
				{
				?>
				<input type="checkbox" name=y[] value="<?php echo $fetchhh[u_id];?>"><?php echo $fetchhh['name'];?><br>
				<?php
				}
				?>
				
				</div>						
				</div>
				
				<div class="fetrchnetworking" style='background-color:white ;width:150px ;float:left;'>
				<div class="admin">Admin</div>			
				<div class="show5" >
				<?php
				$sel="select * from registration where role=1";
				$runn=mysql_query($sel);
				while($fetchhh=mysql_fetch_array($runn))
				{
				?>
				<input type="checkbox" name=y[] value="<?php echo $fetchhh[u_id];?>"><?php echo $fetchhh['name'];?><br>
				<?php
				}
				?>
				
				</div>						
				</div>


				<div class="">
			</div>
                    			
			<div class="clear"></div>
			
			<?php /*?><label >ID </label>
			<input type="text" id="title" name="id" placeholder="Insert ID"/>
			<div class="clear"></div>
			<br /><?php */?>
			
			<input type="submit" style="margin: 6px 0 0 123px;" class="button" name="commit" value="Submit"/>	
		</fieldset>
	</form>
	
</div>
</div>
    <div class="clear"> </div>
<!-- END CONTENT-->   



<?php include("include/footer.php")?>

							
