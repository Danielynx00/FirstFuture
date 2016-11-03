<?php
session_start();

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="stylesheet" type="text/css" href="css/style.css">
<title>First Future Philippines</title>
</head>

<body>
	<div id="logo">
		<h1><a href="#">First Future Philippines</a></h1>
	</div>
	<div id="navi">
            	<ul>
                	<li><a href="#">Homepage</a></li>
                    <li><a href="#">About us</a></li>
                    <li><a href="#">Gallery</a></li>
                    <li><a href="#">Services</a></li>
                </ul>
            </div>
</div>
<div id="body">
<form action="process.php" method="post">
<table border="0"class="reg" width="100">
<i><b></i><tr>
  <td align="center" class="login"><b>
  <h1>LOGIN</h1></b></td></tr></b>
<tr><td align="center" class="login"></td></tr>
<tr><td align="left" class="user">Last Name:</td></tr>
<tr><td ><input type="text" name="email1"/></td></tr>
<tr><td align="left" class="user">Employee Number:</td></tr>
<tr><td><input type="password" name="password" /></td></tr>
<tr><td><input type="submit" name="login" class="ok" value="Login" /></td></tr>
<tr><td>
<?php if(isset($_GET['err']))
		{
			
				echo '<div class="error"style="color:#060">You are Not A member Pls Try Again</div>';
		
				
		} ?></td></tr>

<?php

 if(isset($SESSION['email1']))
 if(isset($_GET['success']))
		{
			
				echo '<div class="error"style="color:#060">Welcome</div>';
		
				
		} ?>
</table>
</form>
</div>
<div id="bodyfooter"></div>
<div id="footer"></div>
</div>
</body>
</html>