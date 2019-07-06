<?php include("include/header.php")?>


<style type="text/css">


	.table {
		overflow:hidden;
		border:1px solid #d3d3d3;
		background:#fefefe;
		width:100%;
		margin:5% auto 0;
		-moz-border-radius:5px; /* FF1+ */
		-webkit-border-radius:5px; /* Saf3-4 */
		border-radius:5px;
		-moz-box-shadow: 0 0 4px rgba(0, 0, 0, 0.2);
		-webkit-box-shadow: 0 0 4px rgba(0, 0, 0, 0.2);
	}
	
	th, td {padding:18px 28px 18px; text-align:center; }
	
	th {padding-top:22px; text-shadow: 1px 1px 1px #fff; background:#e8eaeb;}
	
	td {border-top:1px solid #e0e0e0; border-right:1px solid #e0e0e0;}
	
	tr.odd-row td {background:#f6f6f6;}
	
	td.first, th.first {text-align:left}
	
	td.last {border-right:none;}
	
	/*
	Background gradients are completely unnecessary but a neat effect.
	*/
	
	td {
		background: -moz-linear-gradient(100% 25% 90deg, #fefefe, #f9f9f9);
		background: -webkit-gradient(linear, 0% 0%, 0% 25%, from(#f9f9f9), to(#fefefe));
	}
	
	tr.odd-row td {
		background: -moz-linear-gradient(100% 25% 90deg, #f6f6f6, #f1f1f1);
		background: -webkit-gradient(linear, 0% 0%, 0% 25%, from(#f1f1f1), to(#f6f6f6));
	}
	
	th {
		background: -moz-linear-gradient(100% 20% 90deg, #e8eaeb, #ededed);
		background: -webkit-gradient(linear, 0% 0%, 0% 20%, from(#ededed), to(#e8eaeb));
	}
	
	/*
	I know this is annoying, but we need additional styling so webkit will recognize rounded corners on background elements.
	Nice write up of this issue: http://www.onenaught.com/posts/266/css-inner-elements-breaking-border-radius
	
	And, since we've applied the background colors to td/th element because of IE, Gecko browsers also need it.
	*/
	
	tr:first-child th.first {
		-moz-border-radius-topleft:5px;
		-webkit-border-top-left-radius:5px; /* Saf3-4 */
	}
	
	tr:first-child th.last {
		-moz-border-radius-topright:5px;
		-webkit-border-top-right-radius:5px; /* Saf3-4 */
	}
	
	tr:last-child td.first {
		-moz-border-radius-bottomleft:5px;
		-webkit-border-bottom-left-radius:5px; /* Saf3-4 */
	}
	
	tr:last-child td.last {
		-moz-border-radius-bottomright:5px;
		-webkit-border-bottom-right-radius:5px; /* Saf3-4 */
	}

</style>


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



      <div class="admin_view_query">
		
		<table  class="table">
					<tr>
						<th>From</th>
						<th>Sender role</th>
						<th>To</th>
						<th>Receiver role</th>
						<th>Query</th>
						<th>Time</th>
						<th>View</th>
					</tr>

			<?php
			$sqlshow="select * from query order by q_id desc";
		        $run=mysql_query($sqlshow);

			while($rowresult=mysql_fetch_array($run))
			{
?>
				
					<tr>
								<?php $id_fetch= $rowresult['sender_id'];?>							
								<?php 
								$sel="select name from registration where u_id='$id_fetch'";
								$run_reg=mysql_query($sel);
								$fetching_name=mysql_fetch_array($run_reg);
								
								?>

					<td> <?php echo $fetching_name['name'];?></td>
						
								<?php $role_fetch= $rowresult['sender_role'];?>							
								<?php 
								$sel="select role from roles where r_id='$role_fetch'";
								$run_roles=mysql_query($sel);
								$fetching_roles=mysql_fetch_array($run_roles);
								
								?>

					<td> <?php echo $fetching_roles['role'];?></td>




								<?php $id_fetch= $rowresult['receiver_id'];?>							
								<?php 
								$sel="select name from registration where u_id='$id_fetch'";
								$run_reg=mysql_query($sel);
								$fetching_name=mysql_fetch_array($run_reg);
								
								?>

					<td> <?php echo $fetching_name['name'];?></td>
						
								<?php $role_fetch= $rowresult['receiver_role'];?>							
								<?php 
								$sel="select role from roles where r_id='$role_fetch'";
								$run_roles=mysql_query($sel);
								$fetching_roles=mysql_fetch_array($run_roles);
								
								?>

					<td> <?php echo $fetching_roles['role'];?></td>


					<td> <?php echo $rowresult['query_title'];?></td>
						
						
					
					<td> <?php echo $rowresult['sending_time'];?></td>
						


					<td><a href="view_user_query_action.php?query_id=<?php echo $rowresult['q_id'];?>" value="View">View</td>
					

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




