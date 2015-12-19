<?xml version="1.0" encoding="utf-8"?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<?php
    session_regenerate_id(true);
	session_start();	
	unset($_SESSION['SESS_ID']);
	unset($_SESSION['SESS_FIRST_NAME']);
	unset($_SESSION['SESS_LAST_NAME']);
?>


<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
		<head>
			 <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<head>

  <meta charset="UTF-8">

  <title>Cheapo Mail- Login Page</title>
    <link rel="stylesheet" href="css/style.css">

</head>



<body>



  <div class="login-card">
    <h1>Welcome to <strong>Cheapo Mail</strong></h1><br>
	
	
  <form name= "loginform" id="login_form" action="login.php" method="post">
  
	<div style="text-align: center"> <img src="img/logo.png" width="60px" height="50px" align="center"></div>
	<input type="text"  name="username" id="username" tabindex="1" placeholder="Username" >
		<input type="password" name="password" id="password" tabindex="2" placeholder="Password">
    <input type="submit" name="login" class="login login-submit" value="login">
	<div>  <?php
										if( isset($_SESSION['ERRMSG_ARR']) && is_array($_SESSION['ERRMSG_ARR']) && count($_SESSION['ERRMSG_ARR']) >0 ) {
										echo '<ul class="err">';
										foreach($_SESSION['ERRMSG_ARR'] as $msg) {
											echo '<li>',$msg,'</li>'; 
											}
										echo '</ul>';
										unset($_SESSION['ERRMSG_ARR']);
										}
									?> </div>
  </form>

</div>


</body>

</html>




