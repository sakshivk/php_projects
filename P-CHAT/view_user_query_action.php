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
    <h1>Chat Room | <a href="admin_view_query.php">Back</a></h1>
    </div>
  
    <div class="clear">
    </div>
    <!--  TITLE END  -->    
    <!-- #PORTLETS START -->
    <div id="portlets">
<div class="chatroom">
	<div class="chatbox">
				<?php
				
				 $getid=$_GET[query_id];
						
				$selectquery="select * from query where q_id='$getid'";
				$running=mysql_query($selectquery);
				$fetching=mysql_fetch_array($running);
				
				$id=$fetching[q_id];
				?>					


				<span class="sender_name"><?php $SENDERID=$fetching[sender_id];?>
								<?php 
								$sel="select name from registration where u_id='$SENDERID'";
								$run_reg=mysql_query($sel);
								$fetching_name=mysql_fetch_array($run_reg);
								
								?>

								<?php echo $fetching_name['name'];?> 's query :

						
				 </span> : <span class="sender_query"><?php echo $fetching[query_description];?></span>
			<?php
				
				 $response_select="select * from response where q_id='$getid'  order by response_id asc";
				$run_response=mysql_query($response_select);
				while($resfetch=mysql_fetch_array($run_response))
				{
				
			?>
				<table class="mytable" border=0>
				<tr>

						<?php $RESPONSEBY=$resfetch['response_by'];?>
						<?php 
								$sel="select name from registration where u_id='$RESPONSEBY'";
								$run_reg=mysql_query($sel);
								$fetching_response_by=mysql_fetch_array($run_reg);
								
						 ?>
				<td class="namewidth"> <?php echo $fetching_response_by['name'];?>:</td>
				<td class="replyarea"><?php echo $resfetch['response'];?></td>				
				</tr>
				</table>
				<?php
				}
				?>

			<form action="admin_user_query_reply.php" method="post">					
			<span class="mytext"><div class="mycontainer_view"><textarea rows="3" cols="50" name="reply"  class="textarea"></textarea></div>
			<p class="postcomment"><input type="submit" value="post" name="submitquery"></p>
			<input type="hidden" name="query_pid" value="<?php echo $getid;?>">
			<input type="hidden" name="user_pid" value="<?php echo $user_id1;?>">
			</form>
			

	</div>
</div>
</div>
    <div class="clear"> </div>
<!-- END CONTENT-->    



<?php include("include/footer.php")?>























