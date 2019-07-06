	<?php
		include("include/config.php");
		$status=$_POST['status'];
		echo $insert="insert into status(status)value('$status')";
		
		$k=mysql_query($insert);
		if($k>0)
		{
		header("location:admin_manage_status.php?msg=new role added");

		}
		else
		{
		header("location:admin_add_status.php?msg=not added");
		}
		?>
		


	

		
