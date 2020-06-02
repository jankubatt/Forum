<?php
	session_start();
?>

<!DOCTYPE html>
<html>
	<head>
		<title>Register</title>
		<style>
		    #kk{
		        text-align: center;
		        border: 2px solid black;
		        margin:300px;
		        padding:45px;
		        margin-left:750px;
		        margin-right:750px;		        
		    }
		</style>
	</head>
	<body>
	
	<img src="https://seeklogo.com/images/A/anonymous-logo-D081A0F6B1-seeklogo.com.png" style="display: block;
    margin: 0 auto; padding:none;">
	
	<div id="kk">
	    
		<form action="script/register.php" method="POST">
			Username:
			<input type="text" name="username">
			<br><br>
			Nickname:
			<input type="text" name="lmao">
			<br><br>
			Password:
			<input type="password" name="pwd">
			<br><br>
			Confirm Password:
			<input type="password"  name="pwdCfm">
			<br><br>
			<input type="submit">
		</form>
	</div>	
	</body>
</html>