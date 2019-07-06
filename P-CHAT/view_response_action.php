<?php
                    
			include('include/config.php');
			 $query_id=$_POST['query_pid'];
			 $reply=$_POST['reply'];		
			 $userid=$_POST['user_pid'];
			
			 echo $responseinsert="insert into response(q_id,response,response_by)values('$query_id','$reply','$userid')";
			 $k=mysql_query($responseinsert);
			if($k>0)
			{
			header("location:view_response.php?query_id=$query_id");
			}
			else
			{
			header("location:view_response.php?failid=$query_id");			
			}				
			?>		
