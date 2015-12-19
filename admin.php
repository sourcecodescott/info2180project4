<?php

	
	session_start();	

	
	if(!isset($_SESSION['SESS_ID']) || (trim($_SESSION['SESS_ID']) == '')) {
		header("location: index.php");
		exit();
	};

	
include ('connection.php');
?>

<html>


<head>

  <meta charset="UTF-8">

  <title>Cheapo Mail- Login Page</title>
    <link rel="stylesheet" href="css/style.css">
	
	
	<title>Cheapo Admin</title>
			 
			 
			
			 <script type="text/javascript">
						function validateForm()
						{
						var a=document.forms["reg_form"]["fname"].value;
						var b=document.forms["reg_form"]["lname"].value;
						var f=document.forms["reg_form"]["password"].value;
						var c=document.forms["reg_form"]["username"].value;
					
						if ((a==null || a=="") && (b==null || b=="") && (c==null || c=="") && (f==null || f==""))
						  {
						  alert("All Field must be filled out");
						  return false;
						  }
						if (a==null || a=="")
						  {
						  alert("First name must be filled out");
						  return false;
						  }
						if (b==null || b=="")
						  {
						  alert("Last name must be filled out");
						  return false;
						  }
						if (c==null || c=="")
						  {
						  alert("user name must be filled out");
						  return false;
						  }
						if (f==null || f=="")
						  {
						  alert("Password must be filled out");
						  return false;
						  }else if ( ){

						  	alert("Incorrect Password Format!");
						  	return false;
						  }
						 alert("User was added successfully");
						};
			
					
			</script>

			
			    <style type="text/css">
        #password {
            height: 22px;
            width: 170px;
        }
    </style>
    
</head>



<body>



  <div class="mycontent">
    <div align="center"><h1>Welcome to the Admin Page</h1>
	</br>
	<a href="logout.php"><button>Log Out</button></a><a href="view_users.php">&nbsp;<button id="view">View Users</button></p></a>
	</div>

				
<div id="register" style="display:nones;" >
        	
        	<form name="reg_form" id="reg_form" action="register_user.php" method="POST" onsubmit="return validateForm()"> 

        		
        			<h1>Add User</h1>
        		<p>First Name:<input type="text" name="fname" id="fname" required></p>
        		<p>Last Name:<input type="text" name="lname" id="lname" required></p>
        		<p>User Name:<input type="text" name="username" id="username" required></p>
        		<p>Password:<input type="password" name="password" id="password" required pattern="^(?=.*[0-9])(?=.*[a-z])(?=.*[A-Z])([a-zA-Z0-9]{8,})$" title="passwords must have at least one number and one letter, and one capital letter and are at least 8 digits long."></p>	
        		<p><input type="submit"> </p>
        		
        		
			</form>	
</div>

</div>


</body>

</html>





















