<?php
error_reporting(0);
session_start();
if($_SESSION['id'])
{
header("location:page.php");
}
?>

<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Login </title>
<h1 align="left"><img src="image/logo.png"/> </h1>
<link href="css/960.css" rel="stylesheet" type="text/css" media="all" />
<link href="css/reset.css" rel="stylesheet" type="text/css" media="all" />
<link href="css/text.css" rel="stylesheet" type="text/css" media="all" />
<link href="css/login.css" rel="stylesheet" type="text/css" media="all" />
</head>





<body>
<br /><br />
<div class="container_16">
  <div class="grid_6 prefix_5 suffix_5">
   	      	<div id="login">
    	  <p class="tip"><?php
	error_reporting(0);
	 echo $msg=$_GET['msg'];?></p>
            
    	  
<p align="center"><font size="+4">LOG IN</font></p>
<form id="form1" name="form1" method="post" action="login_action.php">
    	    <p>
    	      <label><strong>Username</strong>
<input type="text" name="name" class="inputText" id="textfield" />
    	      </label>
  	      </p>
    	    <p>
    	      <label><strong>Password</strong>
  <input type="password" name="pass" class="inputText" id="textfield2" />
  	        </label>
    	    </p>

	
    		<input type="submit" value="submit">
             <label>
             
 <p>
    	      <label><strong><a href="signup.php"><font color="red">New User Register Here</font></a></strong>
 
  	        </label>
    	    </p>

       </label>            
    	  </form>
		  <br clear="all" />
    	</div>
        
</div>
<br clear="all" />
</body>
</html>
